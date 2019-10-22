<?php

/**
 * @author: Bruna Rocha
 * @date: 18/10/2019
 */

namespace App\Domain\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

/**
 * Class CoreDatabaseProvider
 * @package App\Domain\Core\Providers
 */
class CoreDatabaseProvider extends ServiceProvider
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

        ]);

        $this->seeders([

        ]);
    }
}
