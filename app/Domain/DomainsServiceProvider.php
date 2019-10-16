<?php
/**
 * DomainsServiceProvider.php
 *
 * @author Bruna Rocha
 * @package safety-cubic
 *
 */
namespace App\Domain;

use Illuminate\Support\ServiceProvider;

use App\Domain\User\Providers\UsersServiceProvider;

/**
 * Class DomainsServiceProvider
 * @package App\Domain
 */
class DomainsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->register(
            UsersServiceProvider::class
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
