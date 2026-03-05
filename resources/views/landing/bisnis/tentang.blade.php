@extends('layouts.app')

@section('title', 'Tentang Kami - PT One Learning Indonesia')

@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-secondary mb-12">Tentang <span class="text-primary">OneLearning</span></h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center text-left">
                <div>
                    <img src="{{ asset('images/logo.png') }}" class="w-48 mb-8" alt="Logo">
                    <h2 class="text-2xl font-black text-secondary mb-6">Visi Kami</h2>
                    <p class="text-secondary/60 text-lg leading-relaxed font-medium mb-8">
                        Menjadi platform simulasi pendidikan nomor satu di Indonesia yang mendemokratisasi akses pendidikan berkualitas bagi seluruh putra-putri bangsa.
                    </p>
                    <h2 class="text-2xl font-black text-secondary mb-6">Misi Kami</h2>
                    <p class="text-secondary/60 text-lg leading-relaxed font-medium">
                        Mengembangkan teknologi penilaian edukasi tercanggih dan menyediakan konten kurikulum yang paling akurat sesuai standar nasional.
                    </p>
                </div>
                <div class="bg-gray-50 p-10 rounded-[3rem] border border-gray-100 shadow-sm">
                    <h3 class="text-xl font-black text-secondary mb-6">PT One Learning Indonesia</h3>
                    <div class="space-y-6 text-secondary/70 font-medium">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <p>Gedung Menara Edukasi Lt. 12, Kuningan, Jakarta Selatan</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <p>contact@onelearning.id</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <p>Jam Kerja: Senin - Jumat (09:00 - 17:00)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
