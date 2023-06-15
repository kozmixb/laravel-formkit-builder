<?php

declare(strict_types=1);

namespace Examples;

use Kozmixb\LaravelFormKitBuilder\Facades\FormBuilder;
use Kozmixb\LaravelFormKitBuilder\Resources\SchemaResource;

class ExampleController
{
    public function edit(): SchemaResource
    {
        return new SchemaResource(FormBuilder::build(new ExampleForm()));
    }
}
