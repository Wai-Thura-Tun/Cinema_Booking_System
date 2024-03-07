<?php

namespace App\Providers;

use App\Contracts\Dao\UserDaoInterface;
use App\Contracts\Services\UserServiceInterface;
use App\Dao\UserDao;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserDaoInterface::class, UserDao::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
