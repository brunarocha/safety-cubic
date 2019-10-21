<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Course\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CourseServiceProvider
 * @package App\Domain\Course\Providers
 */
class CourseServiceProvider extends ServiceProvider
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
        $this->app->register(CourseDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(CourseRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'course');

        /*
         * Register Provider Routes
         * */
        $this->app->register(CourseRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'course');
    }

}