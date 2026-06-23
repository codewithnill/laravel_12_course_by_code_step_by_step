<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // for the controller created recently




Route::get('/', function () {
    return view('welcome');
    // return view('home');
});

//Route::get('/home', function () { if written home after the /, the home page can be accessed by writing localhost:8000/home in the url. 

// shortcut
// Route::view('/home', 'home'); // this is the shortcut for the above code. It will return the home view when the user visits the /home url.

// Route::get('/home', function () {
//     return view('home', ['name' => 'Guest']);
// });

// Route::get('/home/profile/user', function () {
//     return view('home', [
//         'name' => 'Guest',
//         'users' => ['John', 'Jane', 'Bob'],
//     ]);
// });

// Route::view('/home/profile/user', 'home', ['name' => 'Guest', 'users' => ['John', 'Jane', 'Bob']]);

Route::view('/home/profile/user', 'home', ['name' => 'Guest', 'users' => ['John', 'Jane', 'Bob']])->name('hm');

Route::get('/about',function () {
    return view('about');
});

// Route::get('/about/{name}',function ($name) {
//     echo $name;
//     return view('about');
// });

// putting the name as parameter inside view
Route::get('/about/{name}',function ($name) {
    return view('about',['user'=>$name]);
});


// redirect 
//route::redirect('/home','/'); // / indicates go to welcome page when user access home page in the url



// creating a route for the user controller and its function
Route::get('user',[UserController::class,'getUser']);
// enter http://localhost:8000/user in the url to get the result

Route::get('user-about/{name}',[UserController::class,'userAbout']);
// When we register two routes with the same method and path, the last one wins and overwrites the first one.

// Route::get('user-about',[UserController::class,'userAbout']);

Route::get('user/{name}',[UserController::class,'getUserName']);


Route::get('admin-login',[UserController::class,'adminLogin']);
// Route::view('/admin', 'admin.login'); // this is the shortcut for the above code. It will return the home view when the user visits the /admin url. But when we write this line, the else block in the adminLogin function will not execute because it will always find the view and return it. So to execute the else block, we have to comment this line.


Route::get('user-home',[UserController::class,'userHome']);


Route::view('user-form', 'user-form');
Route::post('add-user',[UserController::class,'addUser']); // calling the addUser function in the UserController.php file when the user submits the form. The form method is post, so we use Route::post() method to register the route. The first parameter is the url, the second parameter is the controller and the function that we want to call when the user submits the form. 


Route::view('user-form-2', 'user-form-2');
Route::post('adduser2',[UserController::class,'addUser2']);  

// making route for new views for url
Route::view('hforurl', 'homeforurl');
Route::view('user', 'homeforurl');
Route::view('aforurl', 'aboutforurl');
Route::view('aforurl/{name}', 'aboutforurl');
Route::view('wforurl', 'welcomeforurl');
