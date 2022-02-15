<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [
    ConsultController::class,
    'index'
])->name('dashboard')->middleware('auth');

Route::get('/consults/create', [
    ConsultController::class,
    'create'
])->middleware('auth');

Route::post('/consults/store', [
    ConsultController::class,
    'store'
])->middleware('auth');

Route::get('/doctor/index', [
    DoctorController::class,
    'index'
])->middleware('auth');

Route::get('/patients/index', [
    PatientController::class,
    'index'
])->middleware('auth');

Route::get('/patients/edit/{id}', [
    PatientController::class,
    'edit'
])->middleware('auth');

Route::post('/patients/update/{id}', [
    PatientController::class,
    'update'
])->middleware('auth');

Route::get('/patients/delete/{id}', [
    PatientController::class,
    'destroy'
])->middleware('auth');

Route::get('/specialists/index', [
    SpecialistController::class,
    'index'
])->middleware('auth');

Route::get('/specialists/edit/{id}', [
    SpecialistController::class,
    'edit'
])->middleware('auth');

Route::post('/specialists/update/{id}', [
    SpecialistController::class,
    'update'
])->middleware('auth');
Route::get('/specialists/delete/{id}', [
    SpecialistController::class,
    'destroy'
]);

Route::get('/specialists/api/{id}', [
    AuthController::class,
    'specialist_doctor'
])->name('specialist_doctor');

Route::get('/create/user', [
    AuthController::class,
    'register'
])->name('register');