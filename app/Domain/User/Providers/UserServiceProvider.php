<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class UserServiceProvider
 * @package App\Domain\User\Providers
 */
class UserServiceProvider extends ServiceProvider
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
        $this->app->register(UserDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(UserRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'user');

        /*
         * Register Provider Routes
         * */
        $this->app->register(UserRouteProvider::class);

        /*
         * Register Provider Translations
         * */
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'user');

        /*
         * Register Provider Permissions
         * */
        $this->app->register(PermissionServiceProvider::class);
    }

}