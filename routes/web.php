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

Route::get('/', function () {
    return view('guru.index');
});

    Route::resource('biodata_ortu',biodataOrtuController::class);
    Route::resource('biodata_siswa',BiodataSiswaController::class);
    Route::resource('data_nilai',DataNilaiController::class);
    Route::resource('data_ortu',DataOrtuController::class);
    Route::resource('data_pendidikan',DataPendidikanController::class);
    Route::resource('data_prestasi',DataPrestasiController::class);
    Route::resource('data_siswa',DataSiswaController::class);
    Route::resource('data_wali',DataWaliController::class);
    Route::resource('ekstrakurikuler',EkstrakurikulerController::class);
    Route::resource('kesehatan',KesehatanController::class);
    Route::resource('tabel_berkas',TabelBerkasController::class);
