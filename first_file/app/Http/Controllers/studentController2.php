<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\student2;

class studentController2 extends Controller
{
    //
    function addStudent2(Request $request) {
        $student = new student2();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;

        $student->save(); // this will save the data in the database.

        if($student) {
            return "Student added successfully.";
        } else {
            return "Failed to add student.";
        }
        // return $request->name;

        return "add function called.";
    }

    function list() {
        $studentData = student2::all(); 
        return view('student2list', ['students' => $studentData]); // this will return the list view with the students data.
    }
}
