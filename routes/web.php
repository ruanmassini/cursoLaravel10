<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () 
{
    return view('index');
})->name('homepage');

// Produtos:
Route::prefix('produto')->group(function () {

    Route::get('/lista', [ProductsController::class, 'index'])->name('productIndex');

    Route::delete('/deletar', [ProductsController::class, 'delete'])->name('productDelete');

    Route::get('/cadastrar', [ProductsController::class, 'create'])->name('productCreate');

    Route::get('/editar', [ProductsController::class, 'edit'])->name('productGetEdit');

    Route::post('/cadastrar', [ProductsController::class, 'create'])->name('productPost');
});
