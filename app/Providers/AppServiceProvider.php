<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
\Illuminate\Support\Facades\Vite::useBuildDirectory('.');


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
