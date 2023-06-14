<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Attributes;

class Cols extends Attribute
{
    public function __construct(string $value)
    {
        parent::__construct('cols', $value);
    }
}
