<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RuanganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brilianhariputra', function () {
    return 'Halo, saya Brilian Hariputra. Ini rute kolaborasi saya!';
});

Route::get('/brilian', function () {
    return '<h1>Halo! Nama saya Brilian Hariputra</h1>
            <p>NIM: 4124015 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

Route::get('/ahmad', function () {
    return '<h1>Halo! Nama saya Ahmad Ibnu Muthohhari</h1>
            <p>NIM: 4124023 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

Route::get('/zulkhi', function () {
    return '<h1>Halo! Nama saya Muhammad Zulkhi Mujtahid</h1>
            <p>NIM: 4124043 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});

Route::get('/katalog', [KatalogController::class,'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class,'show'])->name('katalog.show');

Route::get('/profil', [ProfilController::class,'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class,'show'])->name('profil.show');

Route::get('/ruangan', [RuanganController::class,'index'])->name('ruangan.index');
Route::get('/ruangan/{id}', [RuanganController::class,'show'])->name('ruangan.show');
Route::get('/booking/{id}', [RuanganController::class,'booking'])->name('ruangan.booking');