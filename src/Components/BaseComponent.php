<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\AttributeInterface;
use Kozmixb\LaravelFormKitBuilder\Contracts\ElementInterface;
use Kozmixb\LaravelFormKitBuilder\Attributes\AttributeCollection;

abstract class BaseComponent implements ElementInterface
{
    /** @var string */
    protected $name;

    /** @var AttributeCollection */
    protected $attributes;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function attributes(): AttributeCollection
    {
        if (!$this->attributes) {
            $this->attributes = new AttributeCollection();
        }

        return $this->attributes;
    }

    public function addAttribute(AttributeInterface $attribute): void
    {
        $this->attributes()->add($attribute);
    }
}
