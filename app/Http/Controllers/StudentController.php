<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function create(){
        return view('student.create');
    }
    function index(){
        return view('student.create');
    }
    function store(Request $request){
       //return $request->all();
        echo $request->Name;
        echo "<br>";
        echo $request->Email;
        echo "<br>";
        echo $request->Password;
        echo "<br>";
        echo $request->Check;
    }
}
