<?php

use App\Http\Controllers\{
    ProfileController, ProductController, StudyPackageController, TestimonialController,
    BlogController, BusinessServiceController, FutureEducatorController, AboutController,
    SettingController, SnbpMajorController, UtbkTryoutController, SdTryoutController,
    SmpTryoutController, SmaTryoutController, SmaUtbkTryoutController, AlumniTryoutController,
    PrivacyPolicyController, TermController, FaqController, HowToRegisterController,
    UserController, StudentDashboardController, QuestionController, TryoutEngineController,
    OrderController, AdminTransactionController, AdminBankSoalController,
    MidtransCallbackController, SnbpAnalysisController
};
use Illuminate\Support\Facades\{Route, Auth};
use App\Models\{Product, HowToRegister, Faq, PrivacyPolicy, Term, Setting, StudyPackage};

/*
|--------------------------------------------------------------------------
| 1. HALAMAN PUBLIK (LANDING PAGE)
|--------------------------------------------------------------------------
*/
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index']);

// Halaman Utama
Route::get('/', function () {
    $featuredProducts = Product::where('is_featured', true)->latest()->take(4)->get();

    // Optimasi: Cache hitungan data selama 2 jam
    $counts = \Illuminate\Support\Facades\Cache::remember('landing_page_counts', 7200, function() {
        return [
            'utbk' => \App\Models\UtbkTryout::where('status', 'published')->count(),
            'sd' => \App\Models\SdTryout::where('status', 'published')->count(),
            'smp' => \App\Models\SmpTryout::where('status', 'published')->count(),
            'sma' => \App\Models\SmaTryout::where('status', 'published')->count(),
            'sma_utbk' => \App\Models\SmaUtbkTryout::where('status', 'published')->count(),
            'alumni' => \App\Models\AlumniTryout::where('status', 'published')->count(),
        ];
    });

    $settings = Setting::pluck('value', 'key');
    return view('index', compact('featuredProducts', 'settings', 'counts'));
})->name('home');

// Bantuan & Hukum
Route::get('/cara-mendaftar', function () { $steps = HowToRegister::where('is_active', true)->orderBy('step_number')->get(); return view('landing.bantuan.caramendaftar', compact('steps')); })->name('how-to-register');
Route::get('/pusat-bantuan', function () { $faqs = Faq::where('is_active', true)->orderBy('category')->orderBy('order')->get(); return view('landing.bantuan.faq', compact('faqs')); })->name('faq');
Route::get('/kebijakan-privasi', function () { $policies = PrivacyPolicy::orderBy('order')->get(); return view('landing.bantuan.kebijakanprivasi', compact('policies')); })->name('privacy-policy');
Route::get('/syarat-ketentuan', function () { $terms = Term::orderBy('order')->get(); return view('landing.bantuan.syaratketentuan', compact('terms')); })->name('terms-conditions');

// Produk & Blog
Route::get('/testimoni', fn() => view('landing.testimoni.index'))->name('testimoni');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/paket-belajar', function () { 
    $packages = StudyPackage::where('is_active', true)->get();
    return view('landing.paket_belajar.index', compact('packages')); 
})->name('paket.index');

Route::prefix('produk')->group(function () {
    Route::get('/snbp', [SnbpAnalysisController::class, 'index'])->name('produk.snbp');
    Route::get('/snbp/majors', [SnbpAnalysisController::class, 'getMajors'])->name('produk.snbp.get-majors');
    Route::post('/snbp/analyze', [SnbpAnalysisController::class, 'analyze'])->name('produk.snbp.analyze');

    Route::get('/utbk', fn() => view('landing.produk.utbk', ['tryouts' => \App\Models\UtbkTryout::where('status', 'published')->get()]))->name('produk.utbk');
    Route::get('/sd', fn() => view('landing.produk.sd', ['title' => 'SD 4-6', 'level' => '4 - 6 SD', 'tryouts' => \App\Models\SdTryout::where('status', 'published')->get()]))->name('produk.sd');
    Route::get('/smp', fn() => view('landing.produk.smp', ['title' => 'SMP 7-9', 'level' => '7 - 9 SMP', 'tryouts' => \App\Models\SmpTryout::where('status', 'published')->get()]))->name('produk.smp');
    Route::get('/sma', fn() => view('landing.produk.sma', ['title' => 'SMA 10-11', 'level' => '10 - 11 SMA', 'tryouts' => \App\Models\SmaTryout::where('status', 'published')->get()]))->name('produk.sma');
    Route::get('/sma-utbk', fn() => view('landing.produk.sma', ['title' => 'SMA 12 & UTBK', 'level' => '12 SMA & UTBK', 'tryouts' => \App\Models\SmaUtbkTryout::where('status', 'published')->get()]))->name('produk.sma_utbk');
    Route::get('/alumni', fn() => view('landing.produk.alumni', ['title' => 'Alumni', 'level' => 'Alumni', 'tryouts' => \App\Models\AlumniTryout::where('status', 'published')->get()]))->name('produk.alumni');
});

