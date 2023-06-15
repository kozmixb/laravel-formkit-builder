<?php

declare(strict_types=1);

namespace Examples;

use Kozmixb\LaravelFormKitBuilder\Components\Password;
use Kozmixb\LaravelFormKitBuilder\Contracts\FormInterface;

class CustomForm implements FormInterface
{
    public function casts()
    {
        return [
            'password_confirmation' => Password::class,
        ];
    }

    public function labels()
    {
        return [
            'name' => 'Full Name',
            'password_confirmation' => 'Confirm Password'
        ];
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
