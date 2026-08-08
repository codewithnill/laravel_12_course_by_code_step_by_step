<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name','email','batch'];
    //  the table was created manually, Laravel still expects created_at and updated_at by default.
    //  to avoid this, we can set the public property $timestamps to false in the model.

}
