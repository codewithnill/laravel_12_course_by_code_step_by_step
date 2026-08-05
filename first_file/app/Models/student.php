<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table="student2"; // prevent error for table names

    function getNameAttribute($value) {
        // return "apple"; 
        return lcfirst($value); // this will return the name with first letter lower case
    }

    function getEmailAttribute($value) {
        return "email : ".$value; // this will return the email with "email : " prefix
    }

    function setNameAttribute($value) {
        // overriding the value assigned in studentController.php file. This will set the name with first letter upper case
        $this->attributes['name'] = ucfirst($value); // this will set the name with first letter upper case
    }


    function setPhoneAttribute($value) {
        // overriding the value assigned in studentController.php file. This will set the phone with +88 prefix
        $this->attributes['phone'] = "+88-".$value; // this will set the phone with "phone : " prefix
    }
}
