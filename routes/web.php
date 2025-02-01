<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataOrtuController;
use App\Http\Controllers\BiodataSiswaController;
use App\Http\Controllers\DataNilaiController;
use App\Http\Controllers\DataOrtuController;
use App\Http\Controllers\DataPendidikanController;
use App\Http\Controllers\DataPrestasiController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataWaliController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\TabelBerkarController;


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

Route::get('/guru/index', function () {
    return view('guru.index');
});

route::resource('biodata_ortu',BiodataOrtuController::class);
route::resource('biodata_siswa',BiodataSiswaController::class);
route::resource('data_nilai',DataNilaiController::class);
route::resource('data_ortu',DataOrtuController::class);
route::resource('data_pendidikan',DataPendidikanController::class);
route::resource('data_prestasi',DataPrestasiController::class);
route::resource('data_siswa',DataSiswaController::class);
route::resource('data_wali',DataWaliController::class);
route::resource('ekstrakurikuler',EkstrakurikulerController::class);
route::resource('kesehatan',KesehatanController::class);
route::resource('tebel_berkas',TabelBerkasController::class);
