<?php

use Illuminate\Http\Request;
use App\Models\Booking;

Route::post('/check-availability', function (Request $request) {
    $request->validate([
        'homestay_id' => 'required|integer',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    $isBooked = Booking::where('homestay_id', $request->homestay_id)
        ->where(function ($query) use ($request) {
            $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                  ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                  ->orWhereRaw('? BETWEEN start_date AND end_date', [$request->start_date])
                  ->orWhereRaw('? BETWEEN start_date AND end_date', [$request->end_date]);
        })
        ->exists();

    return response()->json([
        'status' => $isBooked ? 'booked' : 'available'
    ]);
});



