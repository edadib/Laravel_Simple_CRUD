<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marital;

class MaritalController extends Controller
{
    public function index()
    {

        $senarai = Marital::all();

        return view('marital',compact('senarai'));
    }
}
