<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/cart', [PageController::class, 'cart']);
// Route::post('/add-to-cart', [PageController::class, 'addToCart']);
Route::post('/add-to-cart', [PageController::class, 'addToCart'])->name('add-to-cart');
