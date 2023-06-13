<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class RangeTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\Range::class;
    }

    public static function getNodeValue(): string
    {
        return 'range';
    }

    /** @test */
    public function it_can_return_additional_params(): void
    {
        $this->assertEquals([
            'max' => 100
        ], $this->getComponent()->additionalParams());
    }
}
