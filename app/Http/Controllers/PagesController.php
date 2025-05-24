<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function errorpage()
    {
        return view('pages/errorpage');
    }

    public function pricing()
    {
        return view('pages/pricing');
    }

    public function project()
    {
        return view('pages/project');
    }

    public function projectDetails()
    {
        return view('pages/projectDetails');
    }

    public function team()
    {
        return view('pages/team');
    }

    public function teamDetails()
    {
        return view('pages/teamDetails');
    }

}
