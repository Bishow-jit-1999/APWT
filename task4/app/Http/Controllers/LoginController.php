<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class LoginController extends Controller
{
    public function Home(){
        return view('login');

    }

    public function loginSubmit(Request $req){
        $validate=$req->validate([
         'username'=>'required',
         'password'=>'required',
         'type'=>"required"
        ]);
       
        $username=$req->username;
        $password=$req->password;
        $type=$req->type;

       if( $users=users::where('USERNAME',$username)->where('PASSWORD',$password)->where('TYPE',$type)->first()){
        return view('adminPages.admindash'); 
       }
       else{
           return "<h1>USER NOT FOUND<h1>";
       }
            
        }
     
        
        
       
    

}
