<?php
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\AdminController;
use App\Router\Route;

return[
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/admin', [AdminController::class, 'login']),
    Route::post('/input', [AdminController::class, 'input']),
    Route::get('/logout', [AdminController::class, 'logout']),
    Route::get('/products', [ProductController::class, 'showcase']),
    Route::get('/products/create', [ProductController::class, 'create']),
    Route::get('/product/{id}', [ProductController::class, 'show']),
    Route::get('/product/edit/{id}', [ProductController::class, 'edit']),
    Route::post('/create', [ProductController::class, 'store']),
    Route::post('/edit/{id}', [ProductController::class, 'update']),
    Route::get('/delete/{id}', [ProductController::class, 'delete']),

    Route::get('/store', [HomeController::class, 'index']),
    Route::get('/show/{id}', [HomeController::class, 'show']),

];