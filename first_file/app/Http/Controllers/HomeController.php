<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 
    function show(){
        // return view('home', [
        //     'name' => 'Guest',
        //     'users' => ['John', 'Jane', 'Bob'],
        // ]);

        // if redirected
        // return redirect()->to('/home/profile/user');

        return to_route('hm'); // this is the shortcut for the above code. It will redirect to the route named 'hm' which is defined in the web.php file.
    }

    function user(){
        return to_route('user',["name"=>"Nill"]);
    }
}
