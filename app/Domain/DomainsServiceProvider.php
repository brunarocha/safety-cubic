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
use App\Domain\Institutional\Providers\InstitutionalsServiceProvider;

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
        $this->app->register(UsersServiceProvider::class);
        $this->app->register(InstitutionalsServiceProvider::class);
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
