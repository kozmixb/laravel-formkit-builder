<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class DateTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\Date::class;
    }

    public static function getNodeValue(): string
    {
        return 'date';
    }
}
