<?php

use App\Http\Controllers\AuthController;
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
Route::get('/studentLogin', [UserController::class, 'studentLogin'])->name('student.login.show');
Route::get('/professorLogin', [UserController::class, 'professorLogin'])->name('professor.login.show');

Route::get('/', [UserController::class, 'index'])->name('admin.dashboard')->middleware('auth');
/*Route::get('/', function () {
    return view('welcome');
});
*/
