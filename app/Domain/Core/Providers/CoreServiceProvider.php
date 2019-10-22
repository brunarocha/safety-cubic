<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Core\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CoreServiceProvider
 * @package App\Domain\Core\Providers
 */
class CoreServiceProvider extends ServiceProvider
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
        $this->app->register(CoreDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        //$this->app->register(UsersRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'core');

        /*
         * Register Provider Routes
         * */
        $this->app->register(CoreRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'core');
    }

}