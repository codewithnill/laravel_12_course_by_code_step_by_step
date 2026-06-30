<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserControllerQB extends Controller
{
    //
    function queries() {
        // return "queries"; 
        $result=DB::table('users')->get();
        return $result;
    }
}
