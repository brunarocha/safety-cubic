<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Institutional\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class InstitutionalServiceProvider
 * @package App\Domain\Institutional\Providers
 */
class InstitutionalServiceProvider extends ServiceProvider
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
        $this->app->register(InstitutionalDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(InstitutionalRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'institutional');

        /*
         * Register Provider Routes
         * */
        $this->app->register(InstitutionalRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'institutional');
    }

}