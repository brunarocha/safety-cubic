<?php

namespace App\Domain\Institutional\Providers;

use App\Domain\Institutional\Repositories\Institutional\Menu\MenuInterface;
use App\Domain\Institutional\Repositories\Institutional\Menu\MenuRepository;
use App\Domain\Institutional\Repositories\Institutional\Video\InstitutionalVideoInterface;
use App\Domain\Institutional\Repositories\Institutional\Video\InstitutionalVideoRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class InstitutionalRepositoryProvider
 * @package App\Domain\Institutional\Providers
 */
class InstitutionalRepositoryProvider extends ServiceProvider
{

    protected $namespace = 'App\Domain\Institutional\Http\Controllers';

    /**
     * Register Repositories for use in Controller
     */
    public function register()
    {
        $this->app->bind(MenuInterface::class, MenuRepository::class);
        $this->app->bind(InstitutionalVideoInterface::class, InstitutionalVideoRepository::class);
    }
}
