<?php

namespace App\Http\Controllers;
use App\Models\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {

        $senarai = Staff::all();

        return view('stafflist',compact('senarai'));
    }
}
