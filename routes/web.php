<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/testimoni', function () {
    return view('landing.testimoni.index');
})->name('testimoni');

Route::get('/blog', function () {
    return view('landing.blog.index');
})->name('blog');

Route::get('/paket-belajar', function () {
    return view('landing.paket_belajar.index');
})->name('paket.index');

// Bisnis Routes
Route::get('/layanan-bisnis', function () {
    return view('landing.bisnis.layanan');
})->name('bisnis.layanan');

Route::get('/future-educators', function () {
    return view('landing.bisnis.educators');
})->name('bisnis.educators');

Route::get('/tentang-kami', function () {
    return view('landing.bisnis.tentang');
})->name('bisnis.tentang');
