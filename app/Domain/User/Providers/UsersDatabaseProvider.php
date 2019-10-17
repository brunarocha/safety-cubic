<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Providers;

use App\Domain\User\Database\Migrations\CreatePasswordResetsTable;
use App\Domain\User\Database\Migrations\CreateRolesTable;
use App\Domain\User\Database\Migrations\CreateUsersTable;
use App\Domain\User\Database\Seeds\CreateRolesSeed;
use App\Domain\User\Database\Seeds\CreateUsersSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class InstitutionalsDatabaseProvider
 * @package App\Domain\User\Providers
 */
class UsersDatabaseProvider extends ServiceProvider
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
            CreateUsersTable::class,
            CreateRolesTable::class,
            CreatePasswordResetsTable::class
        ]);

        $this->seeders([
            CreateUsersSeed::class,
            CreateRolesSeed::class
        ]);
    }
}
