<?php


namespace Src\Products\Providers;


use Illuminate\Support\ServiceProvider;
use Src\Products\Middleware\CanEditProductMiddleware;

final class ProductsServiceProvider extends ServiceProvider
{
    public function boot() {

        $this->loadRoutesFrom(base_path('src/Products/Http/products.php'));
        $this->loadViewsFrom(base_path('src/Products/Views'),'Products');
        $this->loadJsonTranslationsFrom(base_path('src/Products/Lang'));

    }

    public function register() {
        app('router')->aliasMiddleware('can-edit-product', CanEditProductMiddleware::class);
    }
}
