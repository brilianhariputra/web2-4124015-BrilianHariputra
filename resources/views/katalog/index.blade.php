<!DOCTYPE html>
<html>
<head>
    <title>Katalog Produk</title>
</head>
<body>

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