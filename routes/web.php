<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

Route::get('/home', [BarangController::class,'show']);
Route::get('/delete', [BarangController::class,'delete']);
Route::get('/insert', [BarangController::class,'insert']);
Route::get('/sortNama', [BarangController::class,'sortNama']);
