<?php

namespace App\Domain\Company\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class CompanyRouteProvider
 * @package App\Domain\Company\Providers
 */
class CompanyRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\Company\Http\Controllers')
            ->group(base_path('app/Domain/Company/Routes/'.$route.'.php'));
    }

}
