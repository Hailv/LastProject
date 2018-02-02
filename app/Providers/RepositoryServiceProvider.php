<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->singleton(
//            \App\Repositories\ShopsRepositoryInterface::class,
//            \App\Repositories\Eloquents\ShopsRepository::class
//        );
        $this->app->singleton(
            \App\Repositories\ProductsRepositoryInterface::class,
            \App\Repositories\Eloquents\ProductsRepositoriy::class
        );
        $this->app->singleton(
            \App\Repositories\SalesRepositoryInterface::class,
            \App\Repositories\Eloquents\SalesRepository::class
        );
        $this->app->singleton(
            \App\Repositories\CategoriesRepositoryInterface::class,
            \App\Repositories\Eloquents\CategoriesRepository::class
        );
        $this->app->singleton(
            \App\Repositories\ImagesRepositoryInterface::class,
            \App\Repositories\Eloquents\ImagesRepository::class
        );
    }
}
