<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\ElementInterface;

abstract class BaseComponent implements ElementInterface
{
    /** @var string|null */
    protected $label = null;

    public function name(): ?string
    {
        return null;
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
