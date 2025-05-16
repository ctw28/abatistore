<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', fn() => view('home'));
Route::get('/detail/{id}', fn() => view('detail'))->name('detail');
Route::get('/my-area', fn() => view('admin.login'))->name('login.page');
Route::get('/produk', fn() => view('admin.product-data'))->name('product.data');
Route::get('/produk/tambah', fn() => view('admin.product-add'))->name('product.add');
Route::get('/produk/{id}/edit', fn() => view('admin.product-edit'))->name('product.edit');

Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
Route::get('/penjualan', fn() => view('admin.penjualan'))->name('penjualan');
