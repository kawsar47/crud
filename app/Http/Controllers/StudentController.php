<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\Classs;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::with('classs')->get();
//        return $students;
//        $students = Student::with('classs')->get();
        return view('student.student_list',compact('students'));

    }


    public function student_form(){
        $class = Classs::all();
        return view('student.student_form', compact('class'));
    }

    public function store(Request $request){
//
        $id = $request->input('id');

        if ($id){
            $student = Student::find($id);
        }else{
            $request->validate([
                'email' => 'required|unique:students',
                'phone' => 'required|unique:students',

            ]);
            $student = new Student();
        }

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->roll = $request->input('roll');
        $student->class_id = $request->input('class_id');
        $student->section = $request->input('section');
        $student->phone =$request->input('phone');
        $student->save();

        return redirect('students')->with('success', 'Data Insert Successfully!');
    }

    public function destroy($id){

        Student::Where('id',$id)->delete();
        return redirect('students')->with('success', 'Data Delete Successfully!');
    }

    public function edit($id){
        $class= Classs::all();
//         $user = User::find($id);
        $student= Student::find($id);
        return view ('student.student_edit',compact('student','class'));
    }




    public function class_index(){
        $classs = Classs::all();
        return view('student.class_list',compact('classs'));

    }



    public function class_form(){
        return view('student.class_form');
    }

    public function class_store(Request $request){
        $id = $request->input('id');

        if ($id){
            $class = Classs::find($id);
        }else{
            $request->validate([
                'class_name' => 'required',
            ]);
            $class = new Classs();
        }

        $class->class_name = $request->input('class_name');
        $class->save();

        return redirect('classs')->with('success', 'Data Successfullyt Added');
    }

     public function  class_edit($id){

        $classs = Classs::find($id);
        return view ('student.class_form',compact('classs'));
    }

    public function class_destroy($id){
        Classs::find($id)->delete();
        return redirect('classs')->with('success', 'Data Delete Successfully!');
    }
}
