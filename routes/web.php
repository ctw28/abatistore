<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('landing');
});
Route::get('/my-area', fn() => view('admin.login'))->name('login');
Route::get('/produk', fn() => view('admin.product-data'))->name('product.index');
Route::get('/produk/tambah', fn() => view('admin.product-add'))->name('product.add');
Route::get('/produk/{id}/edit', fn() => view('admin.product-edit'))->name('product.edit');

Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
Route::get('/penjualan', fn() => view('admin.penjualan'))->name('penjualan');

Route::get('/run-migrate-seed', function () {
    Artisan::call('migrate --seed');
    return 'Migrate and Seed Completed';
});

Route::get('/run-storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage Link Created';
});

Route::get('/run-jwt-key', function () {
    // Set JWT key, pastikan hanya diakses dengan validasi atau token yang aman.
    if (!env('JWT_SECRET')) {
        Artisan::call('key:generate --env=production');
    }
    return 'JWT Key Generated or Already Set';
});