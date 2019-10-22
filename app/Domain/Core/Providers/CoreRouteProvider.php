<?php

namespace App\Domain\Core\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class CoreRouteProvider
 * @package App\Domain\Core\Providers
 */
class CoreRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\Core\Http\Controllers')
            ->group(base_path('app/Domain/Core/Routes/'.$route.'.php'));
    }

}
