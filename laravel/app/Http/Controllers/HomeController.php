<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use App\Models\Activity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(auth()->user()->roleID == 1)
        {
            $announcement = Announcement::all();
            $activities = Activity::all();
            return view('user_dashboard',compact('announcement', 'activities'));
        }
        else
        {
        return view('dashboard');
        }
    }

    public function faq()
    {
        return view('faq');
    }

    public function floor()
    {
        return view('floor');
    }

    public function reserve()
    {
        $act = Activity::all();

        return view('reserve',compact('act'));
    }
}
