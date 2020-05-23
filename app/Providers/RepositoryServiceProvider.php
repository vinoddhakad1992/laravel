<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\contact\ContactRepository;
use App\Repositories\Interfaces\ContactRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         
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
