<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControllerForHR extends Controller
{
    //
    function login(Request $req){ 
        // return "login function";
        // return $req;
        echo "request method: " . $req->method();
        echo "<br>";
        echo "request path: " . $req->path();
        echo "<br>";
        echo "request url: " . $req->url();
        echo "<br>";
        echo "name is " . $req->input('name');
        echo "<br>";
        print_r($req->input());
        echo "<br>";
        print_r($req->collect());
        echo "<br>";

        if($req->isMethod('post')){
            echo "execute code for post request";
        }
        else{
            echo "execute code for other request";
        }
        echo "<br>";

        if($req->is('user')){
            echo "execute code for user path";
        }
        else{
            echo "execute code for other path";
        }

        echo "<br>";
        echo "ip is ".$req->ip();



    }
}
