<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class CheckboxTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\Checkbox::class;
    }

    public static function getNodeValue(): string
    {
        return 'checkbox';
    }
}
