<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        return view('Stud/tampildata2', ['datasiswa'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Student::create($request->all());
        //return redirect('Stud/sisiwa')->with('success','Data Baerhasil Ditambahkan');
        return view('Stud/siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->photo->store('Student', 'public');
        $student = new Student();
        $student->fill($request->all());
        $student->photo=$request->photo->hashName();
        $student->save();

        return redirect()->route('students.index')
         ->with('success', 'Add Student Successfully');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student )
    {
        return view('Stud/show', ['datasiswa' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('Stud/edit_siswa', ['datasiswa' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student)
    {
        $student = Student::find($student);
        $student->fill($request->all());
        $student->save();

         return redirect()->route('students.index')
         ->with('success', 'Student Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete('id');

        return redirect()->route('students.index')->with('success', 'Student Deleted Successfully');
    }
}
