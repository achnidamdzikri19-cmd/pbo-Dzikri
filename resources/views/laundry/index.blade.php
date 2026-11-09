<h1>Daftar Pesanan Laundry</h1>
<ul>
    @foreach ($daftarPesanan as $pesanan)
        <li>
            <a href="{{ route('laundry.show', $pesanan['id']) }}">
                {{ $pesanan['pelanggan'] }} - {{ $pesanan['layanan'] }}
            </a>
        </li>
    @endforeach
</ul>
<p><a href="{{ route('status.index') }}">Lihat status pesanan</a></p>