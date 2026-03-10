@extends('layouts.app')

@section('title', '404 - Halaman Tidak Ditemukan')

@section('content')
<div class="min-h-[80vh] bg-white flex items-center justify-center overflow-hidden relative">
    <!-- Background Decor -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] animate-float"></div>
    <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-secondary/5 rounded-full blur-3xl animate-bounce-slow"></div>
    
    <div class="max-w-2xl mx-auto px-4 text-center relative z-10">
        <!-- Error Code -->
        <div class="relative inline-block mb-8">
            <h1 class="text-[150px] md:text-[200px] font-black text-secondary/5 leading-none select-none italic">404</h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-32 h-32 md:w-40 md:h-40 bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 flex items-center justify-center rotate-12 animate-float">
                    <svg class="w-16 h-16 md:w-20 md:h-20 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Text Content -->
        <div class="space-y-4 animate-fade-up">
            <h2 class="text-3xl md:text-4xl font-black text-secondary italic tracking-tight uppercase">Oops! Kamu <span class="text-primary not-italic">Tersesat?</span></h2>
            <p class="text-secondary/50 font-medium max-w-md mx-auto leading-relaxed">
                Halaman yang kamu cari mungkin telah dipindahkan, dihapus, atau memang tidak pernah ada di labirin ilmu kami.
            </p>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-12 animate-fade-up" style="animation-delay: 100ms">
            <a href="{{ url('/') }}" class="w-full sm:w-auto px-10 py-4 bg-secondary text-white font-black text-[10px] uppercase tracking-[0.2em] rounded-2xl hover:bg-primary transition-all shadow-xl shadow-secondary/20 active:scale-95 flex items-center justify-center gap-3">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                Kembali ke Beranda
            </a>
            <a href="https://wa.me/6289515915699" class="w-full sm:w-auto px-10 py-4 bg-white text-secondary font-black text-[10px] uppercase tracking-[0.2em] rounded-2xl border border-gray-100 hover:bg-gray-50 transition-all active:scale-95 flex items-center justify-center gap-3">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                Hubungi Bantuan
            </a>
        </div>
    </div>
</div>

<style>
    @keyframes fade-up {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-up {
        animation: fade-up 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
</style>
@endsection
