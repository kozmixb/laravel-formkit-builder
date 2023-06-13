<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class UkMobile extends BaseComponent
{
    public function node(): NodeInterface
    {
        return new FormKit('tel');
    }

    public function additionalParams(): array
    {
        return [
            'placeholder' => '+44 xxxx xxxxxxx',
            'validation' => 'matches:^(?:0|\+?44)(?:\d\s?){9,10}$/',
            ':validation-messages' => "{matches: 'Phone number must be in the format xxx-xxx-xxxx'}",
        ];
    }
}
