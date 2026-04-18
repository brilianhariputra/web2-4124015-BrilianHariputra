<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPERFA - Home</title>
    
    @vite('resources/css/app.css')
    <script src="https://tailwindcss.com"></script>
    
    <link href="https://googleapis.com" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white text-slate-900">

    <!-- Navbar Biru Putih -->
    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm italic">S</span>
                </div>
                <h1 class="text-xl font-bold text-blue-600">SIPERFA</h1>
            </div>
            <div class="hidden md:flex space-x-8 text-sm font-semibold text-slate-600">
                <a href="/" class="text-blue-600">Home</a>
                <a href="/katalog" class="hover:text-blue-600 transition">Katalog</a>
                <a href="/ruangan" class="hover:text-blue-600 transition">Ruangan</a>
            </div>
            <!-- X Button Minimalis -->
            <button class="text-slate-400 hover:text-blue-600 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M6 18L18 6M6 6l12 12" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="container mx-auto mt-16 px-6 text-center">
        <!-- X Badge Biru -->
        <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-50 border border-blue-100 rounded-full mb-6">
            <span class="text-[10px] font-bold text-blue-600 uppercase tracking-widest italic">System v2.0 Ready</span>
            <div class="w-[1px] h-3 bg-blue-200"></div>
            <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M6 18L18 6M6 6l12 12" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </div>

        <h2 class="text-4xl md:text-5xl font-extrabold text-slate-800 leading-tight mb-6">
            Sistem Peminjaman <br>
            <span class="text-blue-600">Ruangan & Fasilitas</span>
        </h2>
        <p class="text-slate-500 max-w-xl mx-auto text-base leading-relaxed mb-10">
            Kelola data inventaris, profil anggota, dan pemesanan fasilitas secara efisien dalam satu platform yang simpel.
        </p>
        
        <!-- Tombol Utama -->
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/katalog" class="px-8 py-3 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-100 hover:bg-blue-700 transition">
                Lihat Katalog
            </a>
            <button class="inline-flex items-center gap-2 px-8 py-3 bg-white text-blue-600 border-2 border-blue-600 rounded-xl font-bold hover:bg-blue-50 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M6 18L18 6M6 6l12 12" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
                Booking Ruangan
            </button>
        </div>
    </header>

    <!-- Section Tim -->
    <section class="container mx-auto mt-20 mb-20 px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php 
                $tim = [
                    ['nama' => 'Brilian Hariputra', 'nim' => '4124015'],
                    ['nama' => 'Ahmad Ibnu M.', 'nim' => '4124023'],
                    ['nama' => 'M. Zulkhi Mujtahid', 'nim' => '4124043']
                ];
            @endphp

            @foreach($tim as $t)
            <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm hover:border-blue-500 hover:shadow-md transition-all group relative overflow-hidden">
                <!-- Mini X Decor -->
                <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity text-blue-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-width="3" stroke-linecap="round"/></svg>
                </div>
                
                <h4 class="font-bold text-slate-800 text-lg">{{ $t['nama'] }}</h4>
                <p class="text-blue-600 font-semibold text-sm mt-1">{{ $t['nim'] }}</p>
                <div class="mt-4 h-1 w-8 bg-blue-600 rounded-full group-hover:w-full transition-all duration-300"></div>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="py-10 border-t border-slate-50 text-center">
        <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">© 2024 SIPERFA Team • Blue Edition</p>
    </footer>

</body>
</html>
