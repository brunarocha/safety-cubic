<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Institutional\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class InstitutionalsServiceProvider
 * @package App\Domain\Institutional\Providers
 */
class InstitutionalsServiceProvider extends ServiceProvider
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
        $this->app->register(InstitutionalsDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(InstitutionalRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'institutionals');

        /*
         * Register Provider Routes
         * */
        $this->app->register(InstitutionalsRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'institutional');
    }

}