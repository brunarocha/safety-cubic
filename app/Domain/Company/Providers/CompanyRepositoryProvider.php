<?php

namespace App\Domain\Company\Providers;

use App\Domain\Company\Repositories\Company\CompanyInterface;
use App\Domain\Company\Repositories\Company\CompanyRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class CompanyRepositoryProvider
 * @package App\Domain\Company\Providers
 */
class CompanyRepositoryProvider extends ServiceProvider
{

    protected $namespace = 'App\Domain\Company\Http\Controllers';

    /**
     * Register Repositories for use in Controller
     */
    public function register()
    {
        $this->app->bind(CompanyInterface::class, CompanyRepository::class);
    }
}
