<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\RuanganController;

// 1. Halaman Utama (Sekarang mengarah ke Landing Page/Beranda)
Route::get('/', function () {
    return view('beranda');
})->name('home');

// 2. Halaman Test Tailwind
Route::get('/tes', function () {
    return view('test');
});

// 3. Route Perkenalan Anggota (Tampilan Langsung)
Route::get('/brilian', function () {
    return '<h1>Halo! Nama saya Brilian Hariputra</h1><p>NIM: 4124015</p>';
});

Route::get('/ahmad', function () {
    return '<h1>Halo! Nama saya Ahmad Ibnu Muthohhari</h1><p>NIM: 4124023</p>';
});

Route::get('/zulkhi', function () {
    return '<h1>Halo! Nama saya Muhammad Zulkhi Mujtahid</h1><p>NIM: 4124043</p>';
});

// 4. Fitur Katalog Produk
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');

// 5. Fitur Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

// 6. Fitur Ruangan & Booking (Zulkhi)
Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/ruangan/{id}', [RuanganController::class, 'show'])->name('ruangan.show');
Route::get('/booking/{id}', [RuanganController::class, 'booking'])->name('ruangan.booking');

// 7. Route Statis Tambahan
Route::get('/about', function () {
    return "<h1>Halaman Tentang Saya</h1>";
})->name('about.index');

Route::get('/kontak', function () {
    return "<h1>Hubungi Saya di email: brilianhariputra99@gmail.com</h1>";
})->name('kontak.index');
