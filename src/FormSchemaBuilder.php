<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Kozmixb\LaravelFormKitBuilder\Attributes\Label;
use Kozmixb\LaravelFormKitBuilder\Attributes\Validation;
use Kozmixb\LaravelFormKitBuilder\Form\Schema;
use Kozmixb\LaravelFormKitBuilder\Contracts\ElementInterface;
use Kozmixb\LaravelFormKitBuilder\Contracts\FormInterface;

class FormSchemaBuilder
{
    public function build(FormInterface $form): Schema
    {
        return new Schema(
            array_map(
                function (string $name, $validation) use ($form) {
                    $element = $this->getComponentByName($name);

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

    private function getComponentByName(string $name): ElementInterface
    {
        $class = config("formkit-schema.mapping.{$name}") ?? config('formkit-schema.mapping.*');

        return new $class($name);
    }
}
