<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Nodes;

use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;
use PHPUnit\Framework\TestCase;

class FormKitTest extends TestCase
{
    /** @test */
    public function it_can_return_correct_value(): void
    {
        $node = new FormKit('test');

        $this->assertEquals('test', $node->value());
        $this->assertEquals('$formkit', $node->key());
        $this->assertTrue($node->requiresLabel());
    }
}
