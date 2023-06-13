<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class File extends BaseComponent
{
    /** @var bool */
    private $multiple;

    /** @var array<int, string> */
    private $accepts;

    public function __construct(
        string $name,
        ?string $label = null,
        bool $multiple = false,
        array $accepts = []
    ) {
        parent::__construct($name, $label);

        $this->multiple = $multiple;
        $this->accepts = $accepts;
    }

    public function node(): NodeInterface
    {
        return new FormKit('file');
    }

    public function additionalParams(): array
    {
        return array_filter([
            'accept' => $this->getAccepts(),
            'multiple' => $this->multiple
        ]);
    }

    private function getAccepts(): ?string
    {
        if (empty($this->accepts)) {
            return null;
        }

        return implode(
            ',',
            array_map(
                function (string $extension) {
                    return ".{$extension}";
                },
                $this->accepts
            )
        );
    }
}
