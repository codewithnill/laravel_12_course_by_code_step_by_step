<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

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

    function about($name) {
        return $name;;
    }

    function list() {
        // return "list of students from model.";       
        return student::all(); // this will return all the students from the database.
    }
}
