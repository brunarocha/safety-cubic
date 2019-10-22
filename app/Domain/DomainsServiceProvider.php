<?php
/**
 * DomainsServiceProvider.php
 *
 * @author Bruna Rocha
 * @package safety-cubic
 *
 */
namespace App\Domain;

use App\Domain\Core\Providers\CoreServiceProvider;
use App\Domain\Course\Providers\CourseServiceProvider;
use App\Domain\Institutional\Providers\InstitutionalServiceProvider;
use Illuminate\Support\ServiceProvider;
use App\Domain\User\Providers\UserServiceProvider;

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
        $this->app->register(UserServiceProvider::class);
        $this->app->register(CoreServiceProvider::class);
        $this->app->register(InstitutionalServiceProvider::class);
        $this->app->register(CourseServiceProvider::class);
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
