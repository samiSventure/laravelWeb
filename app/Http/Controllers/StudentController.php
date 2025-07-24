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
//    $request->validate([
//            'Name' => 'required|string',
//            //'Email' => 'required',
//           'Email' => 'required|email',
//            'Password' => 'required|min:6',
//            'Check' => 'required',
//        ]);
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'Password' => 'required|min:6',
        ], [
            'Name.required' => 'Please enter your name.',
            'Email.required' => 'Please enter your Email.',
            'Email.email' => 'Please enter Correct email.',
            'Password.required' => 'Please enter your Password.',
            'Password.min' => 'Please enter your Password.',
        ]);

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
