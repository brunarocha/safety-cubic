<?php
/**
 * @author: Bruna Rocha
 * @date: 02/12/2019
 */

namespace App\Domain\InstitutionalVideo\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class InstitutionalVideoServiceProvider
 * @package App\Domain\InstitutionalVideo\Providers
 */
class InstitutionalVideoServiceProvider extends ServiceProvider
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
        $this->app->register(InstitutionalVideoDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        //$this->app->register(PublicationRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        //$this->loadViewsFrom(__DIR__.'/../Resources/Views', 'publication');

        /*
         * Register Provider Routes
         * */
        //$this->app->register(PublicationRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        //$this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'publication');
    }

}