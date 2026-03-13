<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>

<h1>Detail Produk</h1>

<p>Nama Produk : {{ $produk['nama'] }}</p>
<p>Harga : Rp {{ $produk['harga'] }}</p>

<a href="/katalog">Kembali ke katalog</a>

</body>
</html>