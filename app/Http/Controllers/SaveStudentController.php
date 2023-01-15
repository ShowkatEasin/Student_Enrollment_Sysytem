<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class SaveStudentController extends Controller
{
    public function savestudent(Request $request)
    {
       $data=array();
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
       $image=$request->file('student_image');

       $image = $request->file('product_image');
       if ($image) {
           $image_name  = md5(rand(1000, 10000));
           $ext = strtolower($image->getClientOriginalExtension());
           $image_full_name = $image_name. '.'.$ext;
           $upload_path = 'image/';
           $image_url = $upload_path.$image_full_name;
           $success = $image->move($upload_path,$image_full_name);
           if ($success) {
               $data['student_image'] = $image_url;

               DB::table('student_tbl')->insert($data);
               /* Session::put('message', 'Student Added Successfully!'); */
               return Redirect::to('/addstudent');
           }

       }

       $data['image'] = $image_url;
       DB::table('student_tbl')->insert($data);
      /*  Session::put('message', 'Student Added Successfully'); */
       return Redirect::to('/addstudent');

       DB::table('student_tbl')->insert($data);
       /* Session::put('message', 'Student Added Successfully'); */
       return Redirect::to('/addstudent');
   }
   }


