<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/ajukan-sewa', function () {
    return view('form-pengajuan');
});


Route::get('/katalog-perangkat', function () {
    return view('katalog-perangkat');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});