@extends('layouts.app')

@section('title', 'Pilihan Paket Belajar - OneLearning')

@section('content')
    <!-- Hero Section Paket -->
    <section class="relative pt-16 pb-12 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6 tracking-tight">
                Pilih Paket <span class="text-primary italic">Terbaikmu</span>
            </h1>
            <p class="text-lg text-secondary/60 max-w-2xl mx-auto font-medium mb-10">
                Investasi terbaik untuk masa depanmu. Pilih paket simulasi yang sesuai dengan kebutuhan target ujianmu.
            </p>
            
            <!-- Toggle Annual/Monthly (UI Only) -->
            <div class="flex items-center justify-center gap-4 mb-12">
                <span class="text-sm font-bold text-secondary">Sekali Bayar</span>
                <button class="w-14 h-7 bg-primary/20 rounded-full relative p-1 transition-all">
                    <div class="w-5 h-5 bg-primary rounded-full shadow-sm"></div>
                </button>
                <span class="text-sm font-bold text-secondary/40">Berlangganan</span>
            </div>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="py-12 pb-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Paket Basic -->
                <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 relative flex flex-col group">
                    <div class="mb-8">
                        <h3 class="text-xl font-black text-secondary mb-2">Paket Pemula</h3>
                        <p class="text-xs text-secondary/40 font-bold uppercase tracking-widest">Cocok untuk Cek Ombak</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-4xl font-black text-secondary italic">Rp 49.000</span>
                        <span class="text-sm font-bold text-secondary/40">/paket</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/70">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            1x Simulasi Tryout Utama
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/70">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Sistem Penilaian IRT
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/70">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Ranking Nasional
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/30">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                            Pembahasan Video
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-4 bg-gray-50 text-secondary font-black rounded-2xl group-hover:bg-primary group-hover:text-white transition-all shadow-sm">Pilih Paket</a>
                </div>

                <!-- Paket Recommended -->
                <div class="bg-secondary p-10 rounded-[3rem] shadow-2xl shadow-primary/20 relative flex flex-col transform md:scale-110 z-10">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 px-6 py-2 bg-accent text-secondary font-black text-[10px] uppercase tracking-widest rounded-full shadow-lg">Paling Populer</div>
                    <div class="mb-8">
                        <h3 class="text-xl font-black text-white mb-2">Paket Intensif</h3>
                        <p class="text-xs text-white/40 font-bold uppercase tracking-widest">Persiapan Maksimal</p>
                    </div>
                    <div class="mb-8 text-white">
                        <span class="text-4xl font-black italic text-accent">Rp 199.000</span>
                        <span class="text-sm font-bold text-white/40">/akses 1 thn</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold text-white/80">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            12x Simulasi Berkala
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-white/80">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Ranking Nasional Real-time
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-white/80">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Pembahasan Video & PDF
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-white/80">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Analisis Peluang Lolos
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-5 bg-primary text-white font-black rounded-2xl hover:bg-accent hover:text-secondary transition-all shadow-xl shadow-primary/30">Beli Paket Intensif</a>
                </div>

                <!-- Paket Premium -->
                <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 relative flex flex-col group">
                    <div class="mb-8">
                        <h3 class="text-xl font-black text-secondary mb-2">Paket Ultimate</h3>
                        <p class="text-xs text-secondary/40 font-bold uppercase tracking-widest">Semua Fitur Terbuka</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-4xl font-black text-secondary italic">Rp 349.000</span>
                        <span class="text-sm font-bold text-secondary/40">/akses 1 thn</span>
                    </div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/70">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Simulasi Tak Terbatas
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/70">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Konsultasi via Zoom
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/70">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Grup Belajar Eksklusif
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-secondary/70">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Materi Video Replay
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-4 bg-gray-50 text-secondary font-black rounded-2xl group-hover:bg-primary group-hover:text-white transition-all shadow-sm">Pilih Paket</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Preview -->
    <section class="py-24 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-black text-secondary mb-12">Punya Pertanyaan?</h2>
            <div class="space-y-4 text-left" x-data="{ active: null }">
                <div class="border border-gray-100 rounded-2xl p-6">
                    <button @click="active = (active === 1 ? null : 1)" class="w-full flex items-center justify-between font-bold text-secondary">
                        Apakah bisa pindah paket setelah membeli?
                        <svg class="w-5 h-5 transition-transform" :class="active === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 1" class="mt-4 text-sm text-secondary/60 font-medium">
                        Ya, Anda bisa melakukan upgrade paket kapan saja dengan hanya membayar selisih harganya.
                    </div>
                </div>
                <div class="border border-gray-100 rounded-2xl p-6">
                    <button @click="active = (active === 2 ? null : 2)" class="w-full flex items-center justify-between font-bold text-secondary">
                        Bagaimana metode pembayarannya?
                        <svg class="w-5 h-5 transition-transform" :class="active === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="active === 2" class="mt-4 text-sm text-secondary/60 font-medium">
                        Kami mendukung pembayaran via Transfer Bank, E-Wallet (Dana, OVO, ShopeePay), dan Alfamart/Indomaret.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
