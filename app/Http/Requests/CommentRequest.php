<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth('web')->check();
    }


    public function rules(): array
    {
        return [
            'text' => ['required', 'string', 'min:5'],
            'user_id' => ['required', 'exists:users,id']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth('web')->id()
        ]);
    }
}
