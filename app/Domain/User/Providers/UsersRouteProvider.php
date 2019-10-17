<?php

namespace App\Domain\User\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class UsersRouteProvider
 * @package App\Domain\User\Providers
 */
class UsersRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\User\Http\Controllers')
            ->group(base_path('app/Domain/User/Routes/'.$route.'.php'));
    }

}
