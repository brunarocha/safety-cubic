<?php

/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Providers;

use App\Domain\Training\Database\Migrations\CreateTrainingsCategoriesTable;
use App\Domain\Training\Database\Migrations\CreateTrainingsTable;
use App\Domain\Training\Database\Seeds\CreateTrainingsCategoriesSeed;
use App\Domain\Training\Database\Seeds\CreateTrainingsSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class TrainingDatabaseProvider
 * @package App\Domain\Training\Providers
 */
class TrainingDatabaseProvider extends ServiceProvider
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
            CreateTrainingsCategoriesTable::class,
            CreateTrainingsTable::class,
        ]);

        $this->seeders([
            CreateTrainingsCategoriesSeed::class,
            CreateTrainingsSeed::class,
        ]);
    }
}
