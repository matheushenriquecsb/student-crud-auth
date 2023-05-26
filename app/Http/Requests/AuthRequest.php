<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //unique:App\Models\Admin,email
            'email' => 'required|email|',
            'password' => 'required|min:6|max:12',
        ];
    }
}