Route::prefix('bisnis')->name('bisnis.')->group(function () {
    Route::get('/layanan', fn() => view('landing.bisnis.layanan', ['services' => \App\Models\BusinessService::where('is_active', true)->get()]))->name('layanan');
    Route::get('/future-educators', fn() => view('landing.bisnis.educators', ['programs' => \App\Models\FutureEducator::where('is_active', true)->get()]))->name('educators');
    Route::get('/tentang-kami', fn() => view('landing.bisnis.tentang', ['profiles' => \App\Models\About::where('is_active', true)->orderBy('order')->get()]))->name('tentang');
});

/*
|--------------------------------------------------------------------------
| 2. SISTEM PEMBAYARAN & CALLBACK
|--------------------------------------------------------------------------
*/
Route::post('/midtrans/callback', [MidtransCallbackController::class, 'handle'])->name('midtrans.callback');

/*
|--------------------------------------------------------------------------
| 3. AREA SISWA (AUTHENTICATED)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
    
    // Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Transaksi
    Route::middleware('auth')->prefix('order')->name('order.')->group(function () {
        Route::get('/checkout/{type}/{id}', [OrderController::class, 'checkout'])->name('checkout');
        Route::post('/checkout/{type}/{id}', [OrderController::class, 'store'])->name('store');
        Route::get('/payment/{reference_id}', [OrderController::class, 'payment'])->name('payment');
        Route::get('/history', [OrderController::class, 'history'])->name('history');
        Route::get('/check-status/{reference_id}', [OrderController::class, 'handleSuccess'])->name('handle-success');
    });

    // Tryout Engine
    Route::prefix('tryout')->name('tryout.')->group(function () {
        Route::get('/{type}/{id}/instruksi', [TryoutEngineController::class, 'showInstructions'])->name('instructions');
        Route::get('/{type}/{id}/start', [TryoutEngineController::class, 'start'])->name('start');
        Route::post('/{type}/{id}/save-answer', [TryoutEngineController::class, 'saveAnswer'])
            ->middleware('throttle:60,1') // Max 60 request per menit untuk simpan jawaban
            ->name('save-answer');
        Route::post('/{type}/{id}/finish', [TryoutEngineController::class, 'finish'])
            ->middleware('throttle:3,1') // Max 3 klik finish per menit
            ->name('finish');
        Route::get('/{type}/{id}/result', [TryoutEngineController::class, 'showResult'])->name('result');
        Route::get('/{type}/{id}/certificate', [TryoutEngineController::class, 'showCertificate'])->name('certificate');
    });
});

/*
|--------------------------------------------------------------------------
| 4. AREA ADMIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn() => view('admin.index'))->name('index');
    
    // Sumber Daya Utama
    Route::resource('users', UserController::class);
    Route::resource('transactions', AdminTransactionController::class)->only(['index', 'show', 'update']);
    Route::resource('produk', ProductController::class)->parameters(['produk' => 'produk:slug']);
    Route::resource('paket-belajar', StudyPackageController::class)->parameters(['paket-belajar' => 'paket_belajar:slug']);
    
    // Bank Soal & Pertanyaan
    Route::get('bank-soal', [AdminBankSoalController::class, 'index'])->name('bank-soal.index');
    Route::prefix('questions/{type}/{id}')->name('questions.')->group(function () {
        Route::get('/', [QuestionController::class, 'index'])->name('index');
        Route::get('/create', [QuestionController::class, 'create'])->name('create');
        Route::post('/', [QuestionController::class, 'store'])->name('store');
        Route::get('/{question}/edit', [QuestionController::class, 'edit'])->name('edit');
        Route::put('/{question}', [QuestionController::class, 'update'])->name('update');
        Route::delete('/{question}', [QuestionController::class, 'destroy'])->name('destroy');
        Route::post('/import', [QuestionController::class, 'import'])->name('import');
    });

    // Konten & CMS
    Route::resource('testimoni', TestimonialController::class);
    Route::get('/blog-admin', [BlogController::class, 'adminIndex'])->name('blog.index'); // Fixed name collision
    Route::resource('blog', BlogController::class)->except(['index', 'show'])->parameters(['blog' => 'blog:slug']);
    Route::resource('layanan-bisnis', BusinessServiceController::class);
    Route::resource('future-educators', FutureEducatorController::class);
    Route::resource('tentang-kami', AboutController::class);
    Route::resource('snbp', SnbpMajorController::class);
    
    // Manajemen Tryout
    Route::resource('utbk', UtbkTryoutController::class);
    Route::resource('sd', SdTryoutController::class);
    Route::resource('smp', SmpTryoutController::class);
    Route::resource('sma', SmaTryoutController::class);
    Route::resource('sma-utbk', SmaUtbkTryoutController::class);
    Route::resource('alumni', AlumniTryoutController::class);
    
    // Sistem & Legal
    Route::resource('privacy-policy', PrivacyPolicyController::class);
    Route::resource('terms', TermController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('how-to-register', HowToRegisterController::class);
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});

require __DIR__.'/auth.php';
