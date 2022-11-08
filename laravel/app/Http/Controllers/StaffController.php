<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\User;
use App\Models\roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Html;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $senarai = DB::table('staff')->get();

        return view('stafflist',compact('senarai'));
    }

    public function userList()
    {
        $senarai = DB::table('users')
        ->select(DB::raw('users.*, roles.*, users.id as userID'))
        ->leftJoin('roles', 'users.roleID', '=', 'roles.id')
        ->get();

        return view('userlist',compact('senarai'));
    }

    public function add_user()
    {
        $senarai_role = DB::table('roles')->get();
        // var_dump($senarai_role);die();
        return view('dell_user/add_user', compact('senarai_role'));
    }

    
    public function insert_user()
    {
        $name = null;
        $role = null;
        $email = null;
        extract($_POST);
        $data['name'] = $name;
        $data['email'] = $email;
        $data['role'] = $role;

        // var_dump($data); die();

        $insert = DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'roleID' => $role,
            'password' => '$2y$10$qOSWYmoKs08bPIi4ccPwfe7Mdxx1dCyanwWDeNJjMsIdo96HJWWbq',
        ]);


        return redirect()->action([StaffController::class, 'userlist']);
    }

    public function delete_user()
    {
        $id = null;
        extract($_POST);
        $data['id'] = $id;
        // var_dump($data); die();
        $delete = DB::table('users')->where('id', $id)->delete();

        return redirect()->action([StaffController::class, 'userlist']);
    }
}
