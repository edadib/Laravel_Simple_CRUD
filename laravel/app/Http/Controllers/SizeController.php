<?php

namespace App\Http\Controllers;
use App\Models\Sizes;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {

        $senarai = Sizes::all();

        return view('ngolist',compact('senarai'));
    }
}
