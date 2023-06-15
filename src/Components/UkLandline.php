<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Components;

use Kozmixb\LaravelFormKitBuilder\Attributes\Attribute;
use Kozmixb\LaravelFormKitBuilder\Attributes\Placeholder;
use Kozmixb\LaravelFormKitBuilder\Attributes\Validation;
use Kozmixb\LaravelFormKitBuilder\Contracts\NodeInterface;
use Kozmixb\LaravelFormKitBuilder\Nodes\FormKit;

class UkLandline extends BaseComponent
{
    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->addAttribute(new Placeholder('+44 xxxx xxxxxxx'));
        $this->addAttribute(new Validation('matches:^0\d{2,4}[ -]{1}[\d]{3}[\d -]{1}[\d -]{1}[\d]{1,4}$/'));
        $this->addAttribute(
            new Attribute(
                ':validation-messages',
                "{matches: 'Phone number must be in the format xxx-xxx-xxxx'}"
            )
        );
    }

    public function node(): NodeInterface
    {
        return new FormKit('tel');
    }
}
