<?php

namespace Astergo\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__ . '/config/contact.php',
            'contact'
        );

        // to publish run php artisan vendor:publish then select any of option
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
            __DIR__ . '/views' => resource_path('views/vendor/contact')
        ]);
    }

    public function register()
    {

    }
}