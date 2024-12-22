<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $students=Student::where('is_active',1)->count();
        $professors=Professor::where('is_active',1)->count();
        $lessons=Lesson::where('is_active',1)->count();
        return view('admin.dashboard',compact('students','professors','lessons'));
    }
    public function preLogin(){
        return view('auth.preLogin');
    }
    public function adminLogin()
    {
        return view('auth.adminLogin');
    }
    public function studentLogin()
    {
        return view('auth.studentLogin');
    }
    public function professorLogin()
    {
        return view('auth.professorLogin');
    }
}
