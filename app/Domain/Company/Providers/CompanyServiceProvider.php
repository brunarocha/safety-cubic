<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Company\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CompanyServiceProvider
 * @package App\Domain\Company\Providers
 */
class CompanyServiceProvider extends ServiceProvider
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
        $this->app->register(CompanyDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(CompanyRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'company');

        /*
         * Register Provider Routes
         * */
        $this->app->register(CompanyRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'company');
    }

}