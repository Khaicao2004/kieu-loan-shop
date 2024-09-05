<?php

use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ShopController;
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

Route::get('/',[ProductController::class, 'index'])->name('home');
// Route::get('/admin',function(){
//     return 'Day la admin';
// });
//home
Route::get('about',[HomeController::class, 'about'])->name('about');



// // Auth::routes();
// Route::get('auth/login',    [LoginController::class,'showFormLogin'])->name('login');
// Route::post('auth/login',   [LoginController::class,'login']);

// Route::post('auth/logout',  [LoginController::class,'logout'])->name('logout');

// Route::get('auth/register',    [RegisterController::class,'showFormRegister'])->name('register');
// Route::post('auth/register',   [RegisterController::class,'register']);

// Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('product/{slug}', [ProductController::class, 'detail'])->name('product.detail');


//mua bán hàng

Route::get('cart/list', [CartController::class, 'list'])->name('cart.list');
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('order/save', [OrderController::class, 'save'])->name('order.save');

//shop
Route::get('shop/{id?}',[ShopController::class, 'shop'])->name('shop');
Route::post('filter',[ShopController::class, 'filter'])->name('filter');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
