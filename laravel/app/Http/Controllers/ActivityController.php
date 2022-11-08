<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    
    public function index()
    {

        $act = Activity::all();

        return view('activity.index',compact('act'));
    }

    public function create ()
    {
        return view('activity.create');
    }

    public function store (Request $request)
    {
        Activity:: create([
            'name' =>$request->name,
            'details' => $request->details
        ]);

        return redirect()->route('activity.index');
    }

    public function edit ($id)
    {
        $act = Activity::find($id);
        return view('activity.edit',compact('act'));
    }

    public function update (Request $request, $id)
    {
        $act = Activity::find($id);
        $act->name = $request->name;
        $act->details = $request->details;
        $act->save();

        return redirect()->route('activity.index');
    }

    public function delete ($id)
    {
        $act = Activity::find($id);
        return view('activity.edit',compact('act'));
    }
}
