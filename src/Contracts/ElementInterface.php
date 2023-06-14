<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

use Kozmixb\LaravelFormKitBuilder\Collections\Attributes;

interface ElementInterface
{
    public function node(): NodeInterface;

    public function name(): string;

    public function label(): string;

    public function attributes(): Attributes;

    public function addAttribute(AttributeInterface $attribute): void;
}
