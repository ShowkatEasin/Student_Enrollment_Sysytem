<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();



class AddStudentsController extends Controller
{
    
    public function addstudent()
    {
        return view('admin.addstudent');
    }

}