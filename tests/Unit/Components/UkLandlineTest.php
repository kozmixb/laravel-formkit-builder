<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

class UkLandlineTest extends ComponentTestCase
{
    public static function getComponentClass(): string
    {
        return \Kozmixb\LaravelFormKitBuilder\Components\UkLandline::class;
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
            'validation' => 'matches:^0\d{2,4}[ -]{1}[\d]{3}[\d -]{1}[\d -]{1}[\d]{1,4}$/',
            ':validation-messages' => "{matches: 'Phone number must be in the format xxx-xxx-xxxx'}",
        ], $this->getComponent()->additionalParams());
    }
}
