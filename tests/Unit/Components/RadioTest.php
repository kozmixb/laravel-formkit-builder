<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class RadioTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\Radio::class;
    }

    public static function getNodeValue(): string
    {
        return 'radio';
    }
}
