<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControllerForSession extends Controller
{
    //
    function login(Request $req){ 
        // return "login function";
        $req->session()->put('user', $req->input('user'));
        // return redirect('profile-session');
        echo session('user');
    }
}
