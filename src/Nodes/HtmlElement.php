<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Nodes;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;

class HtmlElement implements NodeInterface
{
    /** @var string */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function key(): string
    {
        return '$el';
    }

    public function value(): string
    {
        return $this->value;
    }
}
