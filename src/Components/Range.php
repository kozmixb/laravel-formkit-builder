<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class Range extends BaseComponent
{
    public function node(): NodeInterface
    {
        return new FormKit('range');
    }
}
