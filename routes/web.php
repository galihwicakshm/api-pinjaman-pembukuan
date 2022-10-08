<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apps\UjiController;
use App\Http\Controllers\Apps\DokumenController;
use App\Http\Controllers\Apps\PelangganController;
use App\Http\Controllers\Apps\DatapelangganController;

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
    return view('welcome');
});

Route::group(['prefix' => 'app'], function () {
    Route::resource('pelanggans', PelangganController::class);
    Route::resource('datapelanggans', DatapelangganController::class);
    Route::resource('uji', UjiController::class);
});

Route::resource('dokumentasi', DokumenController::class);

Route::get('dokumentasi/api/cari-pelanggan', [DokumenController::class, 'caripelanggan']);
Route::get('dokumentasi/api/pelanggan', [DokumenController::class, 'pelanggan']);
Route::get('dokumentasi/api/data-pelanggan', [DokumenController::class, 'datapelanggan']);
