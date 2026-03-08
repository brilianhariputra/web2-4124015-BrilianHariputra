<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $ruangan = [
            ["id"=>1,"nama"=>"Ruang Rapat A","fasilitas"=>"Proyektor, AC","harga"=>200000],
            ["id"=>2,"nama"=>"Ruang Rapat B","fasilitas"=>"Proyektor, Wifi","harga"=>250000],
            ["id"=>3,"nama"=>"Aula Serbaguna","fasilitas"=>"Sound System, AC","harga"=>500000],
            ["id"=>4,"nama"=>"Ruang Training","fasilitas"=>"Proyektor, Wifi, AC","harga"=>300000],
            ["id"=>5,"nama"=>"Studio Meeting","fasilitas"=>"TV LED, Wifi","harga"=>350000]
        ];

        return view('katalog.index', compact('ruangan'));
    }

    public function show($id)
    {
        $ruangan = [
            1 => ["nama"=>"Ruang Rapat A","fasilitas"=>"Proyektor, AC","harga"=>200000],
            2 => ["nama"=>"Ruang Rapat B","fasilitas"=>"Proyektor, Wifi","harga"=>250000],
            3 => ["nama"=>"Aula Serbaguna","fasilitas"=>"Sound System, AC","harga"=>500000],
            4 => ["nama"=>"Ruang Training","fasilitas"=>"Proyektor, Wifi, AC","harga"=>300000],
            5 => ["nama"=>"Studio Meeting","fasilitas"=>"TV LED, Wifi","harga"=>350000]
        ];

        $item = $ruangan[$id];

        return view('katalog.show', compact('item'));
    }
}