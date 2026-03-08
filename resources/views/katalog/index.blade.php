<h1>Daftar Ruangan</h1>

@foreach ($ruangan as $r)
<p>{{ $r['nama'] }} - Rp {{ $r['harga'] }}</p>
@endforeach