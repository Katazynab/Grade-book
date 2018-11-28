<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Grade;
use\App\Lecture;
use\App\Student;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allGrades = Grade::all();
        $allStudents = Student::all();
        $allLectures = Lecture::all();

        return view('grades.creategrade', ["allGrades"=>$allGrades, "allStudents"=>$allStudents, "allLectures"=>$allLectures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pazymys = new Grade();
        $pazymys->student_id = $request->student_id;
        $pazymys->lecture_id = $request->lecture_id;
        $pazymys->grade = $request->grade;

        $pazymys->save();
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
        $student = Student::find($id);

        return view('grades.showgrade', ["student"=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
