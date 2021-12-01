<?php

use App\Http\Controllers\RifaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/rifa', [RifaController::class, 'create'])->name('rifa.create');
Route::get('/rifa/store', [RifaController::class, 'store'])->name('rifa.store');
