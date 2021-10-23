<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\teacher;

use App\Models\users;

class TeacherController extends Controller
{
    //

    public function addTeacher(){
        return view('adminPages.addTeacher');
    }

    public function addTeacherSubmit(Request $req){
        $validate=$req->validate([
            'teacher_id'=>'required|min:7',
            'teacher_name'=>'required',
            'teacher_username'=>'required',
            'teacher_password'=>'required',
            'teacher_email'=>'required',
            'teacher_dept'=>'required'
        ]);

        $var=new teacher();
        $var->ID=$req->teacher_id;
        $var->NAME=$req->teacher_name;
        $var->USERNAME=$req->teacher_username;
        $var->PASSWORD=$req->teacher_password;
        $var->EMAIL=$req->teacher_email;
        $var->DEPT=$req->teacher_dept;
        $var->save();

       $users=new users();
       $users->USERNAME=$req->teacher_username;
       $users->PASSWORD=$req->teacher_password;
       $users->TYPE="TEACHER";
       $users->save();

       return '<h1>TEACHER ADDED</h1>';
    

    }

    public function viewTeachers(){
        $var=new teacher();
        $teachers=$var::all();
        return view('adminPages.ViewAllTeacher')->with('teachers',$teachers);
    }
}
