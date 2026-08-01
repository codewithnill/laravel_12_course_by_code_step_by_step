<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table="students"; // prevent error for table names

    function getNameAttribute($value) {
        // return "apple"; 
        return lcfirst($value); // this will return the name with first letter lower case
    }

    function getEmailAttribute($value) {
        return "email : ".$value; // this will return the email with "email : " prefix
    }
}
