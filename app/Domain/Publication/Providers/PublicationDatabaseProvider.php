<?php

/**
 * @author: Bruna Rocha
 * @date: 02/12/2019
 */

namespace App\Domain\Publication\Providers;

use App\Domain\Publication\Database\Migrations\CreatePublicationsTable;
use App\Domain\Publication\Database\Seeds\CreatePublicationsSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class PublicationDatabaseProvider
 * @package App\Domain\Publication\Providers
 */
class PublicationDatabaseProvider extends ServiceProvider
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
            CreatePublicationsTable::class,
        ]);

        $this->seeders([
            CreatePublicationsSeed::class,
        ]);
    }
}
