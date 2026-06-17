<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        // return view('admin.login');
        // if(View::exists('admin.signup')) {
        //     return view('admin.signup');
        // } else {
        //     echo "No view found";
        // }
        // to execute else block i had to comment this line on route : Route::view('/admin', 'admin.login');




        //to check if the view exists or not, we can use the View::exists() method. It will return true if the view exists and false if it does not exist. We can use this method to check if the view exists before returning it. If the view does not exist, we can return a message saying "No view found".
        if(View::exists('admin.login')) {
            return view('admin.login');
        } else {
            echo "No view found";
        }
    }
}