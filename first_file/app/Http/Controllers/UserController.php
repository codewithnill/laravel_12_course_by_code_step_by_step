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



    function userHome() {
        $name='NB Nill';
        // return view('home');
        $users=['NB Nill','John Doe','Jane Doe'];
        return view('home',['name'=>$name,'users'=>$users]);
    }







    function addUser(Request $request) {
        // echo "User added successfully";
        // return $request;
        // echo "user name : ".$request->username;
        // echo "<br>";
        // echo "user email : ".$request->email;
        // echo "<br>";
        // echo "user city : ".$request->city;

        $request->validate([            
            'username'=>'required|min:3|max:15',
            'email'=>'required|email',
            'city'=>'required | uppercase',
            'skill'=>'required'
        ],[
            'username.required'=>'Username field cannot be empty',
            'username.min'=>'Username must be at least 3 characters',
            'username.max'=>'Username cannot be more than 15 characters',
            'email.email'=>'not a valid email address',
            'city.uppercase'=>'City name must be in uppercase.........',
        ]);
        return $request;
    }



    function addUser2(Request $request) {
        // echo "User added successfully";
        // return $request;
        print_r("user skills : ");
        print_r($request->skill);
        echo "<br>";
        echo "user gender : ".$request->gender;
        echo "<br>";
        echo "user city : ".$request->city;
        echo "<br>";
        echo "user age : ".$request->age;

    }   
}