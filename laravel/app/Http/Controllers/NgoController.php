<?php

namespace App\Http\Controllers;
use App\Models\Ngo;

use Illuminate\Http\Request;

class NgoController extends Controller
{
    public function index()
    {

        $senarai = Ngo::all();

        return view('ngolist',compact('senarai'));
    }
}
