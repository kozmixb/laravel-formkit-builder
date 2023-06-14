<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Attributes;

class Accepts extends Attribute
{
    public function __construct(array $extensions)
    {
        parent::__construct(
            'accepts',
            implode(
                ',',
                array_map(
                    function (string $extension) {
                        return ".{$extension}";
                    },
                    $extensions
                )
            )
        );
    }
}
