<?php

namespace App\Providers;

use App\Services\Implement\NewsService;
use App\Services\Implement\ProductsService;
use App\Services\Interfaces\INewsService;
use App\Services\Interfaces\IProductsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(INewsService::class, NewsService::class);
        $this->app->singleton(IProductsService::class, ProductsService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
