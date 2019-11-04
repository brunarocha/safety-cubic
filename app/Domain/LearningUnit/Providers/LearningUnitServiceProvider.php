<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\LearningUnit\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CourseServiceProvider
 * @package App\Domain\Course\Providers
 */
class LearningUnitServiceProvider extends ServiceProvider
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
        $this->app->register(LearningUnitDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(LearningUnitRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'learning-unit');

        /*
         * Register Provider Routes
         * */
        $this->app->register(LearningUnitRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'learning-unit');
    }

}