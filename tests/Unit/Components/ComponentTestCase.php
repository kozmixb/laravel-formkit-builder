<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\ElementInterface;
use PHPUnit\Framework\TestCase;

abstract class ComponentTestCase extends TestCase
{
    /** @test */
    public function it_can_return_correct_node_value(): void
    {
        $component = $this->getComponent();

        $this->assertEquals($this->getNodeValue(), $component->node()->value());
    }

    /** @test */
    public function it_can_return_provided_label(): void
    {
        $component = $this->getComponent();

        if ($component->node()->requiresLabel()) {
            $this->assertEquals('Test Label', $component->label());
            return;
        }

        $this->assertNull($component->label());
    }

    /** @test */
    public function it_can_return_name_as_label(): void
    {
        $component = $this->getComponent(true);

        if ($component->node()->requiresLabel()) {
            $this->assertEquals('test_id', $component->label());
            return;
        }

        $this->markTestSkipped('This test cannot be applied to this component');
    }

    /** @test */
    public function it_can_return_name(): void
    {
        $component = $this->getComponent(true);

        $this->assertEquals('test_id', $component->name());
    }

    /** @test */
    public function it_can_return_help(): void
    {
        $this->assertNull($this->getComponent()->help());
    }

    /** @test */
    public function it_can_return_validation(): void
    {
        $this->assertEquals('', $this->getComponent()->validation());
    }

    /** @test */
    public function it_can_return_validation_label(): void
    {
        $this->assertNull($this->getComponent()->validationLabel());
    }

    /** @test */
    public function it_can_return_props(): void
    {
        $this->assertEmpty($this->getComponent()->props());
    }

    /** @test */
    public function it_can_return_additional_params(): void
    {
        $this->assertEmpty($this->getComponent()->additionalParams());
    }


    protected function getComponent(bool $withoutLabel = false): ElementInterface
    {
        $class = static::getComponentClass();
        $parameters = static::getParameters();

        return new $class(
            'test_id',
            $withoutLabel ? null : 'Test Label',
            ...$parameters
        );
    }

    /** @return array<string, string|int|bool> */
    protected function getParameters(): array
    {
        return [];
    }

    abstract public static function getComponentClass(): string;

    abstract public static function getNodeValue(): string;
}
