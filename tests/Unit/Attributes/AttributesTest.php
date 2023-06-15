<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Attributes;

use Kozmixb\LaravelFormKitBuilder\Attributes as A;
use PHPUnit\Framework\TestCase;

class AttributesTest extends TestCase
{
    /** 
     * @test
     * @dataProvider provider
     */
    public function it_can_return_correct_value(string $class, string $key): void
    {
        $attribute = new $class('test');

        $this->assertEquals('test', $attribute->value());
        $this->assertEquals($key, $attribute->key());
    }

    /** @return array<string, array<string>> */
    public function provider(): array
    {
        return [
            'cols' => [A\Cols::class, 'cols'],
            'label' => [A\Label::class, 'label'],
            'max' => [A\Max::class, 'max'],
            'min' => [A\Min::class, 'min'],
            'multiple' => [A\Multiple::class, 'multiple'],
            'placeholder' => [A\Placeholder::class, 'placeholder'],
            'rows' => [A\Rows::class, 'rows'],
            'validation' => [A\Validation::class, 'validation'],
        ];
    }
}
