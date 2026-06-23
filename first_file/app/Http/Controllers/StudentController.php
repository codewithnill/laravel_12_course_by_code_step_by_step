<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show() {
        return "list of students";
    }

    function add() {
        return "student added";
    }

    function delete() {
        return "student deleted";
    }
}
