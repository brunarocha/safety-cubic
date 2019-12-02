<?php

namespace App\Domain\Publication\Providers;

use App\Domain\Publication\Repositories\PublicationInterface;
use App\Domain\Publication\Repositories\PublicationRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class PublicationRepositoryProvider
 * @package App\Domain\Publication\Providers
 */
class PublicationRepositoryProvider extends ServiceProvider
{

    protected $namespace = 'App\Domain\Publication\Http\Controllers';

    /**
     * Register Repositories for use in Controller
     */
    public function register()
    {
        $this->app->bind(PublicationInterface::class, PublicationRepository::class);
    }
}
