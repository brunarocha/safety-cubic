<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Company\Providers;

use App\Domain\Company\Database\Migrations\CreateCompaniesTable;
use App\Domain\Company\Database\Seeds\CreateCompaniesSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class CompanyDatabaseProvider
 * @package App\Domain\Company\Providers
 */
class CompanyDatabaseProvider extends ServiceProvider
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
            CreateCompaniesTable::class,
        ]);

        $this->seeders([
            CreateCompaniesSeed::class,
        ]);
    }
}
