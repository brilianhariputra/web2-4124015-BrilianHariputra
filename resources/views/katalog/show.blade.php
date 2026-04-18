<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>Detail {{ $produk['nama'] }}</title>
</head>
<body class="bg-slate-50 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-3xl shadow-lg max-w-sm w-full text-center border border-slate-100">
        <h1 class="text-4xl font-extrabold text-slate-800">{{ $produk['nama'] }}</h1>
        <p class="text-blue-500 text-2xl font-bold mt-4 italic">Rp {{ number_format($produk['harga'], 0, ',', '.') }}</p>
        <hr class="my-6">
        <a href="/katalog" class="text-slate-500 hover:text-blue-600 font-medium">← Kembali ke Katalog</a>
    </div>
</body>
</html>
