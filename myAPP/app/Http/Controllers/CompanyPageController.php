<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyPageController extends Controller
{
    public function index(){
        return view('companyhome');
    }

    public function ourservice(){

        $service=array("Website creating","Website management","Software testing","Data Analytics","IT Consulting");
        return view('companyservice')
        ->with('service',$service);

    }

    public function our_teams(){
        $teams=array("Coder","Tester","Data Analyst","Algothrim Experts","Network Engineers");
        return view('ourteam')
        ->with('teams',$teams);
    }

    public function about_us(){
        $about="We are a software development company, Smart Infotech originated from our passion to make the world a better place. We are a family of 80 (and growing), each one of us is an expert in the technologies we work in, and we take customer satisfaction as our top priority. We are trusted by startups and enterprises for both web and mobile app.WE do out work with passion";
        return view('AboutUs')
        ->with('about',$about);

    }

    public function contact_us(){
        $Office="Uttara,Dhaka";
        $Number="0162218905";
        $Email="bishowjitsaha.bs24@gmail.com";
        $Fb="https://web.facebook.com/bishowjit.saha.1999/";
        return view('ContactUs')
        ->with('Office',$Office)
        ->with('Number',$Number)
        ->with('Email',$Email)
        ->with('Fb',$Fb);

    }

}

?>
