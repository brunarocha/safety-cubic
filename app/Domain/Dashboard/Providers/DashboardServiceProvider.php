<?php
/**
 * @author: Bruna Rocha
 * @date: 04/11/2019
 */

namespace App\Domain\Dashboard\Providers;

use App\Domain\User\Providers\DashboardRouteProvider;
use Illuminate\Support\ServiceProvider;

/**
 * Class DashboardServiceProvider
 * @package App\Domain\Dashboard\Providers
 */
class DashboardServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Register Provider Database
         * */
        //$this->app->register();

        /*
         * Register Provider Repository
         * */
        //$this->app->register();

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'dashboard');

        /*
         * Register Provider Routes
         * */
        $this->app->register(DashboardRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'dashboard');

    }

}