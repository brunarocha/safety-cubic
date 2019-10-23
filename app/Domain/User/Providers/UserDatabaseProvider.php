<?php

/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Providers;

use App\Domain\User\Database\Migrations\CreatePasswordResetsTable;
use App\Domain\User\Database\Migrations\CreatePermissionsTable;
use App\Domain\User\Database\Migrations\CreateRolesPermissionsTable;
use App\Domain\User\Database\Migrations\CreateRolesTable;
use App\Domain\User\Database\Migrations\CreateUsersRolesTable;
use App\Domain\User\Database\Migrations\CreateUsersTable;
use App\Domain\User\Database\Seeds\CreatePermissionsSeed;
use App\Domain\User\Database\Seeds\CreateRolesPermissionsSeed;
use App\Domain\User\Database\Seeds\CreateRolesSeed;
use App\Domain\User\Database\Seeds\CreateUsersRolesSeed;
use App\Domain\User\Database\Seeds\CreateUsersSeed;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class UserDatabaseProvider
 * @package App\Domain\User\Providers
 */
class UserDatabaseProvider extends ServiceProvider
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
            CreatePasswordResetsTable::class,
            CreateRolesTable::class,
            CreatePermissionsTable::class,
            CreateRolesPermissionsTable::class,
            CreateUsersRolesTable::class
        ]);

        $this->seeders([
            CreateUsersSeed::class,
            CreateRolesSeed::class,
            CreatePermissionsSeed::class,
            CreateRolesPermissionsSeed::class,
            CreateUsersRolesSeed::class
        ]);
    }
}
