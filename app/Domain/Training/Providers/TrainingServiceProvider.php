<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class TrainingServiceProvider
 * @package App\Domain\Training\Providers
 */
class TrainingServiceProvider extends ServiceProvider
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
        $this->app->register(TrainingDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(TrainingRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'training');

        /*
         * Register Provider Routes
         * */
        $this->app->register(TrainingRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'training');
    }

}