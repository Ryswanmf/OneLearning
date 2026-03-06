<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudyPackageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusinessServiceController;
use App\Http\Controllers\FutureEducatorController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SnbpMajorController;
use App\Http\Controllers\UtbkTryoutController;
use App\Http\Controllers\SdTryoutController;
use App\Http\Controllers\SmpTryoutController;
use App\Http\Controllers\SmaTryoutController;
use App\Http\Controllers\SmaUtbkTryoutController;
use App\Http\Controllers\AlumniTryoutController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HowToRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TryoutEngineController;
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
    $counts = [
        'utbk' => \App\Models\UtbkTryout::where('status', 'published')->count(),
        'sd' => \App\Models\SdTryout::where('status', 'published')->count(),
        'smp' => \App\Models\SmpTryout::where('status', 'published')->count(),
        'sma' => \App\Models\SmaTryout::where('status', 'published')->count(),
        'sma_utbk' => \App\Models\SmaUtbkTryout::where('status', 'published')->count(),
        'alumni' => \App\Models\AlumniTryout::where('status', 'published')->count(),
    ];
    $settings = \App\Models\Setting::pluck('value', 'key');
    return view('index', compact('featuredProducts', 'settings', 'counts'));
});

// Bantuan & Hukum
Route::get('/cara-mendaftar', function () { $steps = \App\Models\HowToRegister::where('is_active', true)->orderBy('step_number')->get(); return view('landing.bantuan.caramendaftar', compact('steps')); })->name('how-to-register');
Route::get('/pusat-bantuan', function () { $faqs = \App\Models\Faq::where('is_active', true)->orderBy('category')->orderBy('order')->get(); return view('landing.bantuan.faq', compact('faqs')); })->name('faq');
Route::get('/kebijakan-privasi', function () { $policies = \App\Models\PrivacyPolicy::orderBy('order')->get(); return view('landing.bantuan.kebijakanprivasi', compact('policies')); })->name('privacy-policy');
Route::get('/syarat-ketentuan', function () { $terms = \App\Models\Term::orderBy('order')->get(); return view('landing.bantuan.syaratketentuan', compact('terms')); })->name('terms-conditions');

// Rute Tryout Engine
Route::middleware(['auth'])->prefix('tryout')->name('tryout.')->group(function () {
    Route::get('/{paket_belajar:slug}/instruksi', [TryoutEngineController::class, 'showInstructions'])->name('instructions');
    Route::get('/{paket_belajar:slug}/start', [TryoutEngineController::class, 'start'])->name('start');
    Route::post('/{paket_belajar:slug}/save-answer', [TryoutEngineController::class, 'saveAnswer'])->name('save-answer');
    Route::post('/{paket_belajar:slug}/finish', [TryoutEngineController::class, 'finish'])->name('finish');
    Route::get('/{paket_belajar:slug}/result', [TryoutEngineController::class, 'showResult'])->name('result');
});

// Rute Landing Pages
Route::get('/testimoni', function () { return view('landing.testimoni.index'); })->name('testimoni');
Route::get('/blog', function () { return view('landing.blog.index'); })->name('blog');
Route::get('/paket-belajar', function () { return view('landing.paket_belajar.index'); })->name('paket.index');

// Rute Produk
Route::prefix('produk')->name('produk.')->group(function () {
    Route::get('/snbp', function () { $universities = \App\Models\SnbpMajor::select('university_name')->distinct()->where('is_active', true)->get(); return view('landing.produk.snbp', compact('universities')); })->name('snbp');
    Route::get('/utbk', function () { $tryouts = \App\Models\UtbkTryout::where('status', 'published')->get(); return view('landing.produk.utbk', compact('tryouts')); })->name('utbk');
    Route::get('/sd', function () { $tryouts = \App\Models\SdTryout::where('status', 'published')->get(); return view('landing.produk.sd', ['title' => 'SD 4-6', 'level' => '4 - 6 SD', 'tryouts' => $tryouts]); })->name('sd');
    Route::get('/smp', function () { $tryouts = \App\Models\SmpTryout::where('status', 'published')->get(); return view('landing.produk.smp', ['title' => 'SMP 7-9', 'level' => '7 - 9 SMP', 'tryouts' => $tryouts]); })->name('smp');
    Route::get('/sma', function () { $tryouts = \App\Models\SmaTryout::where('status', 'published')->get(); return view('landing.produk.sma', ['title' => 'SMA 10-11', 'level' => '10 - 11 SMA', 'tryouts' => $tryouts]); })->name('sma');
    Route::get('/sma-utbk', function () { $tryouts = \App\Models\SmaUtbkTryout::where('status', 'published')->get(); return view('landing.produk.sma', ['title' => 'SMA 12 & UTBK', 'level' => '12 SMA & UTBK', 'tryouts' => $tryouts]); })->name('sma_utbk');
    Route::get('/alumni', function () { $tryouts = \App\Models\AlumniTryout::where('status', 'published')->get(); return view('landing.produk.alumni', ['title' => 'Alumni', 'level' => 'Alumni', 'tryouts' => $tryouts]); })->name('alumni');
});

// Rute Bisnis (Perbaikan Error)
Route::prefix('bisnis')->name('bisnis.')->group(function () {
    Route::get('/layanan', function () { 
        $services = \App\Models\BusinessService::where('is_active', true)->get(); 
        return view('landing.bisnis.layanan', compact('services')); 
    })->name('layanan');
    
    Route::get('/future-educators', function () { 
        $programs = \App\Models\FutureEducator::where('is_active', true)->get(); 
        return view('landing.bisnis.educators', compact('programs')); 
    })->name('educators');
    
    Route::get('/tentang-kami', function () { 
        $profiles = \App\Models\About::where('is_active', true)->orderBy('order')->get(); 
        return view('landing.bisnis.tentang', compact('profiles')); 
    })->name('tentang');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () { return view('admin.index'); })->name('index');
    Route::resource('users', UserController::class);
    Route::resource('produk', ProductController::class)->parameters(['produk' => 'produk:slug']);
    Route::resource('paket-belajar', StudyPackageController::class)->parameters(['paket-belajar' => 'paket_belajar:slug']);
    Route::resource('paket-belajar.questions', QuestionController::class)->parameters(['paket-belajar' => 'paket_belajar:slug', 'questions' => 'question']);
    Route::resource('testimoni', TestimonialController::class);
    Route::resource('blog', BlogController::class)->parameters(['blog' => 'blog:slug']);
    Route::resource('layanan-bisnis', BusinessServiceController::class);
    Route::resource('future-educators', FutureEducatorController::class);
    Route::resource('tentang-kami', AboutController::class);
    Route::resource('snbp', SnbpMajorController::class);
    Route::resource('utbk', UtbkTryoutController::class);
    Route::resource('sd', SdTryoutController::class);
    Route::resource('smp', SmpTryoutController::class);
    Route::resource('sma', SmaTryoutController::class);
    Route::resource('sma-utbk', SmaUtbkTryoutController::class);
    Route::resource('alumni', AlumniTryoutController::class);
    Route::resource('privacy-policy', PrivacyPolicyController::class);
    Route::resource('terms', TermController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('how-to-register', HowToRegisterController::class);
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});

/*
|--------------------------------------------------------------------------
| Dashboard & Profile
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [StudentDashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
