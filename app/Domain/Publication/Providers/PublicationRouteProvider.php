<?php

namespace App\Domain\Publication\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class PublicationRouteProvider
 * @package App\Domain\Publication\Providers
 */
class PublicationRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\Publication\Http\Controllers')
            ->group(base_path('app/Domain/Publication/Routes/'.$route.'.php'));
    }

}
