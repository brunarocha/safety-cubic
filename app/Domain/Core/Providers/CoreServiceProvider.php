<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class UsersServiceProvider
 * @package App\Domain\User\Providers
 */
class UsersServiceProvider extends ServiceProvider
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
        $this->app->register(UsersDatabaseProvider::class);

        /*
         * Register Provider Repository
         * */
        $this->app->register(UsersRepositoryProvider::class);

        /*
         * Register Provider Views
         * */
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'users');

        /*
         * Register Provider Routes
         * */
        $this->app->register(UsersRouteProvider::class);
    }

}