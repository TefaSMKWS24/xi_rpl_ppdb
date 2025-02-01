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
