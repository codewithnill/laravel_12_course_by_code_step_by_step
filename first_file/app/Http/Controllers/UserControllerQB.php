<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserControllerQB extends Controller
{
    //
    function queries() {
        // return "queries"; 
        // $result=DB::table('users')->get();
        // return $result;

        $result=DB::table('users')->where('phone','01711111111')->get();
        return view('userQB',['users'=>$result]);
    }
}
