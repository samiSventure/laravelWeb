<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function create(){
        return view('student.create');
    }
    function index(){
       // $student=Student::find(2);
     //   dd($student);
        $students=Student::all();
       // return $students;
        return view('student.index',compact('students'));
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

        Student::create($request->all());
        return redirect()->route('student.index')->with('success', 'Student created!');
    }
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('student.show', compact('student'));
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

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

        $student->update($request->all());
        return redirect()->route('student.index')->with('success', 'student updated!');
    }

    public function destroy($id)
    {
        $post = Student::findOrFail($id);
        $post->delete();
        return redirect()->route('student.index')->with('success', 'student deleted!');
    }
}
