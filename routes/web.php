<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Shop\CartController;

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
Route::resource('admin', IndexController::class)->names('admin')->only('index', 'show');

// page router
Route::get('', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::get('subscribe', [MainController::class, 'subscribe'])->name('subscribe');
Route::get('product/{product}', [MainController::class, 'product'])->name('product');
Route::get('category/{category}', [MainController::class, 'category'])->name('category');

// shopping routes
Route::resource('cart', CartController::class)->names('cart');
