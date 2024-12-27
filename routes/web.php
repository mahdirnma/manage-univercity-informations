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
Route::controller(AuthController::class)->group(function () {
    Route::post('/adminLogin','adminLogin')->name('admin.login');
    Route::post('/adminLogout', 'adminLogout')->name('admin.logout');
    Route::post('/studentLogout','studentLogout')->name('student.logout');
    Route::post('/professorLogout','professorLogout')->name('professor.logout');
    Route::post('/studentLogin','studentLogin')->name('student.login');
    Route::post('/professorLogin','professorLogin')->name('professor.login');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/preLogin','preLogin')->name('preLogin');
    Route::get('/adminLogin','adminLogin')->name('admin.login.show');
    Route::get('/studentLogin','studentLogin')->name('student.login.show');
    Route::get('/professorLogin','professorLogin')->name('professor.login.show');
    Route::get('/','index')->name('admin.dashboard')->middleware('auth');
});

Route::get('/student/login',[StudentController::class,'show'])->name('student.dashboard')->middleware('check.login');
Route::get('/professor/login',[ProfessorController::class,'show'])->name('professor.dashboard');
Route::resource('student', StudentController::class)->middleware('auth')->middleware('check.login');
Route::get('/student/registration/create/{student}', [RegistrationController::class, 'create'])->name('student.registration.create')->middleware('auth');
Route::post('/student/registration/store/{student}', [RegistrationController::class, 'store'])->name('student.registration.store')->middleware('auth');


Route::resource('professor', ProfessorController::class)->middleware('auth');
Route::resource('course',CourseController::class)->middleware('auth');
Route::resource('lesson',LessonController::class)->middleware('auth');
Route::resource('unit',UnitController::class)->middleware('auth');

Route::get('/Master/unit', [MasterController::class,'units'])->name('Master.units');
Route::get('/Master/unit/student/{unit}', [MasterController::class,'students'])->name('master.unit.student');
Route::get('/Master/unit/student/score/{unit}/{registration}', [MasterController::class,'score'])->name('master.student.score');
Route::post('/Master/unit/student/score/create/{unit}/{registration}', [MasterController::class,'scoreCreate'])->name('master.score.create');

Route::get('/collegian/profile',[CollegianController::class,'profile'])->name('collegian.profile')->middleware('check.login');
Route::get('/collegian/classes',[CollegianController::class,'classes'])->name('collegian.classes')->middleware('check.login');
Route::get('/collegian/semester/gpa/{unit}',[CollegianController::class,'gpa'])->name('collegian.gpa')->middleware('check.login');

