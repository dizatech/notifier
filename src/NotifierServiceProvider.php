<?php

namespace Dizatech\Notifier;

use Dizatech\Notifier\Core\SMSNotifier;
use Dizatech\Notifier\Facades\Notifier;
use Illuminate\Support\ServiceProvider;

class NotifierServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Notifier::shouldProxyTo(SMSNotifier::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
     public function boot()
     {
         $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

         $this->publishes([
             __DIR__.'/config/dizatech_notifier.php' =>config_path('dizatech_notifier.php')
         ], 'dizatech_notifier');
     }
}
