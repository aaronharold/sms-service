<?php

namespace Aaronharold\SmsService;

use Aaronharold\SmsService\SmsManager;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/sms-service.php' => config_path('sms-service.php'),
        ], 'sms-service-config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sms', function ($app) {
            return new SmsManager($app);
        });

        $this->mergeConfigFrom(
            __DIR__ . '/sms-service.php',
            'sms-service'
        );
    }
}
