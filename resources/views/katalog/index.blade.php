<!DOCTYPE html>
<html>
<head>
    <title>Katalog Produk</title>
</head>
<body>

<<<<<<< HEAD
<h1>Daftar Produk</h1>

<ul>
@foreach($produk as $p)
<li>
    {{ $p['nama'] }} - Rp {{ $p['harga'] }}
</li>
@endforeach
</ul>

</body>
</html>
=======
@foreach ($ruangan as $r)
<p>{{ $r['nama'] }} - Rp {{ $r['harga'] }}</p>
@endforeach
@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
    <h1 class="text-2xl font-bold">Selamat Datang</h1>
@endsection
>>>>>>> 3f97174 (update: tambah produk controller dan halaman blade)
