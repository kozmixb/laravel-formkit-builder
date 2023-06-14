<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Attributes\Attribute;
use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

/**
 * DateTime is only available in PRO version
 */
class DateTime extends BaseComponent
{
    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->addAttribute(new Attribute('value-format', '"YYYY-MM-DD HH:mm:ss'));
    }
    public function node(): NodeInterface
    {
        return new FormKit('date');
    }
}
