<?php

namespace App\Providers;

use App\Interfaces\MainInterface;
use App\Repositories\ {
    VacancyRepository,
    ResponseRepository
};
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MainInterface::class, ResponseRepository::class);
        $this->app->bind(MainInterface::class, VacancyRepository::class);
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
