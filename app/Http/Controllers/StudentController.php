<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   public function createStudent (Request $request) {
    $newStudent = new Student();

    $newStudent->name = $request->name;
    $newStudent->email = $request->email;
    $newStudent->phone = $request->phone;
    $newStudent->cpf = $request->cpf;
    $newStudent->gender = $request->gender;
    $newStudent->married = $request->married;
    $newStudent->age = $request->age;

    $newStudent->save();

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

   public function updateStudent (Request $request, $id) {
    $updateStudanteById = Student::find($id);

    if(!$updateStudanteById) {
      return response('User not found', 404);
    }

    $updateStudanteById->name = $request->name;
    $updateStudanteById->email = $request->email;
    $updateStudanteById->phone = $request->phone;
    $updateStudanteById->cpf = $request->cpf;
    $updateStudanteById->gender = $request->gender;
    $updateStudanteById->married = $request->married;
    $updateStudanteById->age = $request->age;

    $updateStudanteById->update();

    return response($updateStudanteById);

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
