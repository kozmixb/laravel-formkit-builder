<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Collections;

use Illuminate\Support\Collection;
use Kozmixb\LaravelFormKitBuilder\Contracts\AttributeInterface;
use Kozmixb\LaravelFormKitBuilder\Contracts\ElementInterface;

/** @extends Collection<int, ElementInterface> */
class Schema extends Collection
{
    public function toArray(): array
    {
        return array_map(function (ElementInterface $element) {
            return array_merge(
                [
                    $element->node()->key() => $element->node()->value(),
                    'name' => $element->name(),
                ],
                ...array_map(function (AttributeInterface $attribute) {
                    return [$attribute->key() => $attribute->value()];
                }, $element->attributes()->items)
            );
        }, $this->items);
    }
}
