<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service()
    {
        return view('services/service');
    }

    public function serviceDetails()
    {
        return view('services/serviceDetails');
    }

    public function about()
    {
        return view('services/about');
    }

}
