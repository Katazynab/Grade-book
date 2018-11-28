<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Lecture;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures = Lecture::orderBy('name', 'asc')->get();

        return view("lectures.lectures", ["lectures"=>$lectures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allLectures = Lecture::all();

        return view('lectures.createlecture', ["allLectures"=>$allLectures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paskaita = new Lecture();
        $paskaita->name = $request->name;
        $paskaita->description = $request->description;

        $paskaita->save();
        return redirect()->route('paskaitos.index');
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
        $lecture = Lecture::find($id);

        return view('lectures.editlecture', ["lecture"=>$lecture]);
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
        $paskaita = Lecture::find($id);
        $paskaita->name = $request->name;
        $paskaita->description = $request->description;

        $paskaita->save();
        return redirect()->route('paskaitos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecture = Lecture::find($id);
        $lecture->delete();

        return redirect()->route('paskaitos.index');
    }
}
