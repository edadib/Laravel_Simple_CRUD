<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $senarai = DB::table('staff')->get();

        return view('stafflist',compact('senarai'));
    }

    public function userList()
    {
        $senarai = DB::table('users')->get();

        return view('userlist',compact('senarai'));
    }

    public function add_user()
    {
        return view('dell_user/add_user');
    }
}
