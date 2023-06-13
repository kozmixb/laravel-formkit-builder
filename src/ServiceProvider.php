<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CustomServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        //
    }

    /** @return array<string> */
    public function provides(): array
    {
        return [
            //
        ];
    }
}
