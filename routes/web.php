<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Form\ContactController;
use App\Http\Controllers\Form\SubscribeController;
use App\Http\Controllers\Shop\CartsController;
use App\Http\Controllers\Shop\FavoriteController;
use App\Http\Controllers\Table\CategoryController;
use App\Http\Controllers\Table\ProductController;

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

// auth routes
Route::resource('logout', LogoutController::class)->names('logout')->only('index');
Route::resource('login', LoginController::class)->names('login')->only('index', 'store');
Route::resource('register', RegisterController::class)->names('register')->only('index', 'store');

// admin routes
Route::resource('admin/db/product', ProductController::class)->names('admin.product');
Route::resource('admin', IndexController::class)->names('admin')->only('index', 'create');
Route::resource('admin/db/category', CategoryController::class)->names('admin.category');

// page router
Route::get('', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('product/{product}', [MainController::class, 'product'])->name('product');
Route::get('category/{category}', [MainController::class, 'category'])->name('category');
Route::resource('subscribe', SubscribeController::class)->names('subscribe')->only('store');
Route::resource('contact', ContactController::class)->names('contact')->only('index', 'store');

// shopping routes
Route::resource('cart', CartsController::class)->names('cart');
Route::resource('favorite', FavoriteController::class)->names('favorite');
