<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;
use Illuminate\Support\Facades\Schema;



class AppServiceProvider extends ServiceProvider
{
    use MigratorTrait;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->migrations([
            //CreateUsersTable::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
