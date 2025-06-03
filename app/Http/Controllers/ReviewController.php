<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $booking = \App\Models\Booking::findOrFail($request->booking_id);

        // Prevent duplicate reviews
        if (Review::where('booking_id', $booking->id)->exists()) {
            return back()->with('error', 'You have already reviewed this booking.');
        }

        Review::create([
            'cust_id' => Auth::id(),
            'homestay_id' => $booking->homestay_id,
            'booking_id' => $booking->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Thank you for your review!');
    }
}
