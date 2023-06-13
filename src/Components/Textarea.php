<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class Textarea extends BaseComponent
{
    /** @var string */
    private $name;

    /** @var int|null */
    private $rows;

    /** @var int|null */
    private $cols;

    public function __construct(
        string $name,
        ?string $label = null,
        ?int $rows = null,
        ?int $cols = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->rows = $rows;
        $this->cols = $cols;
    }

    public function node(): NodeInterface
    {
        return new FormKit('textarea');
    }

    public function additionalParams(): array
    {
        return array_filter([
            'rows' => $this->rows,
            'cols' => $this->cols,
        ]);
    }
}
