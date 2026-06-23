<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_controller_for_route_group extends Controller
{
    //
    function show(){
        return "Student list";
    }

    function add(){
        return "Add new student";
    }
}  
