<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        return "NB Nill";
    }

    function aboutUser() {
        return "Hello this is NB Nill";
    }

    function getUserName($name) {
        return "Hello this is ". $name;
    }
}
