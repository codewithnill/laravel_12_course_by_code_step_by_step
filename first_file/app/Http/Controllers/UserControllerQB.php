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

        //$result=DB::table('users')->where('phone','01711111111')->get();
        
        // $result=DB::table('users')->first();
        // $result=[$result]; // single result so used array

        // $result=DB::table('users')->insert(['name'=>'Tony','email'=>'tony@test.com','phone'=>'1111']);

        $result=DB::table('users')->where('name','Tony')->update(['phone'=>'2222']);

        // if($result) {
        //     return "Data inserted..";
        // } else {
        //     return "Data not inserted..";
        // }

        if($result) {
            return "Data updated..";
        } else {
            return "Data not updated..";
        }

        return view('userQB',['users'=>$result]);
    }
}
