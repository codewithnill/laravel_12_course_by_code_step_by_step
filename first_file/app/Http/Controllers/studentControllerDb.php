<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentControllerDb extends Controller
{
    //
    function getStudents() {
        $students=\App\Models\student::all();
        return $students;
    }
}
