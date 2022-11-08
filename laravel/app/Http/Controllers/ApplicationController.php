<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function index()
    {

        $senarai = DB::table('applications')
        ->select(DB::raw('applications.*, sizes.*,staff.*, staff.name as staff_name, ngos.name as ngo_name, relations.*'))
        ->leftJoin('staff', 'applications.staffID', '=', 'staff.id')
        ->leftJoin('sizes', 'applications.sizeID', '=', 'sizes.id')
        ->leftJoin('ngos', 'applications.ngoID', '=', 'ngos.id')
        ->leftJoin('relations', 'applications.roleID', '=', 'relations.id')
        ->get();

        return view('application',compact('senarai'));
    }

    public function attendees()
    {

        $senarai = DB::table('applications')
        ->select(DB::raw('applications.*, sizes.*,staff.*, staff.name as staff_name, ngos.name as ngo_name, relations.*'))
        ->leftJoin('staff', 'applications.staffID', '=', 'staff.id')
        ->leftJoin('sizes', 'applications.sizeID', '=', 'sizes.id')
        ->leftJoin('ngos', 'applications.ngoID', '=', 'ngos.id')
        ->leftJoin('relations', 'applications.roleID', '=', 'relations.id')
        ->get();

        return view('application',compact('senarai'));
    }
}
