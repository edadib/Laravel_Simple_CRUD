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
        ->select(DB::raw('applications.*, applications.id as app_id, sizes.*,staff.*, staff.name as staff_name, ngos.name as ngo_name, relations.*, payment.status as payment'))
        ->leftJoin('staff', 'applications.staffID', '=', 'staff.id')
        ->leftJoin('sizes', 'applications.sizeID', '=', 'sizes.id')
        ->leftJoin('ngos', 'applications.ngoID', '=', 'ngos.id')
        ->leftJoin('relations', 'applications.roleID', '=', 'relations.id')
        ->leftJoin('payment', 'applications.app_status', '=', 'payment.id')
        ->get();

        return view('application',compact('senarai'));
    }

    public function attendees()
    {

        $senarai = DB::table('applications')
        ->select(DB::raw('applications.*, sizes.*,staff.*, staff.name as staff_name, ngos.name as ngo_name, relations.*, payment.status as payment'))
        ->leftJoin('staff', 'applications.staffID', '=', 'staff.id')
        ->leftJoin('sizes', 'applications.sizeID', '=', 'sizes.id')
        ->leftJoin('ngos', 'applications.ngoID', '=', 'ngos.id')
        ->leftJoin('relations', 'applications.roleID', '=', 'relations.id')
        ->leftJoin('payment', 'applications.app_status', '=', 'payment.id')
        ->get();

        return view('application',compact('senarai'));
    }

    public function add_app()
    {
        $senarai_role = DB::table('relations')->get();
        $senarai_ngo = DB::table('ngos')->get();
        $senarai_size = DB::table('sizes')->get();
        // var_dump($senarai_size);die();
        return view('app/add_app', compact('senarai_role','senarai_ngo','senarai_size'));
    }

    public function insert_app()
    {
        $name = null;
        $staff_id = null;
        $role = null;
        $size = null;
        $ngo = null;
        extract($_POST);
        $data['name'] = $name;
        $data['staff_id'] = $staff_id;
        $data['role'] = $role;
        $data['size'] = $size;
        $data['ngo'] = $ngo;
        $rand_id = rand(100000000,999999999);
        // var_dump($rand_id); die();

        $insert = DB::table('applications')->insert([
            'appID' => $rand_id,
            'applicant' => $name,
            'staffID' => $staff_id,
            'roleID' => $role,
            'sizeID' => $size,
            'ngoID' => $ngo,
            'att_status' => 0,
            'app_status' => 0,
            'price' => 50,
        ]);

        $senarai = DB::table('applications')
        ->select(DB::raw('applications.*, sizes.*,staff.*, staff.name as staff_name, ngos.name as ngo_name, relations.*'))
        ->leftJoin('staff', 'applications.staffID', '=', 'staff.id')
        ->leftJoin('sizes', 'applications.sizeID', '=', 'sizes.id')
        ->leftJoin('ngos', 'applications.ngoID', '=', 'ngos.id')
        ->leftJoin('relations', 'applications.roleID', '=', 'relations.id')
        ->get();

        return redirect()->action([ApplicationController::class, 'index']);
    }

    public function appdelete()
    {
        $id = null;
        extract($_POST);
        $data['id'] = $id;
        $delete = DB::table('applications')->where('id', $id)->delete();

        return redirect()->action([ApplicationController::class, 'index']);
        // var_dump($id); die();
    }
}
