<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::post('v1/admin/register', [AuthController::class, 'registerAdmin']);
Route::post('v1/admin/login', [AuthController::class, 'loginAdmin']);

 Route::get('/v1/students', [StudentController::class, 'listStudents']);
 Route::get('/v1/students/{id}',  [StudentController::class, 'listOneStudent']);
 Route::post('/v1/students',  [StudentController::class, 'createStudent']);
 Route::put('/v1/students/{id}',  [StudentController::class, 'updateStudent']);
 Route::delete('/v1/students/{id}',  [StudentController::class, 'deleteStudent']);
