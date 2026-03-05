@extends('layouts.app')

@section('title', 'Future Educators - Komunitas Guru OneLearning')

@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1">
                    <div class="inline-block px-4 py-2 bg-accent/20 text-secondary font-black text-xs uppercase tracking-widest rounded-lg mb-6">Untuk Para Pendidik</div>
                    <h1 class="text-4xl md:text-5xl font-black text-secondary mb-8 leading-tight">
                        Bergabung dalam Komunitas <span class="text-primary italic">Future Educators</span>
                    </h1>
                    <p class="text-lg text-secondary/60 mb-10 leading-relaxed font-medium">
                        Wadah kolaborasi bagi guru, dosen, dan praktisi pendidikan untuk berbagi soal, materi, dan strategi pembelajaran digital di era industri 4.0.
                    </p>
                    <ul class="space-y-4 mb-10 text-secondary/80 font-bold">
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Akses webinar eksklusif setiap bulan
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Program monetisasi konten soal
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Sertifikasi pengajar digital
                        </li>
                    </ul>
                    <a href="#" class="inline-block px-10 py-5 bg-secondary text-white font-black rounded-2xl hover:bg-primary transition-all shadow-xl">Daftar Komunitas</a>
                </div>
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary rounded-[3rem] rotate-3 opacity-10"></div>
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=800" class="relative z-10 rounded-[2.5rem] shadow-2xl" alt="Educators">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
