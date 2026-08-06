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

    function sendEmail(Request $req) {
        $to=$req->to;
        $msg=$req->message;
        $subject=$req->subject;
        Mail::to($to)->send(new emailLaravel($msg, $subject));
        return "Email sent successfully";
    }

    
}
