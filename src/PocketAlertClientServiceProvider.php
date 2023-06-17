<?php

namespace PocketAlert\PocketAlertClient;

use Illuminate\Support\ServiceProvider;

class PocketAlertClientServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(PocketAlertClient::class, function ($app) {
            return new PocketAlertClient();
        });
    }
}
