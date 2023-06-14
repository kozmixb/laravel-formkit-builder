<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

interface AttributeInterface
{
    public function key(): string;

    public function value(): string;
}
