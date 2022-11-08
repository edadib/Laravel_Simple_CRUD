<?php

namespace App\Http\Controllers;
use App\Models\relation;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index()
    {

        $senarai = relation::all();

        return view('ngolist',compact('senarai'));
    }
}
