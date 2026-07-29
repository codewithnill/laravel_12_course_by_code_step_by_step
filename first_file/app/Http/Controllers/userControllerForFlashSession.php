<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControllerForFlashSession extends Controller
{
    //
    function addUserForFlashSession(Request $req) {
        // your db code
        $req->session()->flash('message', 'User added successfully');
        $req->session()->flash('name', 'nb nill');
        return redirect('user-flash-session');
    }
}
