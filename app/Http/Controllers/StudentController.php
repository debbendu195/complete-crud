<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public  function  home(){
        return view('website.home.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.home.index',[
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.home.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        Student::newStudent($request);
        return back()->with('message','Student Info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('website.home.show',[
            'student'=>$student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //return request;
        //return $student->image;
        return view('website.home.edit',[
            'student'=>$student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        Student::updateStudent($request, $student);
        return redirect('/student')->with('message','Student info updated successfully!! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/student')->with('message','Delete successfully');
    }
}
