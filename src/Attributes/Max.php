<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Attributes;

class Max extends Attribute
{
    public function __construct(string $value)
    {
        parent::__construct('max', $value);
    }
}
