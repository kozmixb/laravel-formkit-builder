<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

use Kozmixb\LaravelFormKitBuilder\Attributes\AttributeCollection;

interface ComponentInterface
{
    public function node(): NodeInterface;

    public function name(): string;

    public function attributes(): AttributeCollection;

    public function addAttribute(AttributeInterface $attribute): void;
}
