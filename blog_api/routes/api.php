<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\userAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/test",function(){
    return ["name"=>"NB Nill","dept"=>"CSE"];
});




Route::resource('members', memberController::class);




Route::post('login',[userAuthController::class,'login']);
Route::post('signup',[userAuthController::class,'signup']);



// Route::get('students',[studentController::class,'list']);
// Route::post('add_students',[studentController::class,'add']);
// Route::put('update_students',[studentController::class,'update']);
// Route::delete('delete_students/{id}',[studentController::class,'deleteStudent']);

// all above routes were without token authentication. Now we will add token authentication for the following routes



// creating a middleware group for the routes that require token authentication
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('students',[studentController::class,'list']);
    Route::post('add_students',[studentController::class,'add']);
    Route::put('update_students',[studentController::class,'update']);
    Route::delete('delete_students/{id}',[studentController::class,'deleteStudent']);
    Route::get('search-student/{name}',[studentController::class,'searchStudent']);
});

Route::get('login',[userAuthController::class,'login'])->name('login');

