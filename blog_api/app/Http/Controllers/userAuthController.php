<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userAuthController extends Controller
{
    //
    function login(Request $request){
    //    return $request->all();
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return ["result" => "user not found", "success" => false, "message" => "Invalid email or password"];
        }

        $success["token"] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        return ['success' => true, "result" => $success, "message" => "User logged in successfully"];
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
