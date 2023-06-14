<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Kozmixb\LaravelFormKitBuilder\Attributes\Label;
use Kozmixb\LaravelFormKitBuilder\Attributes\Validation;
use Kozmixb\LaravelFormKitBuilder\Collections\Schema;
use Kozmixb\LaravelFormKitBuilder\Contracts\FormInterface;

class FormSchemaBuilder
{
    public function build(FormInterface $form): Schema
    {
        return new Schema(
            array_map(
                function (string $name, $validation) use ($form) {
                    $component = Mapper::map($name);

                    $element = new $component($name);

                    $label = isset($form->labels()[$name]) ?
                        new Label($form->labels()[$name]) :
                        Label::fromName($name);

                    $element->addAttribute($label);
                    $element->addAttribute(new Validation($validation));

                    return $element;
                },
                array_keys($form->rules()),
                $form->rules()
            )
        );
    }
}
