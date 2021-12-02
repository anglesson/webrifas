<?php

use App\Http\Controllers\RifaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Views
|--------------------------------------------------------------------------
*/
Route::get('/', [RifaController::class, 'index'])->name('rifa.index');
Route::get('/rifa', [RifaController::class, 'create'])->name('rifa.create');

/*
|--------------------------------------------------------------------------
| Operações
|--------------------------------------------------------------------------
*/
Route::post('/rifa/store', [RifaController::class, 'store'])->name('rifa.store');
