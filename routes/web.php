<?php

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




    Route::get('/', [\App\Http\Controllers\CurrencyController::class, 'index']);
    Route::get('/create', [\App\Http\Controllers\CurrencyController::class, 'create']);
    Route::post('/store', [\App\Http\Controllers\CurrencyController::class, 'store']);

    Route::prefix('articles')->group(function (){
        Route::get('/',[\App\Http\Controllers\CryptoController::class, 'index'])->name('index');
        Route::get('create', [\App\Http\Controllers\CryptoController::class, 'create'])->name('create');
        Route::post('store', [\App\Http\Controllers\CryptoController::class, 'store'])->name('store');
    });


