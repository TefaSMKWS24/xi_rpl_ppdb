<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataOrtuController;
use App\Http\Controllers\BiodataSiswaController;
use App\Http\Controllers\DataNilaiController;
use App\Http\Controllers\DataortuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('biodata_ortu', BiodataOrtuController::class);
Route::resource('biodata_siswa', BiodataSiswaController::class);
Route::resource('data_nilai', DataNilaiController::class);
Route::resource('data_ortu', DataOrtuController::class);
Route::resource('data_pendidikan', DataPendidikanController::class);
Route::resource('data_prestasi', DataPrestasiController::class);
Route::resource('data_siswa', DataSiswaController::class);
Route::resource('data_wali', DataWaliController::class);
Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
Route::resource('kesehatan', KesehatanController::class);
Route::resource('tabel_berkas', TabelBerkarController::class);



Route::middleware(['guest:admin'])->group(function(){
    Route::get('/admin', function(){return view ('auth.loginadmin') ;})->name('loginadmin');
    Route::post('/loginadmin', [AuthController::class, 'loginadmin']);
});
Route::middleware(['guest:guru'])->group(function(){
    Route::get('/guru', function(){return view ('auth.loginguru');})->name('loginguru');
    Route::post('/loginguru', [AuthController::class, 'loginguru']);
});
Route::middleware(['guest:siswa'])->group(function(){
    Route::get('/siswa', function(){return view ('auth.loginsiswa');})->name('loginsiswa');
    Route::post('/loginsiswa', [AuthController::class, 'loginsiswa']);
});



Route::middleware(['auth:admin'])->group(function(){
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'dashboard']);
    Route::get('/admin/logout', [AuthController::class, 'logoutadmin']);

    Route::resource('biodata_ortu', BiodataOrtuController::class)
    Route::resource('biodata_siswa', BiodataSiswaController::class);
    Route::resource('data_nilai', DataNilaiController::class);
    Route::resource('data_ortu', DataOrtuController::class);
    Route::resource('data_pendidikan', DataPendidikanController::class);
    Route::resource('data_prestasi', DataPrestasiController::class);
    Route::resource('data_siswa', DataSiswaController::class);
    Route::resource('data_wali', DataWaliController::class);
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
    Route::resource('kesehatan', KesehatanController::class);
    Route::resource('tabel_berkas', TabelBerkarController::class);
});
Route::middleware(['auth:guru'])->group(function(){
    Route::get('/guru/dashboard', [DashboardGuruController::class, 'dashboard']);
    Route::get('/guru/logout', [AuthController::class, 'logoutguru']);

    Route::resource('biodata_ortu', BiodataOrtuController::class);
    Route::resource('biodata_siswa', BiodataSiswaController::class);
    Route::resource('data_nilai', DataNilaiController::class);
    Route::resource('data_ortu', DataOrtuController::class);
    Route::resource('data_pendidikan', DataPendidikanController::class);
    Route::resource('data_prestasi', DataPrestasiController::class);
    Route::resource('data_siswa', DataSiswaController::class);
    Route::resource('data_wali', DataWaliController::class);
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
    Route::resource('kesehatan', KesehatanController::class);
    Route::resource('tabel_berkas', TabelBerkarController::class);
});
Route::middleware(['auth:siswa'])->group(function(){
    Route::get('/siswa/dashboard', [DashboardSiswaController::class, 'dashboard']);
    Route::get('/siswa/logout', [AuthController::class, 'logoutsiswa']);

    Route::resource('biodata_ortu', BiodataOrtuController::class);
    Route::resource('biodata_siswa', BiodataSiswaController::class);
    Route::resource('data_nilai', DataNilaiController::class);
    Route::resource('data_ortu', DataOrtuController::class);
    Route::resource('data_pendidikan', DataPendidikanController::class);
    Route::resource('data_prestasi', DataPrestasiController::class);
    Route::resource('data_siswa', DataSiswaController::class);
    Route::resource('data_wali', DataWaliController::class);
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
    Route::resource('kesehatan', KesehatanController::class);
    Route::resource('tabel_berkas', TabelBerkarController::class);
});
