<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing');
// });

Route::get('/ajukan-sewa', function () {
    return view('form-pengajuan');
});


// Route::get('/katalog-perangkat', function () {
//     return view('katalog-perangkat');
// });

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/katalog-perangkat', [DeviceController::class, 'index'])->name('katalog_perangkat');