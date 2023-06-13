<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class PasswordTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\Password::class;
    }

    public static function getNodeValue(): string
    {
        return 'password';
    }
}
