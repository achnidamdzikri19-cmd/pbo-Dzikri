<?php
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\StatusController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laundry', [LaundryController::class, 'index'])->name('laundry.index');
Route::get('/laundry/{id}', [LaundryController::class, 'show'])->name('laundry.show');
Route::get('/status/{status?}', [StatusController::class, 'index'])->name('status.index');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.show');