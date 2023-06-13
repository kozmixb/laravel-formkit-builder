<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->bind(FormSchemaBuilder::class, function () {
            return new FormSchemaBuilder();
        });
    }

    /** @return array<string> */
    public function provides(): array
    {
        return [
            FormSchemaBuilder::class,
        ];
    }
}
