<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

/**
 * DateTime is only available in PRO version
 */
class DateTime extends BaseComponent
{
    public function node(): NodeInterface
    {
        return new FormKit('date');
    }

    public function additionalParams(): array
    {
        return [
            'value-format' => '"YYYY-MM-DD HH:mm:ss',
        ];
    }
}
