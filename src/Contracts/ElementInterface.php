<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

interface ElementInterface
{
    public function node(): NodeInterface;

    public function name(): ?string;

    public function label(): ?string;

    public function help(): ?string;

    public function validation(): string;

    public function validationLabel(): ?string;

    /** @return array<string, string|int|bool> */
    public function props(): array;

    /** @return array<string, string|int|bool> */
    public function additionalParams(): array;
}
