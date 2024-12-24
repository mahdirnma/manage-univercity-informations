<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Models\Registration;
use App\Models\Semester;
use App\Models\Student;
use App\Models\Unit;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(Student $student)
    {
        $semesters = Semester::where('is_active', 1)->get();
        $units = Unit::where('is_active', 1)->get();
        return view('admin.registrations.create', compact('semesters','units','student'));
    }
    public function store(StoreRegistrationRequest $request,Student $student)
    {
        $semester=$request->input('semester_id');
        $unit=$request->input('unit_id');
        $status=Registration::create([
            'semester_id'=>$semester,
            'student_id'=>$student->id,
        ]);
        $status->units()->attach($unit);
        return to_route('student.index');
    }
}
