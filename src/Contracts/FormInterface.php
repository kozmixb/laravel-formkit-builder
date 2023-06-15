<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

interface FormInterface
{
    /** @return array<string, mixed> */
    public function rules(): array;

    /** @return array<string, string> */
    public function labels(): array;

    /** @return array<string, string> */
    public function casts(): array;
}
