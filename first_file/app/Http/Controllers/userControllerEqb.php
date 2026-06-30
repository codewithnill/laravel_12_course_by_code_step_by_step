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

        
        // $response=userModelEqb::where('phone','01711111111')->get();
        
        // $response=userModelEqb::where('phone','01711111111')->first();

        // $response=userModelEqb::find(2);

        

        // $response=[$response];
        // return view('userViewEqb',['users'=>$response]);    


        $response=userModelEqb::insert(['name'=>'Gay','email'=>'gay@test.com','phone'=>'0101']);

        if($response) {
            return "Data inserted..";
        } else {
            return "Data not inserted..";
        }
    }


}
