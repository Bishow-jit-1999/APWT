<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  App\Models\Student;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function Create(){
        return view('pages.create');
    }

    public function CreateSubmit(Request $request){
      $validate = $request->validate([
          'name'=>'required|min:3|max:20|regex:/^[A-Za-z]+$/',
          'id'=>'required|min:2|max:10',
          'email'=>'required',
          'dob'=>'required',
          'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
          'pass'=>'required'
          
      ],[
          'name.required'=>'Please put your Name',
          'name.min'=>'Invalid format name must be greater then 2 characters',
          'name.max'=>'Invalid format name must be less then 20 characters',
          'id.required'=>'Please put your ID',
          'id.min'=>'Invalid format id must be greater than 2 characters',
          'id.max'=>'Invalid format id must be less than 10 characters',
          'email.required'=>'Please put your Email',
          'dob.required'=>'Please put your Date of birth',
          'phone.required'=>'Please put your Phone',
          'pass.required'=>'Please put your Password'

      ]);

      $var=new Student();
      $var->NAME=$request->name;
      $var->S_id=$request->id;
      $var->Email=$request->email;
      $var->DOB=$request->dob;
      $var->Phone=$request->phone;
      $var->Password=$request->pass;
      $var->save();

      return "<h1>Registered Successfully<h1>";
    }


    public function Login(){
        return view('pages.login');
    }

    public function LoginSubmit(Request $request){
        $validate = $request->validate([
            'id'=>'required|min:2|max:10',
            'pass'=>'required'
        ],
        [
            'id.required'=>'Please put your ID',
            'id.min'=>'Id must be more than 2 character',
            'id.max'=>'Id must be less than 10 characters',
            'pass.required'=>'Please put your Password'
        ]); 
            
         
            
        $var_id=Student::where('S_id','$id')->get();
        $var_pass=Student::where('Password','$pass')->get();

            if($request->id==$var_id && $request->pass==$var_pass){
                return "<h1>Logged in</h1>";
            }

            else{
               
                return "<h1>Incorrect ID or Password<h1>";
                
            }

           


    }

    public function List(){
        $students=Student::all();
        return view('pages.list')->with('students',$students);
    }

  

    
}
