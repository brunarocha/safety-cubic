<?php

namespace App\Domain\Institutional\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class InstitutionalRouteProvider
 * @package App\Domain\Institutional\Providers
 */
class InstitutionalRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\Institutional\Http\Controllers')
            ->group(base_path('app/Domain/Institutional/Routes/'.$route.'.php'));
    }

}
