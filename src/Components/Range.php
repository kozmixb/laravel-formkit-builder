<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class Range extends BaseComponent
{
    /** @var int */
    private $min;

    /** @var int */
    private $max;

    public function __construct(
        string $name,
        ?string $label = null,
        int $min = 0,
        int $max = 100
    ) {
        parent::__construct($name, $label);

        $this->min = $min;
        $this->max = $max;
    }

    public function node(): NodeInterface
    {
        return new FormKit('range');
    }

    /** @return array<string, string|int|bool> */
    public function additionalParams(): array
    {
        return array_filter([
            'min' => $this->min,
            'max' => $this->max
        ]);
    }
}
