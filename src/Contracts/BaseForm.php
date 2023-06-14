<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

abstract class BaseForm implements FormInterface
{
    /** @var array<string, string> */
    protected $labels = [];

    /** @var array<string, mixed */
    public function rules(): array
    {
        return app($this->getRequestClass())->rules();
    }

    /** @var array<string, string> */
    public function labels(): array
    {
        return $this->labels;
    }

    abstract protected function getRequestClass(): string;
}
