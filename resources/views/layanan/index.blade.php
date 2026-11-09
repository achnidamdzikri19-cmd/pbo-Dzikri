<h1>Daftar Layanan Laundry</h1>

@if (count($daftarLayanan) === 0)
    <p>Belum ada layanan.</p>
@else
    <ul>
        @foreach ($daftarLayanan as $item)
            <li>
                <a href="{{ route('layanan.show', $item['id']) }}">
                    {{ $item['layanan'] }} - {{ $item['pelanggan'] }}
                </a>
                |
                @if ($item['siap'])
                    <strong>Siap diambil</strong>
                @else
                    <em>Belum siap</em>
                @endif
            </li>
        @endforeach
    </ul>
@endif

<p><a href="{{ route('laundry.index') }}">Kembali ke daftar pesanan</a></p>