<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModelEqb;

class userControllerEqb extends Controller
{
    //
    function queries() {
        // return "queries";
        $response=userModelEqb::all();
        return $response;
    }
}
