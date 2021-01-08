<?php

namespace App\Providers;

use App\Repositories\EloquentRepositoryInterface;
use Modules\User\Entities\Repositories\Eloquent\UserRepository;
use Modules\Menu\Entities\Repositories\Eloquent\MenuRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(EloquentRepositoryInterface::class, MenuRepository::class);
        $this->app->bind(EloquentRepositoryInterface::class, UserRepository::class);
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
