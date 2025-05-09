<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/my-area', fn() => view('admin.login'))->name('login');
Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');