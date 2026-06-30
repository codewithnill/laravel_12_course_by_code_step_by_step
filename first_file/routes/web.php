<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // for the controller created recently

use App\Http\Controllers\HomeController; // for the home controller created recently
use App\Http\Controllers\home_controller_for_route_group; // for the home controller created recently for route group
use App\Http\Controllers\StudentController;

use App\Http\Middleware\agecheck3;
use App\Http\Middleware\countryCheck2;
use App\Http\Controllers\user_controller_for_db;
use App\Http\Controllers\studentControllerDb;

use App\Http\Controllers\user_controller_for_hc;

use App\Http\Controllers\UserControllerQB;

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

Route::view('/home/profile/{name}', 'home', ['name' => 'Guest', 'users' => ['John', 'Jane', 'Bob']])->name('user');

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


Route::get('user-home',[UserController::class,'userHome']);


Route::view('user-form', 'user-form');
Route::post('add-user',[UserController::class,'addUser']); 


Route::view('user-form-2', 'user-form-2');
Route::post('adduser2',[UserController::class,'addUser2']);  

// making route for new views for url
Route::view('hforurl', 'homeforurl');
Route::view('user', 'homeforurl');
Route::view('aforurl', 'aboutforurl');
Route::view('aforurl/{name}', 'aboutforurl');
Route::view('wforurl', 'welcomeforurl');





Route::get('show',[HomeController::class,'show']);

Route::view('home', 'home')->name('hm'); // this is the route named 'hm' which is defined in the web.php file. It will return the home view when the user visits the /home url. This route is used in the HomeController.php file to redirect to the home page when the user visits the /show url.

Route::get('user',[HomeController::class,'user']); 


// Route::view('student/home-for-route-group', 'home_for_route_group'); 
// Route::get('student/show', [home_controller_for_route_group::class,'show']); 
// Route::get('student/add', [home_controller_for_route_group::class,'add']); 

Route::prefix('student')->group(function () {
    Route::view('/home-for-route-group', 'home_for_route_group'); 
    Route::get('/show', [home_controller_for_route_group::class,'show']); 
    Route::get('/add', [home_controller_for_route_group::class,'add']); 
});

Route::prefix('student/bd')->group(function () {
    Route::view('/home-for-route-group', 'home_for_route_group'); 
    Route::get('/show', [home_controller_for_route_group::class,'show']); 
    Route::get('/add', [home_controller_for_route_group::class,'add']); 
});


// Route::get('show',[StudentController::class,'show']);
// Route::get('add',[StudentController::class,'add']);
// Route::get('delete',[StudentController::class,'delete']);

Route::controller(StudentController::class)->group(function() {
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
    Route::get('about/{name}','about');
});


Route::view('about-middleware','about_for_middleware');


Route::view('about-mg','about_for_middleware_group')->middleware('check1');
// Route::view('home-mg','home_for_middleware_group');



// group middleware


Route::middleware('check1')->group(function(){
    Route::view('about','about_for_middleware_group')->middleware('check1');
    Route::view('contact','about_for_middleware_group')->middleware('check1');
    Route::view('list','about_for_middleware_group')->middleware('check1');
    Route::view('home','about_for_middleware_group')->middleware('check1');
});


Route::view('home_mw','home_for_assign_mw')->middleware([agecheck3::class,countryCheck2::class]);
Route::view('about_mw','about_for_assign_mw');



Route::get('user_db',[user_controller_for_db::class,'users']);

Route::get('/students',[studentControllerDb::class,'getStudents']);

Route::get('users-hc',[user_controller_for_hc::class,'getUser']);

Route::get('users-qb',[UserControllerQB::class,'queries']);