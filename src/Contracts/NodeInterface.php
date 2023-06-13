<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

interface NodeInterface
{
    public function key(): string;

    public function value(): string;
}
