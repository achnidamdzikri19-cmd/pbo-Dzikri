<h1>{{ $judulHalaman }}</h1>

@if ($status === null)
    <ul>
        @foreach ($daftarStatus as $item)
            <li>
                <a href="{{ route('status.index', $item) }}">
                    {{ ucfirst($item) }}
                </a>
            </li>
        @endforeach
    </ul>
@else
    @if (count($daftarPesanan) === 0)
        <p>Belum ada pesanan dengan status ini.</p>
    @else
        <p>Total pesanan: {{ count($daftarPesanan) }}</p>
        <ul>
            @foreach ($daftarPesanan as $pesanan)
                <li>#{{ $pesanan['id'] }} - {{ $pesanan['pelanggan'] }}</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('status.index') }}">Kembali ke semua status</a>
@endif