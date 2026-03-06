<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Selamat Datang di Web 2";
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