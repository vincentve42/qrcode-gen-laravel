<?php

namespace App\Providers;

use App\Service\UrlService;
use Illuminate\Support\ServiceProvider;

class UrlServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UrlService::class, function()
        {
            return new UrlService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
