<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    // protected $table="college_students"; // prevent error for table names

    function testFun() {
        return "dummy function called from model.";
    }
}
