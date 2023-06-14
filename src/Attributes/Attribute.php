<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Attributes;

use Kozmixb\LaravelFormKitBuilder\Contracts\AttributeInterface;

class Attribute implements AttributeInterface
{
    /** @var string */
    private $key;

    /** @var string */
    private $value;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function key(): string
    {
        return $this->key;
    }

    public function value(): string
    {
        return $this->value;
    }
}
