@extends('layouts.app')

@section('title', 'Layanan Bisnis & Kemitraan - OneLearning')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-20 overflow-hidden bg-secondary text-white text-center">
        <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                Solusi Digital Untuk <br> <span class="text-primary italic">Institusi & Sekolah</span>
            </h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto font-medium mb-10">
                Tingkatkan standar kelulusan institusi Anda dengan sistem tryout berbasis teknologi IRT yang telah teruji.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="px-10 py-4 bg-primary text-white font-black rounded-full hover:bg-white hover:text-primary transition-all shadow-xl">Ajukan Proposal</a>
                <a href="#" class="px-10 py-4 border-2 border-white/20 text-white font-black rounded-full hover:bg-white/10 transition-all">Download Katalog</a>
            </div>
        </div>
    </section>

    <!-- Partner Benefits -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div>
                    <div class="w-20 h-20 bg-primary/10 rounded-3xl flex items-center justify-center mx-auto mb-8 text-primary">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H5a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4">Custom Branding</h3>
                    <p class="text-secondary/60 font-medium">Gunakan logo dan warna sekolah Anda sendiri dalam sistem tryout kami.</p>
                </div>
                <div>
                    <div class="w-20 h-20 bg-accent/15 rounded-3xl flex items-center justify-center mx-auto mb-8 text-accent">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4">Laporan Kolektif</h3>
                    <p class="text-secondary/60 font-medium">Dapatkan analisis mendalam perkembangan seluruh siswa dalam satu dashboard.</p>
                </div>
                <div>
                    <div class="w-20 h-20 bg-secondary/10 rounded-3xl flex items-center justify-center mx-auto mb-8 text-secondary">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4">Harga Kompetitif</h3>
                    <p class="text-secondary/60 font-medium">Paket khusus B2B dengan harga yang jauh lebih hemat untuk kuota besar.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
