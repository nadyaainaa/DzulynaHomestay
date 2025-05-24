<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\Booking;
use App\Models\Homestay;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PaymentController extends Controller
{
    public function show(Booking $booking)
    {
        $homestay = Homestay::find($booking->homestay_id);
        $price = $booking->price;
        $days = $booking->days;

        return view('home.paymentPage', compact('homestay', 'booking', 'price', 'days'));
    }

      public function process(Request $request)
    {
        // Store new payment
        $payment = Payment::create([
            'price' => $request->price,
        ]);

        // Update booking with payment_id and set status to 'paid'
        Booking::where('id', $request->booking_id)->update([
            'payment_id' => $payment->id,
            'status' => 'paid',
        ]);

        $booking = Booking::find($request->booking_id);
        $homestay = Homestay::find($booking->homestay_id);

        $reference_id = rand(100000000, 999999999);
        $price = $booking->price;
        $days = $booking->days;

        return view('home.confirmPayment', compact('reference_id', 'homestay', 'price', 'days'));
    }

    public function generateReceipt($bookingId)
{
    $booking = Booking::findOrFail($bookingId);
    $homestay = $booking->homestay;
    $price = $booking->price;
    $days = $booking->days;

    $pdf = Pdf::loadView('receipt', compact('booking', 'homestay', 'price', 'days'));

    return $pdf->download('receipt_booking_'.$booking->id.'.pdf');
}
}
