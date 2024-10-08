<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/users', function () {
    return view('admin.users');
})->middleware(['auth'])->name('users');

Route::get('/dashboard/products', function () {
    return view('admin.products');
})->middleware(['auth'])->name('products');

require __DIR__.'/auth.php';