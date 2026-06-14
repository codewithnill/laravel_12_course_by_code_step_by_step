<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // for the controller created recently




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


// redirect 
//route::redirect('/home','/'); // / indicates go to welcome page when user access home page in the url



// creating a route for the user controller and its function
Route::get('user',[UserController::class,'getUser']);
// enter http://localhost:8000/user in the url to get the result

Route::get('about',[UserController::class,'aboutUser']);
// When we register two routes with the same method and path, the last one wins and overwrites the first one.

Route::get('user/{name}',[UserController::class,'getUserName']);


Route::get('admin-login',[UserController::class,'adminLogin']);
Route::view('/admin', 'admin.login'); // this is the shortcut for the above code. It will return the home view when the user visits the /home url.


