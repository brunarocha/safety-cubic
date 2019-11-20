<?php
/**
 * DomainsServiceProvider.php
 *
 * @author Bruna Rocha
 * @package safety-cubic
 *
 */
namespace App\Domain;

use App\Domain\Company\Providers\CompanyServiceProvider;
use App\Domain\Core\Providers\CoreServiceProvider;
use App\Domain\Training\Providers\TrainingServiceProvider;
use App\Domain\Dashboard\Providers\DashboardServiceProvider;
use App\Domain\Institutional\Providers\InstitutionalServiceProvider;
use App\Domain\LearningUnit\Providers\LearningUnitServiceProvider;
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
        $this->app->register(DashboardServiceProvider::class);
        $this->app->register(CoreServiceProvider::class);
        $this->app->register(InstitutionalServiceProvider::class);
        $this->app->register(TrainingServiceProvider::class);
        $this->app->register(CompanyServiceProvider::class);
        $this->app->register(LearningUnitServiceProvider::class);
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
