<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Kozmixb\LaravelFormKitBuilder\Attributes\Label;
use Kozmixb\LaravelFormKitBuilder\Attributes\Validation;
use Kozmixb\LaravelFormKitBuilder\Form\Schema;
use Kozmixb\LaravelFormKitBuilder\Contracts\ComponentInterface;
use Kozmixb\LaravelFormKitBuilder\Contracts\FormInterface;

class FormSchemaBuilder
{
    /** @var FormInterface */
    private $form;

    public function build(FormInterface $form): Schema
    {
        $this->form = $form;

        return new Schema(
            array_map(
                function (string $name, $validation) {
                    $element = $this->getComponentByName($name);
                    $element->addAttribute($this->fetchLabel($name));
                    $element->addAttribute(ValidationFactory::transform($validation));

                    return $element;
                },
                array_keys($form->rules()),
                $form->rules()
            )
        );
    }

    private function getComponentByName(string $name): ComponentInterface
    {
        $class = config("formkit-schema.mapping.{$name}") ?? config('formkit-schema.mapping.*');

        return new $class($name);
    }

    private function fetchLabel(string $name)
    {
        return isset($this->form->labels()[$name]) ?
            new Label($this->form->labels()[$name]) :
            Label::fromName($name);
    }
}
