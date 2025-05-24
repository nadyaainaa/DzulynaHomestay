<?php

namespace App\Http\Controllers;
use App\Models\Homestay;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function homepage()
    {
        return view('home/homepage');
    }

    public function showHouse($id)
{
    $homestay = Homestay::findOrFail($id);

    $bookings = Booking::where('homestay_id', $id)->get(['start_date', 'end_date']);

    $bookedRanges = [];
    foreach ($bookings as $booking) {
        $bookedRanges[] = [
            'start' => $booking->start_date,
            'end' => $booking->end_date,
        ];
    }

    return view('home/house1', compact('homestay', 'bookedRanges'));
}

    // public function house1()
    // {
    //     return view('home/house1');
    // }
    public function house2()
    {
        return view('home/house2');
    }

    public function house3()
    {
        return view('home/house3');
    }
    public function index()
    {
        return view('home/index');
    }

    public function index2()
    {
        return view('home/index2');
    }

    public function index3()
    {
        return view('home/index3');
    }

    public function index4()
    {
        return view('home/index4');
    }

    public function index5()
    {
        return view('home/index5');
    }

    public function index6()
    {
        return view('home/index6');
    }

    public function indexSixPage()
    {
        return view('home/indexSixPage');
    }

    public function indexFivePage()
    {
        return view('home/indexFivePage');
    }

    public function indexFourPage()
    {
        return view('home/indexFourPage');
    }

    public function indexThreePage()
    {
        return view('home/indexThreePage');
    }

    public function indexTwoPage()
    {
        return view('home/indexTwoPage');
    }

    public function indexOnePage()
    {
        return view('home/indexOnePage');
    }
}
