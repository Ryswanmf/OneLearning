<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudyPackageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| OneLearning Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama Dinamis
Route::get('/', function () {
    $featuredProducts = \App\Models\Product::where('is_featured', true)->take(4)->get();
    $settings = \App\Models\Setting::pluck('value', 'key');
    return view('index', compact('featuredProducts', 'settings'));
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
    
    Route::get('/sd', function () { 
        return view('landing.produk.jenjang', ['title' => 'SD 4-6', 'level' => '4 - 6 SD']); 
    })->name('sd');
    
    Route::get('/smp', function () { 
        return view('landing.produk.jenjang', ['title' => 'SMP 7-9', 'level' => '7 - 9 SMP']); 
    })->name('smp');
    
    Route::get('/sma', function () { 
        return view('landing.produk.jenjang', ['title' => 'SMA 10-11', 'level' => '10 - 11 SMA']); 
    })->name('sma');
    
    Route::get('/sma-utbk', function () { 
        return view('landing.produk.jenjang', ['title' => 'SMA 12 & UTBK', 'level' => '12 SMA & UTBK']); 
    })->name('sma_utbk');
    
    Route::get('/alumni', function () { 
        return view('landing.produk.jenjang', ['title' => 'Alumni', 'level' => 'Alumni']); 
    })->name('alumni');
});

// Rute Bisnis
Route::prefix('bisnis')->name('bisnis.')->group(function () {
    Route::get('/layanan', function () { 
        $services = \App\Models\Business::where('category', 'Layanan Bisnis')->where('is_active', true)->get();
        return view('landing.bisnis.layanan', compact('services')); 
    })->name('layanan');
    Route::get('/future-educators', function () { 
        $programs = \App\Models\Business::where('category', 'Future Educators')->where('is_active', true)->get();
        return view('landing.bisnis.educators', compact('programs')); 
    })->name('educators');
    Route::get('/tentang-kami', function () { 
        $profiles = \App\Models\Business::where('category', 'Tentang Kami')->where('is_active', true)->get();
        return view('landing.bisnis.tentang', compact('profiles')); 
    })->name('tentang');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    
    Route::resource('produk', ProductController::class)->parameters(['produk' => 'produk:slug']);
    Route::resource('paket-belajar', StudyPackageController::class)->parameters(['paket-belajar' => 'paket_belajar:slug']);
    Route::resource('testimoni', TestimonialController::class);
    Route::resource('blog', BlogController::class)->parameters(['blog' => 'blog:slug']);
    Route::resource('bisnis', BusinessController::class)->parameters(['bisnis' => 'bisni:slug']);

    // Landing Page Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});

/*
|--------------------------------------------------------------------------
| Breeze & Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    if (Auth::user()->role === 'admin') { return redirect()->route('admin.index'); }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
