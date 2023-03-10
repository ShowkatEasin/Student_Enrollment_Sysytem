<?php

namespace App\Http\Controllers;
use App\Models\student_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student_info::all();
        // return $students;
        return view('admin.index', compact('students')); 
    }


    public function create()
    {
       return view ('admin.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'student_name' => 'required',
            'student_roll' => 'required',
            'student_phone' => 'required',
            'student_email' => 'required',
            'student_address' => 'required',
            'student_department' => 'required',
        ]);

        $student = new student_info;
        $student->student_name = $request->student_name;
        $student->student_roll = $request->student_roll;
        $student->student_phone = $request->student_phone;
        $student->student_email = $request->student_email;
        $student->student_address = $request->student_address;
        $student->student_department = $request->student_department;
        $student->save();

        return redirect()->action([MainController::class, 'index'])
        //return redirect()->route('admin.index');
       ->with('success','Student Data has been created successfully.');
    }  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(student_info $student)
    {
        return view('admin.index',compact('indexdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id) 
    {
        $student = student_info::where('student_id' , $id)->first();
        return view('admin.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();
        // dd($request->all());
        // Student Data Validation 
        $request->validate([
            'student_name' => 'required',
            'student_roll' => 'required',
            'student_phone' => 'required',
            'student_email' => 'required',
            'student_address' => 'required',
            // 'student_department' => 'required',
        ]);

        //  Student Information Update 
        $student = student_info::where('student_id', $id)->update([
            'student_name' => $request->student_name,
            'student_roll' => $request->student_roll,
            'student_phone' => $request->student_phone,
            'student_email' => $request->student_email,
            'student_address' => $request->student_address,
            'student_department' => $request->student_department,
        ]);

        return redirect()->route('indexdata')->with('success','Data Has Been updated successfully');
        
        // if ($student) {
        //         return redirect()->route('indexdata')->with('success','Data Has Been updated successfully');
        // } else {
        //     return redirect()->route('indexdata')->with('error','Data Updated Failed!');
        // }
      
        
        //$student->fill($request->post())->save();
        //return redirect()->action([MainController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student_info::where('student_id', $id)->delete();
        return redirect()->route('indexdata')->with('success','Data has been deleted successfully');
    }
}
