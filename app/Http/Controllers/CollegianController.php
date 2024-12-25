<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Unit;
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

    public function gpa(Unit $unit)
    {
        $student=session('student');
        $id=$student->id;
        $semester=$unit->semester_id;
        $registration=Registration::where('student_id',$id)->where('semester_id',$semester)->first();
        $scores=[];
        $units=$registration->units;
        foreach($units as $unit){
            array_push($scores,$unit->pivot->score);
        }
        $count=count($scores);
        $gpa=0;
        foreach ($scores as $score) {
            $gpa+=$score;
        }
        $gpa=$gpa/$count;
        return view('student.gpa',compact('student','registration','gpa'));
    }
}
