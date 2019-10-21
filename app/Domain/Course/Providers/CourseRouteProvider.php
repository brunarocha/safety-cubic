<?php

namespace App\Domain\Course\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class CourseRouteProvider
 * @package App\Domain\Course\Providers
 */
class CourseRouteProvider extends ServiceProvider
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
            ->namespace('App\Domain\Course\Http\Controllers')
            ->group(base_path('app/Domain/Course/Routes/'.$route.'.php'));
    }

}
