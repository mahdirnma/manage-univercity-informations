<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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
