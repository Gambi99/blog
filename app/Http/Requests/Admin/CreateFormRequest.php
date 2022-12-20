<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth('admin')->check();
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'preview' =>  ['required'],
            'description' => ['required', 'string', 'min:10']
        ];
    }
}
