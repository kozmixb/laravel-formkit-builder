<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class HeaderTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\Header::class;
    }

    public static function getNodeValue(): string
    {
        return 'test_id';
    }

    /** @test */
    public function it_can_return_name(): void
    {
        $this->assertNull($this->getComponent()->name());
    }
}
