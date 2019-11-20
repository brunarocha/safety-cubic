<?php

namespace App\Domain\Training\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class TrainingRouteProvider
 * @package App\Domain\Training\Providers
 */
class TrainingRouteProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->generateMapRoute('web', 'web');
        $this->generateMapRoute('web', 'api');
        $this->generateMapRoute('web', 'microservices');
    }

    protected function generateMapRoute($middleware, $route)
    {
        Route::middleware($middleware)
            ->namespace('App\Domain\Training\Http\Controllers')
            ->group(base_path('app/Domain/Training/Routes/'.$route.'.php'));
    }

}
