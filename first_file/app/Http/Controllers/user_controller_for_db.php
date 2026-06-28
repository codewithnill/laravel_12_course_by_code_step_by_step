<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user_controller_for_db extends Controller
{
    // route user_db
    function users() {
        // return "user function";
        // return DB::select('select * from products');
        $users=DB::select('select * from users');
        return view('users_db',['users'=>$users]);
    }
}
