<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // imports Laravel’s HTTP client helper

class user_controller_for_hc extends Controller
{
    //
    function getUser() {
        $response=Http::get('https://jsonplaceholder.typicode.com/users/1');
        
        return $response;

        // return $response->status();
        // return $response->body();
        
    }
}
