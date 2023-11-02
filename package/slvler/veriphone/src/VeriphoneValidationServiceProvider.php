<?php

namespace Slvler\VeriphoneValidation;


use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Slvler\VeriphoneValidation\Contracts\VeriphoneContract;
use Slvler\VeriphoneValidation\Managers\Veriphone;

class VeriphoneValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishConfig();
        }
    }

    public function register()
    {
        $this->publishConfig();

        $this->app->bind(VeriphoneContract::class, function (Container $app) {
            return new Veriphone($app['config']['veriphone']['veriphone']['base_url'],$app['config']['veriphone']['veriphone']['api_key'] );
        });
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../config/veriphone.php' => config_path('veriphone.php'),
        ], 'veriphone');
    }

}
