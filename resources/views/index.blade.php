@extends('layouts.app')

@section('title', $settings['site_title'] ?? 'OneLearning - Solusi Tryout Online Terakreditasi Nomor #1')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden">
        <!-- Modern Abstract Background -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-[10%] -right-[10%] w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute -bottom-[10%] -left-[10%] w-[500px] h-[500px] bg-accent/10 rounded-full blur-[100px]"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full opacity-[0.03]" 
                 style="background-image: radial-gradient(#1E3A8A 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12 xl:gap-20">
                
                <!-- Content (Left) -->
                <div class="flex-1 text-center lg:text-left order-2 lg:order-1 max-w-3xl">
                    <h1 class="text-5xl md:text-6xl xl:text-7xl font-black text-secondary leading-[1.05] tracking-tight mb-8">
                        @php
                            $heroTitle = $settings['hero_title'] ?? 'Raih Kampus Impianmu Sekarang.';
                            $titleParts = explode(' ', $heroTitle);
                            $lastWord = array_pop($titleParts);
                            $secondLastWord = array_pop($titleParts);
                            $mainTitle = implode(' ', $titleParts);
                        @endphp
                        {{ $mainTitle }} <br class="hidden sm:block">
                        <span class="relative inline-block italic text-primary">
                            {{ $secondLastWord }}
                            <svg class="absolute -bottom-2 left-0 w-full h-3 text-accent/40 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 25 0 50 5 T 100 5" stroke="currentColor" stroke-width="8" fill="none"/></svg>
                        </span> 
                        {{ $lastWord }}
                    </h1>
                    
                    <p class="text-lg md:text-xl text-secondary/60 mb-10 leading-relaxed font-medium max-w-xl mx-auto lg:mx-0">
                        {{ $settings['hero_subtitle'] ?? 'Platform simulasi tryout tercanggih dengan sistem IRT & Ranking Real-time. Persiapan matang untuk masa depan cerah.' }}
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-5 justify-center lg:justify-start">
                        <a href="{{ route('login') }}" class="w-full sm:w-auto px-10 py-5 bg-primary text-white font-extrabold rounded-2xl hover:bg-secondary shadow-[0_20px_50px_rgba(14,165,233,0.3)] hover:shadow-secondary/30 transition-all transform hover:-translate-y-1 active:scale-95 text-lg text-center">
                            {{ $settings['hero_cta_text'] ?? 'Mulai Tryout Gratis' }}
                        </a>
                        <a href="{{ route('paket.index') }}" class="w-full sm:w-auto px-10 py-5 bg-white border-2 border-secondary/10 text-secondary font-extrabold rounded-2xl hover:bg-secondary hover:text-white transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 text-lg group shadow-sm">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center group-hover:bg-white/20 transition-colors">
                                <svg class="w-4 h-4 text-primary group-hover:text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                            </div>
                            Katalog Program
                        </a>
                    </div>
                    
                    <div class="mt-14 pt-8 border-t border-secondary/5 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6">
                        <div class="flex -space-x-3">
                            <img class="w-12 h-12 rounded-2xl border-4 border-white shadow-xl object-cover" src="https://ui-avatars.com/api/?name=User+1&background=0EA5E9&color=fff" alt="User">
                            <img class="w-12 h-12 rounded-2xl border-4 border-white shadow-xl object-cover" src="https://ui-avatars.com/api/?name=User+2&background=1E3A8A&color=fff" alt="User">
                            <img class="w-12 h-12 rounded-2xl border-4 border-white shadow-xl object-cover" src="https://ui-avatars.com/api/?name=User+3&background=FBBF24&color=fff" alt="User">
                            <img class="w-12 h-12 rounded-2xl border-4 border-white shadow-xl object-cover" src="https://ui-avatars.com/api/?name=User+4&background=0EA5E9&color=fff" alt="User">
                        </div>
                        <div class="text-left">
                            <div class="flex items-center gap-1 mb-1">
                                @for($i=0; $i<5; $i++)
                                <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                                <span class="text-secondary font-black text-sm ml-1">4.9/5</span>
                            </div>
                            <p class="text-xs font-bold text-secondary/40 uppercase tracking-widest leading-none">Rating Siswa Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Visual (Right) -->
                <div class="flex-1 w-full order-1 lg:order-2 relative">
                    <div class="relative max-w-[500px] mx-auto lg:ml-auto group">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-transparent to-accent/20 rounded-[3rem] blur-3xl opacity-50 group-hover:opacity-80 transition-opacity"></div>
                        <div class="relative bg-white/40 backdrop-blur-2xl p-4 rounded-[3.5rem] shadow-[0_32px_64px_-12px_rgba(30,58,138,0.15)] border border-white/60 overflow-hidden">
                            <div class="aspect-[1/1] bg-secondary/5 rounded-[2.8rem] flex items-center justify-center overflow-hidden border border-secondary/5 relative">
                                <img src="{{ $settings['hero_image'] ?? 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1200' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="py-12 bg-white relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-secondary rounded-[3rem] p-12 shadow-2xl shadow-secondary/20 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full -mr-32 -mt-32 group-hover:scale-110 transition-transform duration-700"></div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10 text-center">
                    <div class="space-y-2">
                        <div class="text-5xl font-black text-white">{{ $settings['stats_students'] ?? '100.000+' }}</div>
                        <div class="text-sm font-bold text-primary uppercase tracking-[0.2em]">Siswa Aktif</div>
                    </div>
                    <div class="space-y-2 border-y md:border-y-0 md:border-x border-white/10 py-8 md:py-0">
                        <div class="text-5xl font-black text-white">{{ $settings['stats_passing_rate'] ?? '98%' }}</div>
                        <div class="text-sm font-bold text-primary uppercase tracking-[0.2em]">Tingkat Kelulusan</div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-5xl font-black text-white">{{ $settings['stats_total_tryouts'] ?? '1.500+' }}</div>
                        <div class="text-sm font-bold text-primary uppercase tracking-[0.2em]">Bank Soal</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-secondary tracking-tight">Pilih Program <span class="text-primary italic">Unggulan</span></h2>
                <p class="text-secondary/50 font-medium mt-4">Sesuaikan kebutuhan belajarmu dengan paket yang tepat.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($featuredProducts as $product)
                <div class="relative group rounded-[2.5rem] overflow-hidden aspect-[4/5] shadow-xl border border-gray-100">
                    <div class="absolute inset-0 bg-secondary/40 group-hover:bg-secondary/20 transition-colors duration-500 z-10"></div>
                    <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600' }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent z-20"></div>
                    <div class="absolute bottom-0 left-0 p-8 z-30 w-full text-left">
                        <span class="inline-block px-3 py-1 bg-accent text-secondary font-black text-[9px] uppercase tracking-widest rounded-lg mb-3">{{ $product->category }}</span>
                        <h3 class="text-white font-extrabold text-2xl mb-4 leading-tight">{{ $product->title }}</h3>
                        <div class="flex items-center gap-4 pt-4 border-t border-white/20">
                            <span class="text-[11px] text-white/80 font-bold flex items-center gap-1.5">{{ $product->package_count }} Paket</span>
                            <span class="text-[11px] text-white/80 font-bold flex items-center gap-1.5">{{ $product->duration }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-primary rounded-[4rem] p-16 relative overflow-hidden shadow-2xl">
                <div class="absolute inset-0 bg-secondary/10 mix-blend-overlay"></div>
                <div class="relative z-10">
                    <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                        {{ $settings['cta_bottom_title'] ?? 'Siap Jadi Bagian Dari Alumni Sukses Kami?' }}
                    </h2>
                    <p class="text-white/80 text-xl font-medium mb-12 max-w-2xl mx-auto leading-relaxed">
                        {{ $settings['cta_bottom_subtitle'] ?? 'Jangan tunda lagi masa depanmu. Mulai persiapan sekarang dan jadilah juara.' }}
                    </p>
                    <a href="{{ route('register') }}" class="px-12 py-6 bg-white text-primary font-black text-lg rounded-[2rem] hover:bg-secondary hover:text-white transition-all transform hover:scale-105 active:scale-95 shadow-2xl">
                        Mulai Sekarang - Gratis
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
