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
            return redirect('student2list');
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

    function deleteStudent($id) {
        $isDeleted = student2::destroy($id); // 0 if not deleted, 1 if deleted
        if($isDeleted) {
            return redirect('student2list');
        } else {
            return "Failed to delete student.";
        }
    }

    function editStudent($id) {
        $studentData = student2::find($id); // find the student by id
        return view('student2edit', ['student' => $studentData]); // return the edit view with the student data
    }
}
