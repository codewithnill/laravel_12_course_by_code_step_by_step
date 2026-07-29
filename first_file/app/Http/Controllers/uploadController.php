<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function upload(Request $req) {
        // return view('upload');
        // echo "File uploaded successfully";
        // $path=$req->file('file')->store('public');

        $path=$req->file('file')->storeAs('public','dummy1.png');
        $filenamearray=explode('/',$path);
        $filename=$filenamearray[1];
        return view('display', ['path'=>$filename]);
    }
}
