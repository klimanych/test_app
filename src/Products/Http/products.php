<?php


use Src\Products\Http\Controllers\CreateProduct\CreateProductPageController;
use Src\Products\Http\Controllers\CreateProduct\StoreProductController;
use Src\Products\Http\Controllers\DeleteProductController;
use Src\Products\Http\Controllers\EditProduct\EditProductPageController;
use Src\Products\Http\Controllers\EditProduct\UpdateProductController;
use Src\Products\Http\Controllers\ListProduct\ListProductsController;
use Src\Products\Http\Controllers\ListProduct\ListProductsPageController;
use Src\Products\Http\ShowProduct\ShowProductPageController;

Route::group(['middleware' => ['web'], 'prefix' => 'products', 'as' => 'products.'], function() {
    Route::get('/', ListProductsPageController::class)->name('list-page');
    Route::get('/list', ListProductsController::class)->name('list');

    Route::get('/{id}/show', ShowProductPageController::class)->name('show');

    Route::get('/create', CreateProductPageController::class)->name('create-page');
    Route::post('/store', StoreProductController::class)->name('store');

    Route::get('/{id}', EditProductPageController::class)->name('edit-page');
    Route::post('/{id}', UpdateProductController::class)->name('update');



    Route::delete('/{id}', DeleteProductController::class)->name('delete');
});
