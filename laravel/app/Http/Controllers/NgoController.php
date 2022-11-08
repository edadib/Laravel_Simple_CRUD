<?php

namespace App\Http\Controllers;
use App\Models\Ngo;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NgoController extends Controller
{
    public function index()
    {

        $senarai = Ngo::all();

        return view('ngolist',compact('senarai'));
    }

    public function add_ngo()
    {
        return view('ngo/add');
    }

    public function insert_ngo()
    {
        $name = null;
        $phone = null;
        $account = null;
        extract($_POST);
        $data['name'] = $name;
        $data['phone'] = $phone;
        $data['account'] = $account;
        // var_dump($data); die();

        $insert = DB::table('ngos')->insert([
            'ngo_id' => 'NGO003',
            'name' => $name,
            'phone' => $phone,
            'account' => $account,
        ]);

        $senarai = Ngo::all();

        return redirect()->action([NgoController::class, 'index']);
    }

    public function ngodelete()
    {
        $id = null;
        extract($_POST);
        $data['id'] = $id;
        $delete = DB::table('ngos')->where('id', $id)->delete();

        return redirect()->action([NgoController::class, 'index']);
        // var_dump($id); die();
    }
}
