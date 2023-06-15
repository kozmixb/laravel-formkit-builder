<?php

use Kozmixb\LaravelFormKitBuilder\Components;

return [
    /** 
     * Basic cast mapping which tries to apply some default components
     * these input field names are grabbed from the laravel request rules() method
     */
    'mapping' => [
        'file' => Components\File::class,
        'landline' => Components\UkLandline::class,
        'mobile_number' => Components\UkMobile::class,
        'email' => Components\Email::class,
        'password' => Components\Password::class,
        'password_confirmation' => Components\Password::class,
        '*' => Components\TextInput::class,
    ],

    /** 
     * Validation mapping from laravel to formkit
     * key: laravel specific validations
     * value: formkit specific validations
     */
    'validations' => [
        'exact' => [
            'accepted' => 'accepted',
            'alpha_num' => 'alphanumeric',
            'alpha' => 'alpha:latin',
            'email' => 'email',
            'integer' => 'number',
            'lowercase' => 'lowercase',
            'numeric' => 'number',
            'required' => 'required',
            'uppercase' => 'uppercase',
            'url' => 'url',
        ],

        'partial' => [
            'between:' => 'between:',
            'date_format:' => 'date_format:',
            'ends_with:' => 'ends_with:',
            'in:' => 'is:',
            'max:' => 'max:',
            'min:' => 'min:',
            'regex:' => 'matches:',
            'size:' => 'length:',
            'starts_with:' => 'starts_with:',
        ],

        /** 
         * Validations only available in formkit
         */
        'formkit' => [
            'alpha_spaces:latin',
            'contains_alpha_spaces',
            'contains_alpha',
            'contains_alphanumeric',
            'contains_lowercase',
            'contains_numeric',
            'contains_symbol',
            'contains_uppercase',
            'date_after:1999-12-31',
            'date_before:2011-01-01',
            'require_one:veggies',
            'required:trim',
            'symbol',
        ],
    ],
];
