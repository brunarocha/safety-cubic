<?php

/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */

namespace App\Domain\User\Providers;

use App\Domain\User\Entities\User\Permission;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

/**
 * Class PermissionServiceProvider
 * @package App\Domain\User\Providers
 */
class PermissionServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Permission::get()->map(function($permission){
//            Gate::define($permission->slug, function($user) use ($permission){
//                return $user->hasPermissionTo($permission);
//            });
//        });

        //Blade directives
        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) : ?>";
        });

        Blade::directive('endrole', function ($role) {
            return "<?php endif; ?>";
        });
    }
}
