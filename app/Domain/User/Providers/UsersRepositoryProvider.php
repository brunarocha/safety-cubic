<?php

namespace App\Domain\User\Providers;

use App\Domain\User\Repositories\Users\UserInterface;
use App\Domain\User\Repositories\Users\UserRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class UsersRepositoryProvider
 * @package App\Domain\User\Providers
 */
class UsersRepositoryProvider extends ServiceProvider
{

    protected $namespace = 'App\Domain\User\Http\Controllers';

    /**
     * Register Repositories for use in Controller
     */
    public function register()
    {
        $this->app->bind(UserInterface::class, UserRepository::class);
    }
}
