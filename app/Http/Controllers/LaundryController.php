<?php

namespace App\Http\Controllers;

class LaundryController extends Controller
{
    public function index()
    {
        // data contoh (belum memakai database)
        $daftarPesanan = [
            ['id' => 1, 'pelanggan' => 'Andi',  'layanan' => 'Cuci Kiloan'],
            ['id' => 2, 'pelanggan' => 'Budi',  'layanan' => 'Cuci Setrika'],
            ['id' => 3, 'pelanggan' => 'Citra', 'layanan' => 'Cuci Express'],
        ];

        return view('laundry.index', compact('daftarPesanan'));
    }

    public function show(string $id)
    {
        return view('laundry.show', compact('id'));
    }
}
