<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Attributes;

class Validation extends Attribute
{
    public function __construct(string $value)
    {
        parent::__construct('validation', $value);
    }
}
