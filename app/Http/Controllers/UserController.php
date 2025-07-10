<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
        return "this is user index function";
    }
    function UserDetail($name){
        return "welcome :" . $name;
    }
    function about(){
        return view('about');
    }
    function aboutDetail($name){
        return view('about_detail',compact('name'));
    }
}
