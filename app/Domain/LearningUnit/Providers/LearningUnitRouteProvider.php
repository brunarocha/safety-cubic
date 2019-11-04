<?php

namespace App\Domain\LearningUnit\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class LearningUnitRouteProvider
 * @package App\Domain\LearningUnit\Providers
 */
class LearningUnitRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\LearningUnit\Http\Controllers')
            ->group(base_path('app/Domain/LearningUnit/Routes/'.$route.'.php'));
    }

}
