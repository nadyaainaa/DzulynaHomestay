<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Homestay;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    
    public function showHouse($id)
{
    $homestay = Homestay::findOrFail($id);

    // Get booked date ranges for this homestay
    $bookings = Booking::where('homestay_id', $id)->get(['start_date', 'end_date']);

    $bookedRanges = [];
    foreach ($bookings as $booking) {
        $bookedRanges[] = [
            'start' => $booking->start_date,
            'end' => $booking->end_date,
        ];
    }

    return view('home.house1', compact('homestay', 'bookedRanges'));
}
    public function store(Request $request)
{
    $request->validate([
        'checkin' => 'required|date|after_or_equal:today',
        'checkout' => 'required|date|after:checkin',
        'homestay' => 'required|integer',
    ]);

    $days = \Carbon\Carbon::parse($request->checkin)->diffInDays(\Carbon\Carbon::parse($request->checkout));
    $pricePerNight = 120;
    $totalPrice = $days * $pricePerNight;

    $booking = Booking::create([
        'homestay_id' => $request->homestay,
        'cust_id' => auth()->id(),
        'start_date' => $request->checkin,
        'end_date' => $request->checkout,
        'days' => $days,
        'price' => $totalPrice,
        'status' => 'pending'
    ]);

    return redirect()->route('payment.page', ['booking' => $booking->id]);
}
}
