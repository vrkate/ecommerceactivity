<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::view('/root', 'index')->name('root');

Route::group(['prefix' => 'products', 'as' => 'products.'], function(){

    Route::get('/', [ProductsController::class, 'index'])->name('index');
    Route::get('/create', [ProductsController::class, 'create'])->name('create');
    Route::post('/create', [ProductsController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ProductsController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [ProductsController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [ProductsController::class, 'delete'])->name('delete');
    

});

Route::group(['prefix' => 'users', 'as' => 'users.'], function(){

    Route::get('/', [UsersController::class, 'index'])->name('index');
    Route::get('/create', [UsersController::class, 'create'])->name('create');
    Route::post('/create', [UsersController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UsersController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [UsersController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [UsersController::class, 'delete'])->name('delete');



});

