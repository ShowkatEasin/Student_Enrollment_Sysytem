<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;




class AddStudentsController extends Controller
{
    
   
    public function addstudent()
    {
        return view ('admin.addstudent');
    }



    public function savestudent(Request $request)
    {
        $data =[

            'student_name' => $request->student_name,
            'student_roll' => $request->student_roll,
            'student_fathername' => $request->student_fathername,
            'student_mothername' => $request->student_mothername,
            'student_email' => $request->student_email,
            'student_phone' => $request->student_phone,
            'student_address' => $request->student_address,
            'student_password' => $request->student_password,
            'student_department' => $request->student_department,
            'admission_year' => $request->admission_year,
            
            
        ];

        DB::table('student_tbl')->insert($data);

        return "Sucessfull";


    }

      /*  $data=array();
       $data['student_name']=$request->student_name;
       $data['student_roll']=$request->student_roll;
       $data['student_fathername']=$request->student_fathername;
       $data['student_mothername']=$request->student_mothername;
       $data['student_email']=$request->student_email;
       $data['student_phone']=$request->student_phone;
       $data['student_address']=$request->student_address;
       $data['student_password']=$request->student_password;
       $data['admission_year']=$request->admission_year;
       $data['student_department']=$request->student_department;
       $data['student_name']=$request->student_name;
       $image=$request->file('student_image');  */
      
     
      

      
     
  

    }

    
