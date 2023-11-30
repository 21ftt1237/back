<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\IProductRepository;
use App\Repository\ProductRepository;
use App\Repository\IComnetRepository;
use App\Repository\ComnetRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(IProductRepository::class, ProductRepository::class);
        $this->app->bind(IComnetRepository::class, ComnetRepository::class);

        $this->app->bind(IDefenderRepository::class, DefenderRepository::class);
        $this->app->bind(IDigitalRepository::class, DigitalRepository::class);

        $this->app->bind(IGamesideRepository::class, GamesideRepository::class);
        $this->app->bind(IRoute66Repository::class, Route66Repository::class);
         $this->app->bind(ISimanjaRepository::class, SimanjaRepository::class);

    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
