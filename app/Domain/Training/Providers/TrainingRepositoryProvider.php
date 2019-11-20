<?php

namespace App\Domain\Training\Providers;

use App\Domain\Training\Repositories\TrainingCategoryInterface;
use App\Domain\Training\Repositories\TrainingCategoryRepository;
use App\Domain\Training\Repositories\TrainingInterface;
use App\Domain\Training\Repositories\TrainingRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class TrainingRepositoryProvider
 * @package App\Domain\Training\Providers
 */
class TrainingRepositoryProvider extends ServiceProvider
{

    protected $namespace = 'App\Domain\Training\Http\Controllers';

    /**
     * Register Repositories for use in Controller
     */
    public function register()
    {
        $this->app->bind(TrainingInterface::class, TrainingRepository::class);
        $this->app->bind(TrainingCategoryInterface::class, TrainingCategoryRepository::class);
    }
}
