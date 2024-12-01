<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('/all', [ProductController::class, 'index']);
    Route::post('/create', [ProductController::class, 'store']);
});
