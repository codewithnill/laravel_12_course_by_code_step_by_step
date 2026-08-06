<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailLaravel;

class emailController extends Controller
{
    //
    // function index(Request $req) {
    //     return "some code";
    // }

    function sendEmail() {
        $to="nbnill.hmlnmh@gmail.com";
        $msg="dummy mail";
        $subject="laravel code step by step";
        Mail::to($to)->send(new emailLaravel($msg, $subject));
    }

    
}
