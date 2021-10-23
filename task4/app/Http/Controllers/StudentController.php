<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\STUDENT;

use App\Models\users;


class StudentController extends Controller
{
    //

    public function addStudent(){
        return view('adminPages.addStudent');
    }

    public function addStudentSubmit(Request $req){

        $validate=$req->validate([
            'student_id'=>'required|min:11',
            'student_name'=>'required',
            'student_username'=>'required',
            'student_password'=>'required',
            'student_email'=>'required',
            'student_dept'=>'required'
        ]);

        $var=new STUDENT();
        $var->ID=$req->student_id;
        $var->NAME=$req->student_name;
        $var->USERNAME=$req->student_username;
        $var->PASSWORD=$req->student_password;
        $var->EMAIL=$req->student_email;
        $var->DEPT=$req->student_dept;
        $var->save();

       $users=new users();
       $users->USERNAME=$req->student_username;
       $users->PASSWORD=$req->student_password;
       $users->TYPE="STUDENT";
       $users->save();

       return '<h1>STUDENT ADDED</h1>';
    

    }

    public function viewStudents(){
        $var= new STUDENT();
        $students=$var::all();
        return view('adminPages.ViewAllStudents')->with('students',$students);

    }
}
