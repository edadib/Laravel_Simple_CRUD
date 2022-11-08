<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {

        $senarai = Sizes::all();

        return view('ngolist',compact('senarai'));
    }
}
