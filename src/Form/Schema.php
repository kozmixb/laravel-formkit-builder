<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Form;

use Illuminate\Support\Collection;
use Kozmixb\LaravelFormKitBuilder\Contracts\AttributeInterface;
use Kozmixb\LaravelFormKitBuilder\Contracts\ComponentInterface;

/** @extends Collection<int, ComponentInterface> */
class Schema extends Collection
{
    public function toArray(): array
    {
        return array_map(function (ComponentInterface $element) {
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
