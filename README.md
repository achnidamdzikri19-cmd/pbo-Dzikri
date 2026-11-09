Aplikasi Laundry Sederhana – Laravel

Pertemuan 7: Routing, Controller & Blade.

Aplikasi ini menampilkan data laundry dengan alur Route → Controller → Blade. Belum memakai database. Data contoh ditulis langsung di Controller.

Fitur
Daftar pesanan dan detail pesanan laundry
Status pesanan, difilter dengan route berparameter
Daftar layanan dan detail layanan (tanggal selesai dan status siap / belum)
Daftar Route
URL	Nama route	Controller@action	View
GET /laundry	laundry.index	LaundryController@index	laundry/index.blade.php
GET /laundry/{id}	laundry.show	LaundryController@show	laundry/show.blade.php
GET /status/{status?}	status.index	StatusController@index	status/index.blade.php
GET /layanan	layanan.index	LayananController@index	layanan/index.blade.php
GET /layanan/{id}	layanan.show	LayananController@show	layanan/show.blade.php

{status?} adalah parameter opsional. Contoh: /status/proses, /status/selesai, /status/diambil.

Struktur File
app/Http/Controllers/
├── Controller.php
├── LaundryController.php
├── StatusController.php
└── LayananController.php
resources/views/
├── laundry/   (index, show)
├── status/    (index)
└── layanan/   (index, show)
routes/web.php
