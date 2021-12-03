<?php

use App\Http\Controllers\RifaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Views
|--------------------------------------------------------------------------
*/
Route::get('/', [RifaController::class, 'home'])->name('rifa.index');
Route::get('/rifa/{id}', [RifaController::class, 'show'])->name('rifa.show');
Route::get('/rifa', [RifaController::class, 'create'])->name('rifa.create');
Route::get('/rifa/edit/{id}', [RifaController::class, 'edit'])->name('rifa.edit');
Route::get('/rifas', [RifaController::class, 'list'])->name('rifa.list');

/*
|--------------------------------------------------------------------------
| Operações
|--------------------------------------------------------------------------
*/
Route::post('/rifa/store', [RifaController::class, 'store'])->name('rifa.store');
Route::put('/rifa/update/{id}', [RifaController::class, 'update'])->name('rifa.update');
Route::delete('/rifa/delete/{id}', [RifaController::class, 'destroy'])->name('rifa.delete');
