<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function index(){
$users=['sami','atif','shayan','Mushtaq'];
$email="Sami@gmai1l.com";
        return view('contact',compact('users','email'));
    }
    function store(){

        return view('contact');
    }
    function update(){

        return view('contact');
    }
    function login(){

        return view('admin.login');
    }
    function signUp(){

        return view('admin.login');
    }
}
