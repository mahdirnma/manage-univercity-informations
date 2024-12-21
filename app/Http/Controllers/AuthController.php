<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentLoginRequest;
use App\Http\Requests\StoreUserLoginRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function adminLogin(StoreUserLoginRequest $request){
        $myData = $request->only('email', 'password');
        if (Auth::attempt($myData)) {
            return to_route('admin.dashboard');
        }else{
            return to_route('admin.login.show');
        }
    }
    public function studentLogin(StoreStudentLoginRequest $request){
        $students=Student::where('is_active',1)->get();
        $name=$request->name;
        $student_number=$request->student_number;
        foreach($students as $student){
            if($student->name==$name && $student->student_number==$student_number){
                session()->put('student',$student);
                return to_route('student.dashboard');
            }else{
                return to_route('student.login.show');
            }
        }
    }
}
