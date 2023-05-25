<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
   public function createStudent (StudentRequest $request) {

    $newStudent = Student::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'cpf' => $request['cpf'],
        'gender' => $request['gender'],
        'married' => $request['married'],
        'age' => $request['age'],
    ]);

    return response($newStudent, 201);
   }

   public function listStudents () {
    $getAllStudents = Student::all();

    return response($getAllStudents, 200);
   }

   public function listOneStudent ($id) {
    $getStudentById = Student::find($id);

    if(!$getStudentById) {
        return response('User not found', 404);
    }

    return response($getStudentById, 200);
   }

   public function updateStudent (StudentRequest $request, $id) {
    $updateStudantById = Student::find($id);

    if(!$updateStudantById) {
      return response('User not found', 404);
    }

    $updateStudantById->name = $request->name;
    $updateStudantById->email = $request->email;
    $updateStudantById->phone = $request->phone;
    $updateStudantById->cpf = $request->cpf;
    $updateStudantById->gender = $request->gender;
    $updateStudantById->married = $request->married;
    $updateStudantById->age = $request->age;

    $updateStudantById->update();

    return response($updateStudantById);

   }

   public function deleteStudent ($id) {
    $deleteStudentById = Student::find($id);

    if(!$deleteStudentById) {
      return response('User not found', 404);
    }

    $deleteStudentById->delete();
    return response('User deleted', 200);
   }
}
