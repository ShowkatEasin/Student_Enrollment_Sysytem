<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AllStudentsController extends Controller
{
    

    public function allstudent(Request $request)
    {
      
      return view ('admin.allstudent');

       
    }
}
