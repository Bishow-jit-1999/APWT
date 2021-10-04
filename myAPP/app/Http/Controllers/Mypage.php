<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mypage extends Controller
{
    public function mydetails(){
        $name="Bishowjit Saha";
        $id="18-38250-2";
        $DOB="3rd FEB 2000";
    $Course=array("C#","C++","Web tech","Database");
    return view('Mydetails')
    ->with('name',$name)
    ->with('id',$id)
    ->with('DOB',$DOB)
    ->with('Course',$Course);

    }
}
