<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Contracts;

interface FormInterface
{
    /** @var array<string, mixed */
    public function rules(): array;

    /** @var array<string, string> */
    public function labels(): array;

    /** @var array<string, string> */
    public function casts(): array;
}
