<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\PenerimaanController;
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




Route::get('/penerimaan', [PenerimaanController::class, 'index'])->name('penerimaan.index');
Route::get('penerimaan/create', [PenerimaanController::class, 'create'])->name('penerimaan.create');
Route::post('/penerimaan', [PenerimaanController::class, 'store'])->name('penerimaan.store');
Route::get('penerimaan/{penerimaan}/edit', [PenerimaanController::class, 'edit'])->name('penerimaan.edit');
Route::put('/penerimaan/{penerimaan}', [PenerimaanController::class, 'update'])->name('penerimaan.update');
Route::delete('/penerimaan/{penerimaan}', [PenerimaanController::class, 'destroy'])->name('penerimaan.destroy');

// Route for printing Penerimaan records
Route::get('penerimaan/cetak', [PenerimaanController::class, 'cetak'])->name('penerimaan.cetak');

use App\Http\Controllers\DashboardController;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

