<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\memberController;

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