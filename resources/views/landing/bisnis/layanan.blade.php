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
    <section class="py-24 bg-white border-b border-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div>
                    <div class="w-20 h-20 bg-primary/10 rounded-3xl flex items-center justify-center mx-auto mb-8 text-primary">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H5a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4">Custom Branding</h3>
                    <p class="text-secondary/60 font-medium leading-relaxed">Gunakan logo dan warna sekolah Anda sendiri dalam sistem tryout kami untuk menjaga identitas sekolah.</p>
                </div>
                <div>
                    <div class="w-20 h-20 bg-accent/15 rounded-3xl flex items-center justify-center mx-auto mb-8 text-accent">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4">Laporan Kolektif</h3>
                    <p class="text-secondary/60 font-medium leading-relaxed">Dapatkan analisis mendalam perkembangan seluruh siswa secara kolektif dalam satu dashboard dashboard admin.</p>
                </div>
                <div>
                    <div class="w-20 h-20 bg-secondary/10 rounded-3xl flex items-center justify-center mx-auto mb-8 text-secondary">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4">Harga Kompetitif</h3>
                    <p class="text-secondary/60 font-medium leading-relaxed">Paket khusus B2B dengan harga yang jauh lebih hemat dan fleksibel sesuai dengan kebutuhan kuota sekolah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Business Services -->
    <section class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-secondary leading-tight">Pilih Program <span class="text-primary italic">Kemitraan</span></h2>
                <p class="text-secondary/50 font-medium mt-4">Sesuaikan kebutuhan institusi Anda dengan berbagai pilihan program kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($services as $service)
                <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500 group flex flex-col md:flex-row gap-8">
                    <div class="w-full md:w-48 h-48 rounded-[2rem] bg-gray-100 overflow-hidden flex-shrink-0">
                        @if($service->image)
                            <img src="{{ $service->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $service->title }}">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-primary font-black text-4xl">
                                {{ substr($service->title, 0, 1) }}
                            </div>
                        @endif
                    </div>
                    <div class="flex-1">
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-[10px] uppercase tracking-widest rounded-lg mb-4">{{ $service->category }}</span>
                        <h3 class="text-2xl font-black text-secondary mb-4 tracking-tight">{{ $service->title }}</h3>
                        <p class="text-secondary/60 text-sm font-medium leading-relaxed mb-6">
                            {{ $service->description }}
                        </p>
                        <a href="https://wa.me/your-number" class="inline-flex items-center gap-2 text-xs font-black text-primary uppercase tracking-widest hover:text-secondary transition-colors group-hover:gap-3 transition-all">
                            Konsultasi Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20 bg-white rounded-[3rem] border border-dashed border-gray-200">
                    <p class="text-secondary/30 font-bold italic">Belum ada program kemitraan yang tersedia saat ini.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
