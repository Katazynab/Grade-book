<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Student;
use\App\Lecture;
use\App\Grade;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('surname', 'asc')->get();

        return view("students.students", ["students"=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allStudents = Student::all();

        return view('students.createstudent', ["allStudents"=>$allStudents]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentas = new Student;
        $studentas->name = $request->name;
        $studentas->surname = $request->surname;
        $studentas->email = $request->email;
        $studentas->phone = $request->phone;

        $studentas->save();
        return redirect()->route('studentai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.editstudent', ["student"=>$student]);
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
        $student = Student::find($id);

        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->phone = $request->phone;

        $student->save();

        return redirect()->route('studentai.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('studentai.index');
    }
}
