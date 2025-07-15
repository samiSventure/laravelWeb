<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
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
Route::get('profile',[DashboardController::class,'profile']);

//Route::get('/contact', function () {
//    return view('contact');
//});
//Route::view('/contact','contact');
Route::get('/contact',[ContactController::class,'index']);
Route::get('/login',[ContactController::class,'login']);
Route::view('/front','front.index');
