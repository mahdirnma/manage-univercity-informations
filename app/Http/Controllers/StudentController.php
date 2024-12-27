<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::where('is_active', 1);
        if ($request->field) {
            $students=$students->where('field','like','%'.$request->field.'%');
        }
        if ($request->student_number){
            $students=$students->where('student_number','like','%'.$request->student_number.'%');
        }
        $students=$students->paginate(2);
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }


    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());
        if ($student) {
            return to_route('student.index');
        }else{
            return to_route('student.create');
        }
    }

    public function show()
    {
        return view('student.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $status=$student->update($request->validated());
        if ($status) {
            return to_route('student.index');

        }else{
            return to_route('student.edit', $student);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->update(['is_active' => 0]);
        return to_route('student.index');
    }
}
