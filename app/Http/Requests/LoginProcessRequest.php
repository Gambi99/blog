<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginProcessRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth('web')->guest();
    }


    public function rules(): array
    {
        return [
            'email' => ['email', 'required'],
            'password' => ['required']
        ];
    }
}
