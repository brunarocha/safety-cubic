<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Institutional\Providers;

use App\Domain\Institucional\Database\Migrations\CreateCompaniesTable;
use App\Domain\Institutional\Database\Seeds\CreateCompaniesSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class InstitutionalsDatabaseProvider
 * @package App\Domain\Institutional\Providers
 */
class InstitutionalsDatabaseProvider extends ServiceProvider
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
            CreateCompaniesTable::class
        ]);

        $this->seeders([
            CreateCompaniesSeed::class
        ]);
    }
}
