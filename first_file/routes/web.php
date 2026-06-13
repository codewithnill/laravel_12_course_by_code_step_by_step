<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

//Route::get('/home', function () { if written home after the /, the home page can be accessed by writing localhost:8000/home in the url. 
