<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
// importing validation class
use Illuminate\Support\Facades\Validator;

class studentController extends Controller
{
    //
    function list(){
        return student::all();
    }

    function add(Request $req){
        $rules = array(
            "name"=>"required|min:2|max:15",
            "email"=>"required|email",
            "batch"=>"required"
        );

        $validation = Validator::make($req->all(),$rules);

        if($validation->fails()){
            return $validation->errors();
        } else {
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
    


        //return $req->input(); // this will return all the input data from the request
        
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


    function deleteStudent($id) {
        // return $id;
        $student=student::destroy($id);
        if($student){
            return ["result"=>"student deleted successfully"];
        } else {
            return ["result"=>"student not deleted"];
        }
    }
}
