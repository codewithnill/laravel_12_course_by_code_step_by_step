<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentControllerDb extends Controller
{
    //
    function getStudents() {
        $data=new \App\Models\student;
        echo $data->testFun();
        $students=\App\Models\student::all();
        // return $students;
        return view('students',['data'=>$students]);
    }
}
