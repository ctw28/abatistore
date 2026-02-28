<?php

use App\Http\Controllers\Api\BuyerController;
use App\Http\Controllers\Api\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SizeController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');


Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me'])->middleware('auth:api');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('categories');
    // Route::get('/products/{id}/images', [ProductController::class, 'images']);

    Route::post('/products/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::delete('/product-images/{id}', [ProductImageController::class, 'destroy'])->name('product.images.destroy');

    Route::get('/sizes', [SizeController::class, 'index'])->name('size.index');
    Route::get('/products/{id}/sizes', [SizeController::class, 'byProduct']);

    Route::post('/sizes', [SizeController::class, 'store'])->name('size.store');
    Route::delete('/sizes/{id}', [SizeController::class, 'destroy'])->name('size.destroy');

    Route::get('/products/{product}/stocks', [ProductStockController::class, 'index'])->name('stock.index');
    Route::post('/products/{product}/stocks', [ProductStockController::class, 'store'])->name('stock.store');
    Route::delete('stocks/{id}', [ProductStockController::class, 'destroy'])->name('stock.destroy');

    Route::patch('/products/{id}/toggle-featured', [ProductController::class, 'toggleFeatured'])->name('toggle.featured');
    Route::patch('/products/{id}/toggle-habis', [ProductController::class, 'toggleHabis'])->name('toggle.habis');

    // routes/api.php
    Route::get('/sales', function () {
        return \App\Models\Sale::with('buyer', 'items.product', 'items.size')->orderBy('sale_date', 'DESC')->get();
    });

    Route::post('/sales', [SaleController::class, 'store']);
    Route::get('/products-with-sizes', [SaleController::class, 'getProductsWithSizes']);
    Route::put('/sales/{id}', [SaleController::class, 'update']);
    Route::delete('/sales/{id}', [SaleController::class, 'destroy']);
    Route::apiResource('buyers', BuyerController::class);
    Route::get('buyers-search', [BuyerController::class, 'search']);
});
