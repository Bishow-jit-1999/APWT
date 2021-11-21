<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PATIENT;
use App\Models\UserModel;
use App\Models\DOCTOR;
use App\Models\APPOINTMENT;

class PatientController extends Controller
{

    public function home(){
        return view('patient.patientDash');
    }

    public function reg_patient(){
        return view('patient.regpatient');
    }

    public function reg_patient_submit(Request $req){
        $validate=$req->validate([
            'PatientName'=>'required',
            'PatientContact'=>'required',
            'PatientEmail'=>'required',
            'PatientDOB'=>'required',
            'PatientUserName'=>'required',
            'PatientPassword'=>'required'
        ]);
            $patients=new PATIENT();
            $patients->NAME=$req->PatientName;
            $patients->CONTACT=$req->PatientContact;
            $patients->EMAIL=$req->PatientEmail;
            $patients->DOB=$req->PatientDOB;
            $patients->USERNAME=$req->PatientUserName;
            $patients->PASSWORD=$req->PatientPassword;
            $patients->save();

            $users=new UserMODEL();
            $users->USERNAME=$req->PatientUserName;
            $users->PASSWORD=md5($req->PatientPassword);
            $users->TYPE=$req->type_patient;
            $users->save();
             
            echo '<script>alert("Account Created Successfully")</script>';
            return view('loginpage');

       }

        public function view_doctor(){
        $doctors=DOCTOR::all();
        return view('patient.appointmentmake')->with('doctors',$doctors);
    }

       public function appointmentTime(Request $req){
           $id=$req->id;

           $doc=DOCTOR::where("ID",$id)->first();

           return view('patient.booktime')->with('doc',$doc);

       } 

       public function appointmentTimeSubmit(Request $req){
          $username=$req->session()->get('user');
          $patient=PATIENT::where('USERNAME',$username)->first();
          $p_id=$patient->ID;

          $var=new APPOINTMENT();
          $var->PATIENT_ID=$p_id;
          $var->DOCTOR_ID=$req->doc_id;
          $var->DATE=$req->date_appt;
          $var->TIME=$req->appt_time;
          $var->STATUS=$req->status;

          $var->save();

          echo '<script>alert("Appointment has been booked successfully")</script>';

          return view('patient.patientDash');

       }

       public function myprofile(Request $req){

        $username=$req->session()->get('user');
        $patient=PATIENT::where('USERNAME',$username)->first();
        $c=$patient->ID;
        $appoint=APPOINTMENT::Where('PATIENT_ID',$c)->where('STATUS',"Appointed")->count();
        $appoint_past=APPOINTMENT::Where('PATIENT_ID',$c)->where('STATUS',"VISITED")->count();

       
        return view('patient.myprofile')->with(['patient'=>$patient,'appoint'=>$appoint,'appoint_past'=>$appoint_past]);

       }

      

       public function myappoint(Request $req){
          $username=$req->session()->get('user');
          $patient=PATIENT::where('USERNAME',$username)->first();
          $pat_id=$patient->ID;
          $appoint=APPOINTMENT::Where('PATIENT_ID',$pat_id)->get();

          return view('patient.myappointment')->with('appoint',$appoint);
       }

       public function logout(Request $req){
        $req->session()->flush();

        return redirect()->route('home');
    }
}
