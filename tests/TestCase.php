<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests;

use Kozmixb\LaravelFormKitBuilder\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
