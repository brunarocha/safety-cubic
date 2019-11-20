<?php

/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\LearningUnit\Providers;

use App\Domain\LearningUnit\Database\Migrations\CreateTrainingMaterialTable;
use App\Domain\LearningUnit\Database\Migrations\CreateTrainingsUsersTable;
use App\Domain\LearningUnit\Database\Seeds\CreateTrainingMaterialSeed;
use App\Domain\LearningUnit\Database\Seeds\CreateTrainingsUsersSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class LearningUnitDatabaseProvider
 * @package App\Domain\LearningUnit\Providers
 */
class LearningUnitDatabaseProvider extends ServiceProvider
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
            CreateTrainingMaterialTable::class,
            CreateTrainingsUsersTable::class
        ]);

        $this->seeders([
            CreateTrainingMaterialSeed::class,
            CreateTrainingsUsersSeed::class
        ]);
    }
}
