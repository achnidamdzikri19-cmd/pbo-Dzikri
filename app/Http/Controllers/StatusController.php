<?php

namespace App\Http\Controllers;

class StatusController extends Controller
{
    public function index(?string $status = null)
    {
        // data contoh (belum memakai database)
        $semuaPesanan = [
            ['id' => 1, 'pelanggan' => 'Andi',  'status' => 'proses'],
            ['id' => 2, 'pelanggan' => 'Budi',  'status' => 'selesai'],
            ['id' => 3, 'pelanggan' => 'Citra', 'status' => 'proses'],
            ['id' => 4, 'pelanggan' => 'Dina',  'status' => 'selesai'],
        ];

        $daftarStatus = ['proses', 'selesai', 'diambil'];

        // Tanpa parameter: tampilkan pilihan semua status
        if ($status === null) {
            return view('status.index', [
                'judulHalaman' => 'Status Pesanan Laundry',
                'status'       => null,
                'daftarStatus' => $daftarStatus,
                'daftarPesanan' => [],
            ]);
        }

        // Dengan parameter: saring pesanan sesuai status
        $daftarPesanan = array_values(array_filter(
            $semuaPesanan,
            fn ($pesanan) => $pesanan['status'] === strtolower($status)
        ));

        return view('status.index', [
            'judulHalaman' => 'Pesanan dengan status: ' . $status,
            'status'       => $status,
            'daftarStatus' => $daftarStatus,
            'daftarPesanan' => $daftarPesanan,
        ]);
    }
}
