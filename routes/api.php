<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

 Route::get('/students',  [StudentController::class, 'listStudents']);
 Route::get('/students/{id}',  [StudentController::class, 'listOneStudent']);
 Route::post('/students',  [StudentController::class, 'createStudent']);
 Route::put('/students/{id}',  [StudentController::class, 'updateStudent']);
 Route::delete('/students/{id}',  [StudentController::class, 'deleteStudent']);
