<?php

namespace App\Http\Controllers;

class LayananController extends Controller
{
    // data contoh (belum memakai database)
    private function dataLayanan(): array
    {
        return [
            ['id' => 1, 'pelanggan' => 'Andi',  'layanan' => 'Cuci Kiloan',  'harga' => 'Rp 7.000/kg',  'tanggal_masuk' => '9 November 2026', 'tanggal_selesai' => '11 November 2026', 'siap' => false],
            ['id' => 2, 'pelanggan' => 'Budi',  'layanan' => 'Cuci Setrika', 'harga' => 'Rp 9.000/kg',  'tanggal_masuk' => '7 November 2026', 'tanggal_selesai' => '9 November 2026',  'siap' => true],
            ['id' => 3, 'pelanggan' => 'Citra', 'layanan' => 'Cuci Express', 'harga' => 'Rp 12.000/kg', 'tanggal_masuk' => '9 November 2026', 'tanggal_selesai' => '9 November 2026',  'siap' => true],
            ['id' => 4, 'pelanggan' => 'Dina',  'layanan' => 'Cuci Selimut', 'harga' => 'Rp 25.000/pcs', 'tanggal_masuk' => '9 November 2026', 'tanggal_selesai' => '12 November 2026', 'siap' => false],
        ];
    }

    public function index()
    {
        $daftarLayanan = $this->dataLayanan();

        return view('layanan.index', compact('daftarLayanan'));
    }

    public function show(string $id)
    {
        $layanan = collect($this->dataLayanan())->firstWhere('id', (int) $id);

        // jika id tidak ada, tampilkan halaman 404
        abort_if($layanan === null, 404);

        return view('layanan.show', compact('layanan'));
    }
}