<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = [
            "nama" => "Ahmad Ibnu Muthohhari",
            "nim" => "4124023",
            "prodi" => "Sistem Informasi",
            "semester" => 4,
            "keahlian" => ["Laravel","HTML","CSS","Git"]
        ];

        return view('profil', compact('profil'));
    }

    public function show($nim)
    {
        return "Menampilkan profil dengan NIM : " . $nim;
    }
}