<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
//    function index(){
//        return "About Controller index function";
//    }
   function index(){
        return view('about');
   }
    function dashboard(){
        return view('admin.dashboard');
    }
//    function aboutDetail($name ,$id){
//        return "name is  " . $name . " and id is "  . $id;
//
//    }
    function aboutDetail($name ,$id){
        return view('about_detail',compact('name','id'));

    }
    function aboutDetailPost(Request $request){
        return view('about_detail');

    }
}
