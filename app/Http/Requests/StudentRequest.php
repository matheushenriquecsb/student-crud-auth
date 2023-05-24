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
            "name" => "required|string",
            "email" => "required|email",
            "phone" => "required|digits:11",
            "cpf" => "required|digits:11",
            "gender" => "required|string",
            "married" => "required|boolean",
            "age"  => "required|integer",
        ];
    }
}
