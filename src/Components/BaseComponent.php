<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\AttributeInterface;
use Kozmixb\LaravelFormKitBuilder\Contracts\ElementInterface;
use Kozmixb\LaravelFormKitBuilder\Collections\Attributes;

abstract class BaseComponent implements ElementInterface
{
    /** @var string */
    protected $name;

    /** @var Attributes */
    protected $attributes;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function attributes(): Attributes
    {
        if (!$this->attributes) {
            $this->attributes = new Attributes();
        }

        return $this->attributes;
    }

    public function addAttribute(AttributeInterface $attribute): void
    {
        $this->attributes()->add($attribute);
    }
}
