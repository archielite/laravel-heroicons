<?php

namespace ArchiElite\LaravelHeroicons;

use Illuminate\Support\ServiceProvider;

class LaravelHeroiconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'heroicons');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
