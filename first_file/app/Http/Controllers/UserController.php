<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        // return "NB Nill";
        return view('user');
    }

    function userAbout($name) {
        // return "Hello this is NB Nill";
        return view('about',['user'=>$name]);
    }

    function getUserName($name) {
        // echo "Hello this is ". $name;
        return view('getUser',['name'=>$name]);
    }

    function adminLogin() {
        return view('admin.login');
    }
}