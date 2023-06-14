<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Attributes;

class Placeholder extends Attribute
{
    public function __construct(string $value)
    {
        parent::__construct('placeholder', $value);
    }
}
