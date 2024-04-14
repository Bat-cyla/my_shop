<?php
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\LoginController;
use App\Router\Route;

return[
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/login', [LoginController::class, 'login']),
    Route::post('/login/input', [LoginController::class, 'input']),
    Route::get('/products', [ProductController::class, 'showcase']),
    Route::get('/products/create', [ProductController::class, 'create']),
    Route::get('/product/{id}', [ProductController::class, 'show']),
    Route::get('/product/edit/{id}', [ProductController::class, 'edit']),
    Route::post('/create', [ProductController::class, 'store']),
    Route::post('/edit/{id}', [ProductController::class, 'update']),
    Route::get('/delete/{id}', [ProductController::class, 'delete']),
    Route::get('/logout', [LoginController::class, 'logout']),
    Route::get('/store', [HomeController::class, 'store']),
    Route::get('/show/{id}', [HomeController::class, 'show']),

];