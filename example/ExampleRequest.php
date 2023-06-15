<?php

declare(strict_types=1);

namespace Examples;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ExampleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'name' => ['required', 'string'],
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
