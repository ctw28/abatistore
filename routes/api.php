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
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/products/{id}/images', [ProductController::class, 'images']);

Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::delete('/product-images/{id}', [ProductImageController::class, 'destroy']);

Route::get('/sizes', [SizeController::class, 'index']);
Route::post('/sizes', [SizeController::class, 'store']);
Route::delete('/sizes/{id}', [SizeController::class, 'destroy']);

Route::get('/products/{product}/stocks', [ProductStockController::class, 'index']);
Route::post('/products/{product}/stocks', [ProductStockController::class, 'store']);
Route::delete('stocks/{id}', [ProductStockController::class, 'destroy']);

Route::patch('/products/{id}/toggle-featured', [ProductController::class, 'toggleFeatured']);