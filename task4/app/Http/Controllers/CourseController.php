<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{


    public function addcourse(){
        return view('adminPages.addcourse');
    }


    public function addcourseSubmit(Request $req){
        $validate=$req->validate([
            'c_id'=>'required',
            'c_name'=>'required',
            'c_credit'=>'required|integer|min:1|max:4'

        ]);
        $var=new Course();
         
        $var->ID=$req->c_id;
        $var->COURSE_NAME=$req->c_name;
        $var->CREDIT=$req->c_credit;
        $var->save();

        return "<h1>COURSE ADDED</h1>";

    }


    public function viewcourse(){
        $courses=Course::all();
        return view('adminPages.Viewcourse')->with('courses',$courses);
    }

    public function Course_reg(Request $req){
      
            $id = $req->id;
            $p = courses::where('id',$id)->first();
            $mycourse[5]=[];
            //$jsonCart = $req->session()->get('cart'); to get session value
            //session()->get('cart')
            if(session()->has('mycourse')){
                $cart = json_decode(session()->get('mycourse'));
            }
            $reg_course = array('id'=>$id,'name'=>$p->COURSE_NAME,'price'=>$p->price,'image'=>$p->image);
            $mycourse[] = (object)($reg_course);
            $json_mycourse = json_encode($mycourse);
            session()->put('mycourse', $json_mycourse);
            //return session()->get('cart');
            return redirect()->route('adminPages.Viewcourse');
        }
      
        
        public function checkout(Request $req){
           
            $my_req_course = json_decode(session()->get('mycourse'));
           
            
            }

 

    }
}
