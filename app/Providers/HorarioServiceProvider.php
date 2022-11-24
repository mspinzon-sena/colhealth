<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\HorarioServiceInterface;
use App\Services\HorarioService;


class HorarioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HorarioServiceInterface::class, HorarioService::class);
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
