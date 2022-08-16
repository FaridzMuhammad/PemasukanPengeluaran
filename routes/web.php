<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PemPengController;
use App\Http\Controllers\pemasukancontroller;


Route::get('/', function () {
    return view('index');
});
// Route::get('/pemasukan', [PemPengController::class, 'pemasukan']);
// Route::get('/pengeluaran', [PemPengController::class, 'pengeluaran']);

Route::get('/pemasukan', [pemasukancontroller::class, 'create']);
Route::get('/pengeluaran', function () {
    return view('pengeluaran');
});

Route::post('/store', [pemasukancontroller::class, 'store'])->name('store');

