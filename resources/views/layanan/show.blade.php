<h1>Detail Layanan Laundry</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>{{ $layanan['id'] }}</td>
    </tr>
    <tr>
        <td>Pelanggan</td>
        <td>{{ $layanan['pelanggan'] }}</td>
    </tr>
    <tr>
        <td>Layanan</td>
        <td>{{ $layanan['layanan'] }}</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>{{ $layanan['harga'] }}</td>
    </tr>
    <tr>
        <td>Tanggal masuk</td>
        <td>{{ $layanan['tanggal_masuk'] }}</td>
    </tr>
    <tr>
        <td>Perkiraan selesai</td>
        <td>{{ $layanan['tanggal_selesai'] }}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>
            @if ($layanan['siap'])
                <strong>Siap diambil</strong>
            @else
                <em>Belum siap, masih diproses</em>
            @endif
        </td>
    </tr>
</table>

<p><a href="{{ route('layanan.index') }}">Kembali ke daftar layanan</a></p>