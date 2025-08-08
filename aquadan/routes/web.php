<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/contact', [PageController::class, 'contact']);

