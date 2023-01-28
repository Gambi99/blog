<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginProcessRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth('admin')->guest();
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ];
    }
}
