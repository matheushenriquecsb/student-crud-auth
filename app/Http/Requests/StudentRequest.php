<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "cpf" => "required",
            "gender" => "required",
            "married" => "required|boolean",
            "age"  => "required",
        ];
    }
}
