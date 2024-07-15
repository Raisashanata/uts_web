<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\dokterController;
use App\Http\Controllers\appoitmentController;

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
Route::get('home',[pasienController::class, 'home'])->name('home');

Route::get('formPasien',[pasienController::class, 'formPasien'])->name('formPasien');
Route::get('DataPasien',[pasienController::class, 'DataPasien'])->name('DataPasien');
Route::get('HapusPasien/{id}',[pasienController::class, 'HapusPasien'])->name('HapusPasien');
Route::post('SimpanPasien',[pasienController::class,'SimpanPasien'])->name('SimpanPasien');

Route::get('formDokter',[dokterController::class,'formDokter'])->name('formDokter');
Route::get('DataDokter',[dokterController::class, 'DataDokter'])->name('DataDokter');
Route::get('HapusDokter/{id}',[dokterController::class, 'HapusDokter'])->name('HapusDokter');
Route::post('SimpanDokter',[dokterController::class,'SimpanDokter'])->name('SimpanDokter');

Route::get('namaPasien',[appoitmentController::class, 'namaPasien'])->name('namaPasien');
Route::get('formAppoitment',[appoitmentController::class, 'formAppoitment'])->name('formAppoitment');
Route::get('DataAppoitment',[appoitmentController::class, 'DataAppoitment'])->name('DataAppoitment');
Route::get('HapusAppoitment/{id}',[appoitmentController::class, 'HapusAppoitment'])->name('HapusAppoitment');
Route::post('SimpanAppoitment',[appoitmentController::class,'SimpanAppoitment'])->name('SimpanAppoitment');