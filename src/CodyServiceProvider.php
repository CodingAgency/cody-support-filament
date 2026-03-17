<?php

namespace CodySupport\FilamentCody;

use Illuminate\Support\ServiceProvider;

class CodyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/cody.php', 'cody');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/cody.php' => config_path('cody.php'),
        ], 'cody-config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-cody');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'cody');

        $this->publishes([
            __DIR__ . '/../resources/lang' => $this->app->langPath('vendor/cody'),
        ], 'cody-lang');
    }
}
