<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pemasukancontroller;
use App\Http\Controllers\pengeluarancontroller;
use App\Http\Controllers\indexcontroller;

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
Route::get('/',[pemasukancontroller::class, 'donutchart']);
// Route::get('/',[indexcontroller::class,'index']);
Route::get('/pemasukan',[pemasukancontroller::class, 'create']);
Route::get('/pengeluaran',[pengeluarancontroller::class, 'create']);
Route::get('/tablePemasukan', [pemasukancontroller::class,'index']);
Route::get('/tablePengeluaran', [pengeluarancontroller::class,'index']);

Route::post('pemasukan/store', [pemasukancontroller::class, 'store'])->name('store');
Route::post('pengeluaran/store', [pengeluarancontroller::class, 'store'])->name('store');

