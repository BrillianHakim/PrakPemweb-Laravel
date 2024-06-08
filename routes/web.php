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
Route::get('/', function () {
    return view('tes');
});

Route::resource('pengiriman', PengirimanController::class);

Route::get('/pengiriman', [PengirimanController::class, 'index']);
Route::get('/pengiriman/tambah', [CategoryController::class, 'create']);
Route::post('/pengiriman/store', [CategoryController::class, 'store']);
Route::get('/pengiriman/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/pengiriman/update/{id}', [CategoryController::class, 'update']);

Route::get('/pengiriman/hapus/{id}', [CategoryController::class, 'delete']);
Route::get('/pengiriman/destroy/{id}', [CategoryController::class, 'destroy']);

