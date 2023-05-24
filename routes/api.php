<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

 Route::get('/student',  [StudentController::class, 'listStudents']);
 Route::get('/student',  [StudentController::class, 'listOneStudent']);
 Route::post('/student',  [StudentController::class, 'createStudent']);
 Route::put('/student',  [StudentController::class, 'updateStudent']);
 Route::delete('/student',  [StudentController::class, 'deleteStudent']);
