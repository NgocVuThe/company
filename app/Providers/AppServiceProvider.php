<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\ManagerRepositories\UserInterface;
use App\Repositories\ManagerRepositories\UserRepository;
use App\Repositories\ManagerRepositories\PostRepository;
use App\Repositories\ManagerRepositories\PostInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserInterface::class, UserRepository::class);
        $this->app->singleton(PostInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //
    }
}
