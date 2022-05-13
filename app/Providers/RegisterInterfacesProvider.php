<?php

namespace App\Providers;

use App\Repositories\Repository;
use App\Repositories\User\UserRepository;
use App\Services\Service;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class RegisterInterfacesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Service::class ,Repository::class);
        $this->app->bind(UserService::class,UserRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
