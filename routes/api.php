<?php

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
use App\Http\Controllers\SizeController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/me', [AuthController::class, 'me'])->middleware('auth:api');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/kategori', [KategoriController::class, 'index'])->name('categories');
// Route::get('/products/{id}/images', [ProductController::class, 'images']);

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::delete('/product-images/{id}', [ProductImageController::class, 'destroy'])->name('product.images.destroy');

Route::get('/sizes', [SizeController::class, 'index'])->name('size.index');
Route::post('/sizes', [SizeController::class, 'store'])->name('size.store');
Route::delete('/sizes/{id}', [SizeController::class, 'destroy'])->name('size.destroy');

Route::get('/products/{product}/stocks', [ProductStockController::class, 'index'])->name('stock.index');
Route::post('/products/{product}/stocks', [ProductStockController::class, 'store'])->name('stock.store');
Route::delete('stocks/{id}', [ProductStockController::class, 'destroy'])->name('stock.destroy');

Route::patch('/products/{id}/toggle-featured', [ProductController::class, 'toggleFeatured'])->name('toggle.featured');