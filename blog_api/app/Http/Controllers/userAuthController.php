<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userAuthController extends Controller
{
    //
    function login(Request $request){
       return "login function called";
    }

    function signup(Request $request){
    //    return "signup function called";
        $input=$request->all();
        $input["password"]=bcrypt($input["password"]);
        $user=User::create($input);
        $success["token"]=$user->createToken('MyApp')->plainTextToken;
        $user['name']=$user->name;
        return ['success'=>true, "result"=>$success, "message"=>"User registered successfully"];
    }
}
