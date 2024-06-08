<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengirimanController;
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


Route::get('/pengiriman', [PengirimanController::class, 'index'])->name('pengiriman.index');
Route::get('/pengiriman/create', [PengirimanController::class, 'create'])->name('pengiriman.create');
Route::post('/pengiriman', [PengirimanController::class, 'store'])->name('pengiriman.store');
Route::get('/pengiriman/{id_pengiriman}/edit', [PengirimanController::class, 'edit'])->name('pengiriman.edit');
Route::put('/pengiriman/{id_pengiriman}', [PengirimanController::class, 'update'])->name('pengiriman.update');
Route::delete('/pengiriman/{id_pengiriman}', [PengirimanController::class, 'destroy'])->name('pengiriman.destroy');
Route::get('/pengiriman/cetak', [PengirimanController::class, 'cetak'])->name('pengiriman.cetak');
