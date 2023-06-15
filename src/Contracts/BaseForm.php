<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

abstract class BaseForm implements FormInterface
{
    /** @var array<string, string> */
    protected $labels = [];

    public function rules(): array
    {
        return app($this->getRequestClass())->rules();
    }

    public function labels(): array
    {
        return $this->labels;
    }

    public function casts(): array
    {
        return [];
    }

    abstract protected function getRequestClass(): string;
}
