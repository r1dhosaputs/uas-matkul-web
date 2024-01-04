<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_310122023716 as myDB;
use App\Http\Controllers\DashController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', [myDB::class, 'index'])->name('barang.index');
Route::get('/barang/tambah', [myDB::class, 'tambah'])->name('barang.tambah');
Route::post('/barang/tambah', [myDB::class, 'tambah_simpan'])->name('barang.tambah_simpan');

Route::get('/barang/{id}/edit', [myDB::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [myDB::class, 'edit_simpan'])->name('barang.edit_simpan');

Route::delete('/barang/{id}', [myDB::class, 'hapus'])->name('barang.hapus');

Route::get('/dash', [DashController::class, 'index'])->name('barang.dash');
