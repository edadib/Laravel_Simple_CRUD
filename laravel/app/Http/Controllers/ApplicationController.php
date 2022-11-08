<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {

        $senarai = Application::all();

        return view('application',compact('senarai'));
    }
}
