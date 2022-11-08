<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {

        $senarai = role::all();

        return view();
    }
}
