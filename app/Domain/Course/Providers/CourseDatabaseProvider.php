<?php

/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Course\Providers;

use App\Domain\Course\Database\Migrations\CreateCoursesTable;
use App\Domain\Courses\Database\Seeds\CreateCoursesSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class CourseDatabaseProvider
 * @package App\Domain\Course\Providers
 */
class CourseDatabaseProvider extends ServiceProvider
{
    use MigratorTrait;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->migrations([
            CreateCoursesTable::class
        ]);

        $this->seeders([
            CreateCoursesSeed::class
        ]);
    }
}
