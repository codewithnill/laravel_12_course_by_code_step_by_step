<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        // return "NB Nill";
        return view('user');
    }

    function aboutUser() {
        return "Hello this is NB Nill";
    }

    function getUserName($name) {
        // echo "Hello this is ". $name;
        return view('getUser',['name'=>$name]);
    }
}
