<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\ElementInterface;

abstract class BaseComponent implements ElementInterface
{
    /** @var string|null */
    protected $label;

    /** @var string|null */
    protected $name;

    public function __construct(?string $name, ?string $label)
    {
        $this->name = $name;
        $this->label = $label;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function label(): ?string
    {
        if ($this->node()->requiresLabel()) {
            return $this->label ?? $this->name();
        }

        return null;
    }

    public function help(): ?string
    {
        return null;
    }

    public function validation(): string
    {
        return '';
    }

    public function validationLabel(): ?string
    {
        return null;
    }

    public function props(): array
    {
        return [];
    }

    public function additionalParams(): array
    {
        return [];
    }
}
