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

// Produk Routes
Route::get('/produk/analisis-snbp', function () {
    return view('landing.produk.snbp');
})->name('produk.snbp');

Route::get('/produk/tryout-utbk', function () {
    return view('landing.produk.utbk');
})->name('produk.utbk');

Route::get('/produk/sd', function () {
    return view('landing.produk.jenjang', ['title' => 'SD (Kelas 4-6)', 'level' => 'SD Kelas 4 - 6']);
})->name('produk.sd');

Route::get('/produk/smp', function () {
    return view('landing.produk.jenjang', ['title' => 'SMP (Kelas 7-9)', 'level' => 'SMP Kelas 7 - 9']);
})->name('produk.smp');

Route::get('/produk/sma', function () {
    return view('landing.produk.jenjang', ['title' => 'SMA (Kelas 10-11)', 'level' => 'SMA Kelas 10 - 11']);
})->name('produk.sma');

Route::get('/produk/sma-utbk', function () {
    return view('landing.produk.jenjang', ['title' => 'SMA Kelas 12 & UTBK', 'level' => 'SMA Kelas 12 & UTBK']);
})->name('produk.sma_utbk');

Route::get('/produk/alumni', function () {
    return view('landing.produk.jenjang', ['title' => 'Alumni / Gap Year', 'level' => 'Alumni & Gap Year']);
})->name('produk.alumni');

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
