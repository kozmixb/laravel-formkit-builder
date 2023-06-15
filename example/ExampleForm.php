<?php

declare(strict_types=1);

namespace Examples;

use Kozmixb\LaravelFormKitBuilder\Contracts\BaseForm;

class ExampleForm extends BaseForm
{
    protected function getRequestClass(): string
    {
        return ExampleRequest::class;
    }
}
