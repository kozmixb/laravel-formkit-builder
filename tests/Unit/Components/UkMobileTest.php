<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class UkMobileTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\UkMobile::class;
    }

    public static function getNodeValue(): string
    {
        return 'tel';
    }

    /** @test */
    public function it_can_return_additional_params(): void
    {
        $this->assertEquals([
            'placeholder' => '+44 xxxx xxxxxxx',
            'validation' => 'matches:^(?:0|\+?44)(?:\d\s?){9,10}$/',
            ':validation-messages' => "{matches: 'Phone number must be in the format xxx-xxx-xxxx'}",
        ], $this->getComponent()->additionalParams());
    }
}
