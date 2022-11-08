<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\announcement;

class AnnouncementController extends Controller
{
    public function index()
    {

        $senarai = announcement::all();

        return view('announ.announcement',compact('senarai'));
    }

    public function create()
    {
        return view('announ.create_announ');
    }

    public function store(Request $request)
    {
        announcement::create($request->except(['_token','submit']));
        return redirect('/announ');
        // dd($request->except(['_token','submit']));
    }
}
