<?php


namespace Src\Products\Providers;


use Illuminate\Support\ServiceProvider;

final class ProductsServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(base_path('src/Products/Http/products.php'));
        $this->loadViewsFrom(base_path('src/Products/Views'),'Products');
    }

    public function register() {

    }
}
