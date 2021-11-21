<?php

namespace App\Http\Controllers;
use App\Models\DOCTOR;
use App\Models\APPOINTMENT;


use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function home(){
        return view('doctor.doctorDash');
    }
    
    public function myprofile(Request $req){

        $username=$req->session()->get('user');
        $doctor=DOCTOR::where('USERNAME',$username)->first();

        $d=$doctor->ID;
        $appoint=APPOINTMENT::Where('DOCTOR_ID',$d)->where('STATUS',"Appointed")->count();
        $appoint_past=APPOINTMENT::Where('DOCTOR_ID',$d)->where('STATUS',"VISITED")->count();

        return view('doctor.Myprofile')->with(['doctor'=>$doctor,'appoint'=>$appoint,'appoint_past'=>$appoint_past]);

       }

       public function myappoint(Request $req){
        $username=$req->session()->get('user');
        $doctor=DOCTOR::where('USERNAME',$username)->first();
        $doc_id=$doctor->ID;
        $appoint=APPOINTMENT::Where('DOCTOR_ID',$doc_id)->get();

        return view('doctor.myappoints')->with('appoint',$appoint);
     }

     public function update_stat(Request $req){
        $id=$req->id;
        $stat=array('STATUS'=>'VISITED');
        APPOINTMENT::where('ID',$id)->update($stat);

        return redirect()->route('doctor.view.myappointment');
    }

    public function logout(Request $req){
        $req->session()->flush();

        return redirect()->route('home');
    }

     
}

