<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductColorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductSizeController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')
->as('admin.')
->middleware(['auth', 'is_admin'])
->group(function () {
    Route::get('/', function (){
        return view('admin.dashboard');
    })->name('dashboard');
    
    Route::prefix('catalogues')
        ->as('catalogues.')
        ->group(function () {
            Route::get('/',                 [CatalogueController::class, 'index'])->name('index');
            Route::get('create',            [CatalogueController::class, 'create'])->name('create');
            Route::post('store',            [CatalogueController::class, 'store'])->name('store');
            Route::get('show/{id}',         [CatalogueController::class, 'show'])->name('show');
            Route::get('{id}/edit',         [CatalogueController::class, 'edit'])->name('edit');
            Route::put('{id}/update',       [CatalogueController::class, 'update'])->name('update');
            Route::get('{id}/destroy',   [CatalogueController::class, 'destroy'])->name('destroy');

        });
    Route::resource('tags', TagController::class);
    Route::resource('products',ProductController::class);
    Route::resource('productcolors',ProductColorController::class);
    Route::resource('productsizes',ProductSizeController::class);
    Route::resource('users',UserController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('blogs',BlogController::class);
});
