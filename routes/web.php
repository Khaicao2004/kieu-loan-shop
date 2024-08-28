<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.index');
})->name('home');
Route::get('shop', function () {
    return view('client.shop');
})->name('shop');
Route::get('shop-details', function () {
    return view('client.shop-details');
})->name('shop-details');
Route::get('shopping-cart', function () {
    return view('client.shopping-cart');
})->name('shopping-cart');
Route::get('checkout', function () {
    return view('client.checkout');
})->name('checkout');
Route::get('about', function () {
    return view('client.about');
})->name('about');
Route::get('contact', function () {
    return view('client.contact');
})->name('contact');
Route::get('blog', function () {
    return view('client.blog');
})->name('blog');
Route::get('blog-details', function () {
    return view('client.blog-details');
})->name('blog-details');
