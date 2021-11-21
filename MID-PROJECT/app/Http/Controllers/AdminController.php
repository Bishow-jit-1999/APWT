<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DOCTOR;
use App\Models\UserModel;
use App\Models\PATIENT;
use App\Models\APPOINTMENT;

class AdminController extends Controller
{

   public function home(){
       return view('admin.adminDash');
   }

    public function docreg(){
        return view('doctor.register');
    }

    public function docregSubmit(Request $req){
        $validate=$req->validate([
            'DoctorName'=>'required',
            'DoctorEmail'=>'required',
            'DoctorContact'=>'required|min:11|max:11',
            'DoctorDepartment'=>'required',
            'DoctorUserName'=>'required',
            'DoctorPassword'=>'required'
        ]);

        $var=new DOCTOR();
        $var->NAME=$req->DoctorName;
        $var->USERNAME=$req->DoctorUserName;
        $var->PASSWORD=$req->DoctorPassword;
        $var->EMAIL=$req->DoctorEmail;
        $var->CONTACT=$req->DoctorContact;
        $var->DEPT=$req->DoctorDepartment;
        $var->save();

        $user=new UserModel();
        $user->USERNAME=$req->DoctorUserName;
        $user->PASSWORD=md5($req->DoctorPassword);
        $user->TYPE=$req->Dtype;
        $user->save();
       
        echo '<script>alert("NEW DOCTOR ADDED")</script>';
        return view('admin.adminDash');
    }

    public function view_doctor(){
        $doctors=DOCTOR::all();
        return view('doctor.viewdoctor')->with('doctors',$doctors);
    }

    public function view_patient(){
        $patients=PATIENT::all();
        return view('patient.viewpatient')->with('patients',$patients);

    }
    
    public function delete_doc(Request $req){
        $id=$req->id;
        $username=$req->username;

        UserModel::where('USERNAME',$username)->delete();
        
        DOCTOR::where('ID',$id)->delete();

        return redirect()->route('admin.doctor.view');

    }

    public function edit_doc(Request $req){
        $id=$req->id;


        $doctor=DOCTOR::Where('ID',$id)->first(); 
        return view('admin.editdoctor')->with('doctor',$doctor);


    }

    public function edit_doc_submit(Request $req){

        $data=array('NAME'=>$req->DName,'EMAIL'=>$req->DEmail,'CONTACT'=>$req->DContact,'DEPT'=>$req->DDepartment);
     
        DOCTOR::where('ID',$req->id)->update($data);

        
        return redirect()->route('admin.doctor.view');
    }

    public function myappoint(Request $req){
       
        $appoint=APPOINTMENT::all();

        return view('admin.appointments')->with('appoint',$appoint);
    }

    public function update_stat(Request $req){
        $id=$req->id;
        $stat=array('STATUS'=>'VISITED');
        APPOINTMENT::where('ID',$id)->update($stat);

        return redirect()->route('admin.view.appointment.list');
    }

    public function logout(Request $req){
        $req->session()->flush();

        return redirect()->route('home');
    }
  
}
