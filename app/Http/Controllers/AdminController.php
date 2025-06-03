<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Homestay;
use App\Models\User;
use App\Models\Review;

use Carbon\Carbon;


class AdminController extends Controller
{
    public function dashboard()
{
    $totalCustomers = User::where('role', 'user')->count();
    $totalBookings = Booking::count();
    $totalSales = Booking::whereHas('payment')
                    ->where('status', 'paid')
                    ->sum('price');
   
    $monthlySales = Booking::select(
        DB::raw('SUM(price) as total'),
        DB::raw('MONTH(created_at) as month')
    )
    ->where('status', 'paid')
    ->groupBy(DB::raw('MONTH(created_at)'))
    ->pluck('total', 'month')
    ->toArray();

    // Fill 12 months
    $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    $salesData = [];
    for ($i = 1; $i <= 12; $i++) {
        $salesData[] = isset($monthlySales[$i]) ? $monthlySales[$i] : 0;
    }

      // ⭐ Star Ratings Count (simple and reliable)
    $starLabels = ['1 Star', '2 Stars', '3 Stars', '4 Stars', '5 Stars'];
    $starCounts = [];

    for ($i = 1; $i <= 5; $i++) {
        $starCounts[] = Review::where('rating', $i)->count();
    }

    return view('admin/dashboard', compact('totalCustomers','totalBookings','totalSales',
    'months', 'salesData', 'starLabels', 'starCounts' ));
}

    public function try()
    {
        return view('admin/cuba');
    }
    

    public function showBookings(Request $request)
{
    $homestayId = $request->query('homestay_id'); // optional filter
    $bookingsQuery = Booking::with(['homestay', 'customer']);

    if ($homestayId) {
        $bookingsQuery->where('homestay_id', $homestayId);
    }

    $bookings = $bookingsQuery->orderBy('start_date')->get();
    $homestays = Homestay::all();

    return view('admin/listBooking', compact('bookings', 'homestays', 'homestayId'));
}

   public function showAvailability(Request $request)
{
    $homestayId = $request->query('homestay_id');
    $homestays = Homestay::all();

    $bookings = Booking::when($homestayId, function ($query) use ($homestayId) {
        return $query->where('homestay_id', $homestayId);
    })->get();

    $unavailableDates = [];

    foreach ($bookings as $booking) {
        $start = Carbon::parse($booking->start_date);
        $end = Carbon::parse($booking->end_date);
        while ($start->lte($end)) {
            $unavailableDates[] = $start->format('Y-m-d');
            $start->addDay();
        }
    }

    return view('admin.availability', [
        'homestays' => $homestays,
        'homestayId' => $homestayId,
        'unavailableDates' => $unavailableDates
    ]);
}
}
