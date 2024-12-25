<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class CollegianController extends Controller
{
    public function profile(){
        $student=session('student');
        return view('student.profile',compact('student'));
    }

    public function classes()
    {
        $student=session('student');
        $id=$student->id;
        $registrations=Registration::where('student_id',$id)->latest()->get();
        $registration=$registrations->first();
        $units=$registration->units;
        return view('student.classes',compact('student','units'));
    }
}
