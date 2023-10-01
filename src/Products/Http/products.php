<?php

use Src\Products\Http\Controllers\CreateProductPageController;
use Src\Products\Http\Controllers\DeleteProductController;
use Src\Products\Http\Controllers\EditProductPageController;
use Src\Products\Http\Controllers\ListProductsController;
use Src\Products\Http\Controllers\ListProductsPageController;
use Src\Products\Http\Controllers\StoreProductController;
use Src\Products\Http\Controllers\UpdateProductController;

Route::group(['middleware' => ['web'], 'prefix' => 'products', 'as' => 'products.'], function() {
    Route::get('/', ListProductsPageController::class)->name('list-page');
    Route::post('/list', ListProductsController::class)->name('list');

    Route::get('/create', CreateProductPageController::class)->name('create-page');
    Route::post('/store', StoreProductController::class)->name('store');

    Route::get('/{id}', EditProductPageController::class)->name('edit-page');
    Route::post('/{id}', UpdateProductController::class)->name('update');

    Route::delete('/{id}', DeleteProductController::class)->name('delete');
});
