<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\HtmlElement;

class Header extends BaseComponent
{
    /** @var string */
    private $value;

    public function __construct(string $title)
    {
        $this->value = $title;
    }

    public function node(): NodeInterface
    {
        return new HtmlElement($this->value);
    }
}
