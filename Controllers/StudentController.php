<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function index()
    {
        //
         $students = Student::all()->toArray();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

          $request->validate([
            'name'=>'required',
            'sid'=>'required',
            'department'=>'required',
            'session'=>'required'
        ]);

        $student = new Student([
            'sid'=>$request->get('sid'),
            'name' => $request->get('name'),
            'fname' => $request->get('fname'),
            'edulevel'=>$request->get('edulevel'),
            'department' => $request->get('departmnet'),
            'year' => $request->get('year'),
            'section'=>$request->get('section'),
            'session'=>$request->get('session'),
            'message' => $request->get('message')
        ]);
        $student->save();
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

      public function profile()
    {
        //
        return view('student.profile');
    }

       public function result()
    {
        //
        return view('student.result');
    }


}
