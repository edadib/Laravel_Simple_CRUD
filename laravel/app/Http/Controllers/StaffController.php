<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\User;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $senarai = User::all();

        return view('stafflist',compact('senarai'));
    }
}
