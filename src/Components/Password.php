<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class Password extends BaseComponent
{
    public function node(): NodeInterface
    {
        return new FormKit('password');
    }

    public static function casts(): ?string
    {
        return 'password';
    }
}
