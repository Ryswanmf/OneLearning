<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| OneLearning Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', function () {
    return view('index');
});

// Rute Landing Pages
Route::get('/testimoni', function () {
    return view('landing.testimoni.index');
})->name('testimoni');

Route::get('/blog', function () {
    return view('landing.blog.index');
})->name('blog');

Route::get('/paket-belajar', function () {
    return view('landing.paket_belajar.index');
})->name('paket.index');

// Rute Produk
Route::prefix('produk')->name('produk.')->group(function () {
    Route::get('/snbp', function () { return view('landing.produk.snbp'); })->name('snbp');
    Route::get('/utbk', function () { return view('landing.produk.utbk'); })->name('utbk');
    Route::get('/sd', function () { return view('landing.produk.jenjang'); })->name('sd');
    Route::get('/smp', function () { return view('landing.produk.jenjang'); })->name('smp');
    Route::get('/sma', function () { return view('landing.produk.jenjang'); })->name('sma');
    Route::get('/sma-utbk', function () { return view('landing.produk.jenjang'); })->name('sma_utbk');
    Route::get('/alumni', function () { return view('landing.produk.jenjang'); })->name('alumni');
});

// Rute Bisnis
Route::prefix('bisnis')->name('bisnis.')->group(function () {
    Route::get('/layanan', function () { return view('landing.bisnis.layanan'); })->name('layanan');
    Route::get('/future-educators', function () { return view('landing.bisnis.educators'); })->name('educators');
    Route::get('/tentang-kami', function () { return view('landing.bisnis.tentang'); })->name('tentang');
});

/*
|--------------------------------------------------------------------------
| Breeze & Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
