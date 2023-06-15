<?php

use Kozmixb\LaravelFormKitBuilder\Components;

return [
    'mapping' => [
        'file' => Components\File::class,
        'landline' => Components\UkLandline::class,
        'mobile_number' => Components\UkMobile::class,
        'email' => Components\Email::class,
        'password' => Components\Password::class,
        'password_confirmation' => Components\Password::class,
        '*' => Components\TextInput::class,
    ],
];
