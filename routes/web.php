<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

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

/*
|--------------------------------------------------------------------------
| Static Routes
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
    return "<h1>Selamat Datang di Website Saya</h1>";
})->name('SIPERFA.index');

Route::get('/about', function () {
    return "<h1>Halaman Tentang Saya</h1>";
})->name('about.index');

Route::get('/kontak', function () {
    return "<h1>Hubungi Saya di email:brilianhariputra99@gmail.com</h1>";
})->name('kontak.index');

/*
|--------------------------------------------------------------------------
| Dynamic Routes
|--------------------------------------------------------------------------
*/

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');