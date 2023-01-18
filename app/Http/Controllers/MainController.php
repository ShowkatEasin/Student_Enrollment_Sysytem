<?php

namespace App\Http\Controllers;
use App\Models\student_info;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = student_info::orderBy('id','desc')->paginate(5);
        return view('admin.index', compact('student'));
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
        
        student_info::create($request->post());
        return redirect()->route('admin.index')->with('success','Data has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(student_info $student)
    {
        return view('admin.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(student_info $student)
    {
        return view('admin.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student_info $student)
    {
        $request->validate([
            'student_name' => 'required',
            'student_roll' => 'required',
            'student_phone' => 'required',
            'student_email' => 'required',
            'student_address' => 'required',
            'student_department' => 'required',
        ]);
        
        $student->fill($request->post())->save();

        return redirect()->route('admin.index')->with('success','Data Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_info $student)
    {
        $student->delete();
        return redirect()->route('admin.index')->with('success','Company has been deleted successfully');
    }
}
