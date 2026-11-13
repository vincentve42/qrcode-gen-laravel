<?php

namespace App\Providers;

use App\Service\QrService;
use Illuminate\Support\ServiceProvider;

class QrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(QrService::class, function()
        {
            return new QrService();
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
