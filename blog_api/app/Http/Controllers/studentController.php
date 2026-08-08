<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    //
    function list(){
        return student::all();
    }

    function add(Request $req){
        //return $req->input(); // this will return all the input data from the request
        $student = new student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->batch = $req->batch;
        if($student->save()){
            // return "student added successfully";
            return ["result"=>"student added successfully"];
        } else {
            // return "student not added";
            return ["result"=>"student not added"];
        }
    }



    function update(Request $req){
        //return $req->input(); // this will return all the input data from the request
        $student = student::find($req->id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->batch = $req->batch;
        if($student->save()){
            return ["result"=>"student updated successfully"];
        } else {
            return ["result"=>"student not updated"];
        }
    }
}
