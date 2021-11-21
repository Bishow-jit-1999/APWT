<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{

    public function HOME(){
        return view('welcome');
    }
    public function login(){
        return view('loginpage');
    }

    public function loginSubmit(Request $req){
        $validate=$req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $username=$req->username;
        $pass=md5($req->password);
    
        $user=UserModel::where('USERNAME',$username)->where('PASSWORD',$pass)->first();

        if($user){
            $type=$user->TYPE;
         if($type=='ADMIN'){
            $req->session()->put('user',$username);
            $req->session()->put('userType',$type);
             return view('admin.adminDash');
         } 

         elseif($type=='DOCTOR'){
            $req->session()->put('user',$username);
            $req->session()->put('userType',$type);
            return view('doctor.doctorDash');
          } 
         
          elseif($type=='PATIENT'){
            $req->session()->put('user',$username);
            $req->session()->put('userType',$type);
            return view('patient.patientDash');
          } 
       

         }
            
            echo '<script>alert("Wrong Username or Incorrect Password.Please try again with correct username and password")</script>';
         
             return  view('loginpage');
         
          
        


    }
}
