<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return view('home');
});

//Route::get('/home', function () { if written home after the /, the home page can be accessed by writing localhost:8000/home in the url. 

// shortcut
Route::view('/home', 'home'); // this is the shortcut for the above code. It will return the home view when the user visits the /home url.

Route::get('/about',function () {
    return view('about');
});

// Route::get('/about/{name}',function ($name) {
//     echo $name;
//     return view('about');
// });

// putting the name as parameter inside view
Route::get('/about/{name}',function ($name) {
    return view('about',['name'=>$name]);
});