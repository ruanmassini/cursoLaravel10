<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('index');
});

// Produtos:
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('productIndex');
    Route::get('/delete', [ProductsController::class, 'delete'])->name('productDelete');
});
