<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class DateTimeTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\DateTime::class;
    }

    public static function getNodeValue(): string
    {
        return 'date';
    }

    /** @test */
    public function it_can_return_additional_params(): void
    {
        $this->assertEquals([
            'value-format' => '"YYYY-MM-DD HH:mm:ss',
        ], $this->getComponent()->additionalParams());
    }
}
