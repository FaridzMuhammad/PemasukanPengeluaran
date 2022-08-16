<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\pemasukancontroller;

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
    return view('index');
});
Route::get('/pemasukan', function () {
    return view('pemasukan');
});
Route::get('/pengeluaran', function () {
    return view('pengeluaran');
});

// Route::get('/pemasukan', [PemPengController::class, 'pemasukan']);
// Route::get('/pengeluaran', [PemPengController::class, 'pengeluaran']);

