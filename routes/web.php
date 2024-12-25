<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollegianController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/preLogin', [UserController::class, 'preLogin'])->name('preLogin');
Route::get('/adminLogin', [UserController::class, 'adminLogin'])->name('admin.login.show');
Route::post('/adminLogin', [AuthController::class, 'adminLogin'])->name('admin.login');
Route::post('/adminLogout', [AuthController::class, 'adminLogout'])->name('admin.logout');
Route::get('/studentLogin', [UserController::class, 'studentLogin'])->name('student.login.show');
Route::post('/studentLogin', [AuthController::class, 'studentLogin'])->name('student.login');
Route::get('/professorLogin', [UserController::class, 'professorLogin'])->name('professor.login.show');
Route::post('/professorLogin', [AuthController::class, 'professorLogin'])->name('professor.login');
Route::get('/', [UserController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('/student/login', [StudentController::class, 'show'])->name('student.dashboard')->middleware('check.login');
Route::get('/professor/login', [ProfessorController::class, 'show'])->name('professor.dashboard');

Route::resource('student', StudentController::class)->middleware('auth');
Route::resource('professor', ProfessorController::class)->middleware('auth');
Route::resource('course',CourseController::class)->middleware('auth');
Route::resource('lesson',LessonController::class)->middleware('auth');
Route::resource('unit',UnitController::class)->middleware('auth');

Route::get('/student/registration/create/{student}', [RegistrationController::class, 'create'])->name('student.registration.create')->middleware('auth');
Route::post('/student/registration/store/{student}', [RegistrationController::class, 'store'])->name('student.registration.store')->middleware('auth');
Route::get('/Master/unit', [MasterController::class,'units'])->name('Master.units');
Route::get('/Master/unit/student/{unit}', [MasterController::class,'students'])->name('master.unit.student');
Route::get('/Master/unit/student/score/{unit}/{registration}', [MasterController::class,'score'])->name('master.student.score');
Route::post('/Master/unit/student/score/create/{unit}/{registration}', [MasterController::class,'scoreCreate'])->name('master.score.create');

Route::get('/collegian/profile',[CollegianController::class,'profile'])->name('collegian.profile')->middleware('check.login');
Route::get('/collegian/classes',[CollegianController::class,'classes'])->name('collegian.classes')->middleware('check.login');

