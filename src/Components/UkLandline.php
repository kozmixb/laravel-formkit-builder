<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class UkLandline extends BaseComponent
{
    public function node(): NodeInterface
    {
        return new FormKit('tel');
    }

    /** @return array<string, string|int|bool> */
    public function additionalParams(): array
    {
        return [
            'placeholder' => '+44 xxxx xxxxxxx',
            'validation' => 'matches:^0\d{2,4}[ -]{1}[\d]{3}[\d -]{1}[\d -]{1}[\d]{1,4}$/',
            ':validation-messages' => "{matches: 'Phone number must be in the format xxx-xxx-xxxx'}",
        ];
    }
}
