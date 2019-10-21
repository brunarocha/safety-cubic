<?php

namespace App\Domain\Course\Providers;

use App\Domain\Course\Repositories\CourseInterface;
use App\Domain\Course\Repositories\CourseRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class CourseRepositoryProvider
 * @package App\Domain\Course\Providers
 */
class CourseRepositoryProvider extends ServiceProvider
{

    protected $namespace = 'App\Domain\Course\Http\Controllers';

    /**
     * Register Repositories for use in Controller
     */
    public function register()
    {
        $this->app->bind(CourseInterface::class, CourseRepository::class);
    }
}
