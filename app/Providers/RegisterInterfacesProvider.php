<?php

namespace App\Providers;

use App\Http\Controllers\Admin\repository\AdminRepository;
use App\Http\Controllers\Admin\service\AdminService;
use App\Http\Controllers\Occupation\repository\OccupationRepository;
use App\Http\Controllers\Occupation\service\OccupationService;
use App\Http\Controllers\Sector\repository\SectorRepository;
use App\Http\Controllers\Sector\service\SectorService;
use App\Http\Controllers\User\repository\UserRepository;
use App\Http\Controllers\User\service\UserService;
use App\Repositories\Repository;
use App\Services\Service;
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
        $this->app->bind(AdminService::class,AdminRepository::class);
        $this->app->bind(OccupationService::class,OccupationRepository::class);
        $this->app->bind(SectorService::class,SectorRepository::class);
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
