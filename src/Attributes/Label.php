<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Attributes;

use Illuminate\Support\Str;

class Label extends Attribute
{
    public function __construct(string $value)
    {
        parent::__construct('label', $value);
    }

    public static function fromName(string $name): Label
    {
        return new Label(Str::ucfirst(preg_replace('/(-)|(_)/', ' ', $name)));
    }
}
