<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
// Route::post('/add-to-cart', [PageController::class, 'addToCart']);
Route::post('/add-to-cart', [PageController::class, 'addToCart'])->name('add-to-cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::post('/process-checkout', [PageController::class, 'processCheckout'])->name('process-checkout');
Route::get('/success', [PageController::class, 'success'])->name('success');

