<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('user',[UserController::class,'index']);
Route::get('user/{name}',[UserController::class,'UserDetail']);

//Route::get('about',[UserController::class,'about']);
//Route::get('aboutDetail/{name}',[UserController::class,'aboutDetail']);



Route::get('about',[AboutController::class,'index']);
Route::get('student',[AboutController::class,'index']);
Route::get('dashboard',[AboutController::class,'dashboard']);
Route::get('about-detail/{name}/{id}',[AboutController::class,'aboutDetail']);
Route::post('about-detail',[AboutController::class,'aboutDetail']);
Route::post('contact',[AboutController::class,'aboutDetail']);
