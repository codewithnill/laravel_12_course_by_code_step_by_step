<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModelEqb;

class userControllerEqb extends Controller
{
    //
    function queries() {
        // return "queries";
        // $response=userModelEqb::all();
        // return $response;

        
        $response=userModelEqb::where('phone','01711111111')->get();
        return view('userViewEqb',['users'=>$response]);    
    }
}
