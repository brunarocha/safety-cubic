<?php

namespace App\Domain\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class UserRouteProvider
 * @package App\Domain\User\Providers
 */
class DashboardRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\Dashboard\Http\Controllers')
            ->group(base_path('app/Domain/Dashboard/Routes/'.$route.'.php'));
    }

}
