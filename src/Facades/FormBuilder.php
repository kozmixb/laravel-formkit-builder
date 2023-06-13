<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kozmixb\LaravelFormKitBuilder\FormBuilder
 */
class FormBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kozmixb\LaravelFormKitBuilder\FormBuilder::class;
    }
}
