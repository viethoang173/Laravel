<?php

namespace App\Providers;


use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryInterface;
use App\Repositories\Implement\NewsRepository;
use App\Repositories\Implement\ProductsRepository;
use App\Repositories\Interfaces\INewsRepository;
use App\Repositories\Interfaces\IProductsRepository;
use App\Services\Implement\ProductsService;
use App\Services\Interfaces\IProductsService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->singleton(INewsRepository::class, NewsRepository::class);
        $this->app->singleton(IProductsRepository::class, ProductsRepository::class);
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
