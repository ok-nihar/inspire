<?php

namespace Vovance\Inspire;

use Illuminate\Support\ServiceProvider;

class InspireServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->publishes([
            __DIR__.'/../routes/web.php' => base_path('routes/inspire.php'),
        ], 'inspire-routes');
    }

    public function register()
    {
        //
    }
}