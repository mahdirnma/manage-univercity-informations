<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegianController extends Controller
{
    public function profile(){
        $student=session('student');
        return view('student.profile',compact('student'));
    }
}
