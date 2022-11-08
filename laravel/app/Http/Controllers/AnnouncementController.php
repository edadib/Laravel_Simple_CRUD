<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\announcement;

class AnnouncementController extends Controller
{
    public function index()
    {

        $senarai = announcement::all();

        return view('announcement',compact('senarai'));
    }
}
