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

Route::get('students',[studentController::class,'list']);
Route::post('add_students',[studentController::class,'add']);


Route::put('update_students',[studentController::class,'update']);

Route::delete('delete_students/{id}',[studentController::class,'deleteStudent']);


Route::resource('members', memberController::class);



// all above routes were without token authentication. Now we will add token authentication for the following routes

Route::post('login',[userAuthController::class,'login']);
Route::post('signup',[userAuthController::class,'signup']);