<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionHistoryController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);

    Route::get('/fashion', [ProductController::class, 'index'])->name('products.index');
    Route::get('/baju-pria', [ProductController::class, 'bajuPria'])->name('products.baju-pria');
    Route::get('/celana-pria', [ProductController::class, 'celanaPria'])->name('products.celana-pria');
    Route::get('/baju-wanita', [ProductController::class, 'bajuWanita'])->name('products.baju-wanita');
    Route::get('/celana-wanita', [ProductController::class, 'celanaWanita'])->name('products.celana-wanita');

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/transaction-history', [TransactionHistoryController::class, 'index'])->name('transaction-history');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
