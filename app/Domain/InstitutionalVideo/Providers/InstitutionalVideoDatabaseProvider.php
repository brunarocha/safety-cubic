<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\InstitutionalVideo\Providers;

use App\Domain\InstitutionalVideo\Database\Seeds\CreateInstitutionalVideoSeed;
use App\Domain\InstitutionalVideo\Database\Migrations\CreateInstitutionalVideoTable;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class InstitutionalVideoDatabaseProvider
 * @package App\Domain\InstitutionalVideo\Providers
 */
class InstitutionalVideoDatabaseProvider extends ServiceProvider
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
            CreateInstitutionalVideoTable::class
        ]);

        $this->seeders([
            CreateInstitutionalVideoSeed::class,
        ]);
    }
}
