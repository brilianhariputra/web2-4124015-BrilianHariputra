<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPERFA | Eksklusif Katalog</title>
    <!-- Menggunakan CDN resmi Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://googleapis.com" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900">

    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <span class="text-blue-600 font-bold tracking-widest text-xs uppercase bg-blue-50 px-3 py-1 rounded-full">Inventory System</span>
                <h1 class="text-5xl font-extrabold tracking-tight mt-4 text-slate-900">Katalog Produk<span class="text-blue-600">.</span></h1>
                <p class="text-slate-500 mt-4 max-w-lg text-lg">Kelola dan telusuri inventaris performa tinggi untuk mendukung setiap kebutuhan operasional Anda.</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-white border border-slate-200 p-3 rounded-xl shadow-sm hover:bg-slate-50 transition">
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                </button>
                <a href="/" class="bg-slate-900 text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-600 transition shadow-lg shadow-slate-200">Beranda</a>
            </div>
        </div>
        
        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($produk as $p)
            <div class="group bg-white rounded-[2rem] border border-slate-100 p-4 shadow-sm hover:shadow-[0_20px_50px_rgba(0,0,0,0.05)] transition-all duration-500">
                <!-- Image Placeholder -->
                <div class="relative h-64 w-full bg-slate-100 rounded-[1.5rem] mb-6 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center text-slate-300 font-black text-6xl italic opacity-50">
                        ITEM
                    </div>
                    <div class="absolute top-4 left-4 bg-white/80 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-slate-800">
                        ID: #0{{ $p['id'] }}
                    </div>
                </div>

                <div class="px-2 pb-4">
                    <div class="flex justify-between items-start mb-2">
                        <h2 class="text-2xl font-bold text-slate-800 group-hover:text-blue-600 transition">{{ $p['nama'] }}</h2>
                    </div>
                    <p class="text-slate-400 text-sm mb-6">Kualitas Premium • Garansi Resmi</p>
                    
                    <div class="flex items-center justify-between border-t border-slate-50 pt-6">
                        <div>
                            <p class="text-xs text-slate-400 font-semibold uppercase tracking-wider">Harga Satuan</p>
                            <p class="text-2xl font-extrabold text-slate-900">Rp{{ number_format($p['harga'], 0, ',', '.') }}</p>
                        </div>
                        <a href="{{ route('katalog.show', $p['id']) }}" 
                           class="bg-blue-50 text-blue-600 p-4 rounded-2xl group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
                           <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Footer Info -->
        <div class="mt-20 text-center border-t border-slate-200 pt-10">
            <p class="text-slate-400 text-sm">© 2024 SIPERFA Team. Dikembangkan dengan Laravel & Tailwind CSS.</p>
        </div>
    </div>

</body>
</html>
