<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\DB;

class stuProfileController extends Controller
{
    public function __construct(){
        
    }
    public function showData(){
        
        $stu_data = (DB::table('students')->where('Stu_Id','00001')->first());
        return view('student.StuProfile',['st_data'=>$stu_data]);
        

    }
    public function stuDataSave(Request $request){
        
      
        //$updateData =student::find(session('user_Id'));
        $data=[
        'First_Name'=>$request->s_fname,
        'Last_Name'=>$request->s_lname,
        'Grade'=>$request->s_grade,
        'Class'=>$request->s_class,
        'Gender'=>$request->s_gender,
        'DOB'=>$request->s_dob,
        'Address'=>$request->s_address,
        'TeleNum'=>$request->s_tel,
        'Email'=>$request->s_email];

        $response = student::where('Stu_Id','00001')->update($data);
        if($response){
            return redirect('/student');
            return response()->json(['status'=>200]);
        }else{
            return response()->json(['status'=>500]);

        }
        
        
    //    dd($request->all());
    }
}
