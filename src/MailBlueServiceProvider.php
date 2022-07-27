<?php

namespace Programic\MailBlue;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class MailBlueServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $config = config('services.mailblue');
        $baseURL = data_get($config, 'baseURL', '');
        $token = data_get($config, 'apiToken', '');
        $attempts = data_get($config, 'attempts', 3);
        $sleep = data_get($config, 'sleep', 100);

        Http::macro('mailblue', fn () => Http::withHeaders([
            'Api-Token' => $token,
        ])
            ->retry($attempts, $sleep)->baseUrl($baseURL));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MailBlue::class, fn () => new MailBlue());
        $this->app->alias(MailBlue::class, 'mailblue');
    }
}
