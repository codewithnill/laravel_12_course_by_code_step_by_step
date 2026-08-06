<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class deviceController extends Controller
{
    //
    // function index(Request $req) {
    //     return "some code";
    // }

    function index(Device $key) {
        // return $key->all();
        // for all data
        return $key;
        // for single data
    }
}
