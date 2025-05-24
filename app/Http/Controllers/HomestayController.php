<?php

namespace App\Http\Controllers;
use App\Models\Homestay;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
public function showHouse1()
{
    return $this->renderHouseView(1, 'home/house1');
}

public function showHouse2()
{
    return $this->renderHouseView(2, 'home/house2');
}

public function showHouse3()
{
    return $this->renderHouseView(3, 'home/house3');
}

private function renderHouseView($homestayId, $viewName)
{
    $bookings = Booking::where('homestay_id', $homestayId)->get();
    $unavailableDates = [];

    foreach ($bookings as $booking) {
        $start = Carbon::parse($booking->start_date);
        $end = Carbon::parse($booking->end_date);
        while ($start->lte($end)) {
            $unavailableDates[] = $start->format('Y-m-d');
            $start->addDay();
        }
    }

    return view($viewName, [
        'unavailableDates' => $unavailableDates,
        'homestayId' => $homestayId
    ]);
}
}
