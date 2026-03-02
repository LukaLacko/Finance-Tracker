<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Ovo obavezno dodaj na vrh

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Ova linija nateruje Laravel da koristi HTTPS za Bootstrap i JS
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}