<?php

namespace App\Domain\LearningUnit\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LearningUnitRepositoryProvider
 * @package App\Domain\LearningUnit\Providers
 */
class LearningUnitRepositoryProvider extends ServiceProvider
{

    protected $namespace = 'App\Domain\LearningUnit\Http\Controllers';

    /**
     * Register Repositories for use in Controller
     */
    public function register()
    {
        //$this->app->bind(CourseInterface::class, CourseRepository::class);
    }
}
