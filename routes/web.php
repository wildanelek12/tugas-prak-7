<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\InputController;
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

Route::get('/home', [BarangController::class,'showData']);
Route::get('/delete', [BarangController::class,'deleteData']);
Route::get('/insert', [BarangController::class,'insertData']);
Route::get('/sortNama', [BarangController::class,'sortNama']);
Route::get('/sortJumlah', [BarangController::class,'sortJumlah']);
Route::get('/search/{barang}', [BarangController::class,'searchName']);
Route::get('/deleteItem/{nama_barang}', [BarangController::class,'deleteItem']);
Route::get('/detailItem/{nama_barang}', [BarangController::class,'detailItem']);
Route::get('/proses-form', [InputController::class,'inputData']);
Route::get('/', function () {
     return view ('home');
});

Route::get('/input-form', function () {
     return view ('input_form');
});