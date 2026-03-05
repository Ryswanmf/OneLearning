@extends('layouts.app')

@section('title', 'OneLearning - Solusi Tryout Online Terakreditasi Nomor #1')

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
                        Raih Kampus <br class="hidden sm:block">
                        <span class="relative inline-block italic text-primary">
                            Impianmu
                            <svg class="absolute -bottom-2 left-0 w-full h-3 text-accent/40 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 25 0 50 5 T 100 5" stroke="currentColor" stroke-width="8" fill="none"/></svg>
                        </span> 
                        Sekarang.
                    </h1>
                    
                    <p class="text-lg md:text-xl text-secondary/60 mb-10 leading-relaxed font-medium max-w-xl mx-auto lg:mx-0">
                        Platform simulasi tryout tercanggih dengan sistem <span class="text-secondary font-bold underline decoration-primary decoration-2 underline-offset-4">IRT & Ranking Real-time</span>. Persiapan matang untuk masa depan cerah.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-5 justify-center lg:justify-start">
                        <a href="{{ route('login') }}" class="w-full sm:w-auto px-10 py-5 bg-primary text-white font-extrabold rounded-2xl hover:bg-secondary shadow-[0_20px_50px_rgba(14,165,233,0.3)] hover:shadow-secondary/30 transition-all transform hover:-translate-y-1 active:scale-95 text-lg text-center">
                            Mulai Tryout Gratis
                        </a>
                        <a href="#" class="w-full sm:w-auto px-10 py-5 bg-white border-2 border-secondary/10 text-secondary font-extrabold rounded-2xl hover:bg-secondary hover:text-white transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 text-lg group shadow-sm">
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
                                <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-secondary font-black text-sm ml-1">4.9/5</span>
                            </div>
                            <p class="text-xs font-bold text-secondary/40 uppercase tracking-widest leading-none">Rating Siswa Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Visual (Right) -->
                <div class="flex-1 w-full order-1 lg:order-2 relative">
                    <div class="relative max-w-[500px] mx-auto lg:ml-auto group">
                        <!-- Premium Card Effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-transparent to-accent/20 rounded-[3rem] blur-3xl opacity-50 group-hover:opacity-80 transition-opacity"></div>
                        
                        <div class="relative bg-white/40 backdrop-blur-2xl p-4 rounded-[3.5rem] shadow-[0_32px_64px_-12px_rgba(30,58,138,0.15)] border border-white/60 overflow-hidden">
                            <div class="aspect-[1/1] bg-secondary/5 rounded-[2.8rem] flex items-center justify-center overflow-hidden border border-secondary/5 relative">
                                <div class="absolute inset-0 opacity-[0.05]" style="background-image: linear-gradient(#1E3A8A 1px, transparent 1px), linear-gradient(90deg, #1E3A8A 1px, transparent 1px); background-size: 20px 20px;"></div>
                                <div class="text-center p-10 relative z-10 transition-transform duration-700 group-hover:scale-105">
                                    <div class="w-20 h-20 bg-primary rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-2xl shadow-primary/40 rotate-3 group-hover:rotate-12 transition-transform text-white">
                                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                                    </div>
                                    <h4 class="text-xl font-black text-secondary mb-2 italic">Your Future Success</h4>
                                    <p class="text-xs text-secondary/40 font-bold uppercase tracking-widest">Main Hero Visual Area</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Micro-Cards -->
                        <div class="absolute -top-6 -right-6 bg-white p-4 rounded-2xl shadow-2xl border border-gray-50 animate-float hidden sm:block">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center text-white shadow-lg shadow-green-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div>
                                    <div class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Status Lulus</div>
                                    <div class="text-sm font-black text-secondary italic">Target Tercapai!</div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-10 -left-6 bg-secondary p-5 rounded-[2rem] shadow-2xl animate-bounce-slow max-w-[180px] hidden sm:block">
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between items-end">
                                    <div class="text-accent text-3xl font-black italic">850</div>
                                    <div class="text-[10px] text-white/40 font-bold mb-1">SKOR IRT</div>
                                </div>
                                <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-accent h-full w-[85%] rounded-full"></div>
                                </div>
                                <div class="text-[9px] text-white/60 font-medium">Top 1% Nasional</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: Fitur Unggulan -->
    <section class="py-20 bg-gray-50/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Keunggulan Sistem</div>
                <h2 class="text-3xl md:text-5xl font-black text-secondary tracking-tight">Lebih Dari Sekedar Latihan Soal</h2>
                <p class="text-secondary/60 mt-4 font-medium max-w-2xl mx-auto">Sistem simulasi modern yang dirancang khusus untuk memberikan pengalaman ujian yang paling akurat.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-primary/5 transition-all group hover:-translate-y-2">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300 text-primary">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-secondary mb-3 group-hover:text-primary transition-colors">Penilaian IRT</h3>
                    <p class="text-sm text-secondary/60 leading-relaxed font-medium">Sistem penilaian Item Response Theory seperti standar UTBK asli untuk akurasi skor maksimal.</p>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-primary/5 transition-all group hover:-translate-y-2">
                    <div class="w-14 h-14 bg-accent/15 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-accent group-hover:text-secondary transition-all duration-300 text-accent">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-secondary mb-3 group-hover:text-primary transition-colors">Ranking Nasional</h3>
                    <p class="text-sm text-secondary/60 leading-relaxed font-medium">Pantau posisimu secara real-time di antara ribuan pejuang masa depan lainnya di seluruh Indonesia.</p>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-primary/5 transition-all group hover:-translate-y-2">
                    <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white transition-all duration-300 text-secondary">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-secondary mb-3 group-hover:text-primary transition-colors">Pembahasan Video</h3>
                    <p class="text-sm text-secondary/60 leading-relaxed font-medium">Tak hanya kunci jawaban, setiap soal dilengkapi pembahasan video dan PDF mendalam.</p>
                </div>

                <!-- Feature Card 4 -->
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-primary/5 transition-all group hover:-translate-y-2">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300 text-primary">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-secondary mb-3 group-hover:text-primary transition-colors">Analisis Peluang</h3>
                    <p class="text-sm text-secondary/60 leading-relaxed font-medium">Dapatkan rekomendasi jurusan atau instansi berdasarkan hasil skor tryout terbarumu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Kategori Tryout -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6 text-center md:text-left">
                <div>
                    <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Pilih Targetmu</div>
                    <h2 class="text-3xl md:text-5xl font-black text-secondary tracking-tight">Kategori Tryout Terpopuler</h2>
                    <p class="text-secondary/60 mt-4 font-medium text-lg">Mulai langkah pertamamu dengan simulasi yang tepat sasaran.</p>
                </div>
                <a href="#" class="inline-flex items-center justify-center gap-2 text-sm font-black text-primary hover:text-secondary transition-all group">
                    Lihat Semua Kategori 
                    <svg class="w-5 h-5 group-hover:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($featuredProducts as $product)
                <!-- Dynamic Product -->
                <div class="relative group rounded-[2.5rem] overflow-hidden aspect-[4/5] shadow-xl border border-gray-100">
                    <div class="absolute inset-0 bg-secondary/40 group-hover:bg-secondary/20 transition-colors duration-500 z-10"></div>
                    <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600' }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $product->title }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent z-20"></div>
                    <div class="absolute bottom-0 left-0 p-8 z-30 w-full text-left">
                        <span class="inline-block px-3 py-1 bg-accent text-secondary font-black text-[9px] uppercase tracking-widest rounded-lg mb-3">{{ $product->category }}</span>
                        <h3 class="text-white font-extrabold text-2xl mb-4 leading-tight">{{ $product->title }}</h3>
                        <div class="flex items-center gap-4 pt-4 border-t border-white/20">
                            <span class="text-[11px] text-white/80 font-bold flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg> {{ $product->package_count }} Paket</span>
                            <span class="text-[11px] text-white/80 font-bold flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> {{ $product->duration }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 3: Testimoni Alumni -->
    <section class="py-24 bg-secondary/5 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <div class="mb-16">
                <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Kisah Sukses</div>
                <h2 class="text-3xl md:text-5xl font-black text-secondary tracking-tight">Mereka Telah Membuktikan</h2>
                <p class="text-secondary/60 mt-4 font-medium max-w-2xl mx-auto">Bergabunglah dengan ribuan alumni yang telah berhasil meraih mimpi mereka bersama sistem tryout kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testi 1 -->
                <div class="bg-white p-10 rounded-[3rem] shadow-sm border border-gray-100 relative group hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500 text-left">
                    <div class="absolute -top-5 left-10 w-12 h-12 bg-accent rounded-full flex items-center justify-center text-secondary shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.827c.097-.312.424-.51.748-.445l.135.034a.75.75 0 0 1 .553.868l-.403 1.848a2.99 2.99 0 0 0-.256-.03l-.135-.03a.75.75 0 0 1-.553-.868l.403-1.848Z"/></svg>
                    </div>
                    <p class="text-secondary/70 italic leading-relaxed mb-8 text-lg">"Sistem IRT di OneLearning benar-benar mirip dengan UTBK asli. Ranking nasionalnya bikin motivasi belajar naik terus setiap hari!"</p>
                    <div class="flex items-center gap-4 pt-8 border-t border-gray-50">
                        <img src="https://ui-avatars.com/api/?name=Rina+Putri&background=0EA5E9&color=fff" class="w-14 h-14 rounded-2xl border-2 border-primary/20" alt="Alumni">
                        <div>
                            <div class="font-black text-secondary">Rina Putri</div>
                            <div class="text-[10px] text-primary font-bold uppercase tracking-wider">Lolos Akuntansi UI</div>
                        </div>
                    </div>
                </div>
                <!-- Testi 2 -->
                <div class="bg-white p-10 rounded-[3rem] shadow-2xl border border-gray-100 relative group hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500 transform md:scale-105 z-10 text-left">
                    <div class="absolute -top-5 left-10 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white shadow-lg shadow-primary/30">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 12h3v9h6v-6h4v6h6v-9h3L12 2z"/></svg>
                    </div>
                    <p class="text-secondary/70 italic leading-relaxed mb-8 text-lg">"Soal-soal CPNS di sini update banget dan pembahasannya super gampang dimengerti. Gak nyesel langganan di OneLearning!"</p>
                    <div class="flex items-center gap-4 pt-8 border-t border-gray-50">
                        <img src="https://ui-avatars.com/api/?name=Andi+Saputra&background=1E3A8A&color=fff" class="w-14 h-14 rounded-2xl border-2 border-primary/20" alt="Alumni">
                        <div>
                            <div class="font-black text-secondary">Andi Saputra</div>
                            <div class="text-[10px] text-primary font-bold uppercase tracking-wider">Lolos Kemenkeu</div>
                        </div>
                    </div>
                </div>
                <!-- Testi 3 -->
                <div class="bg-white p-10 rounded-[3rem] shadow-sm border border-gray-100 relative group hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500 text-left">
                    <div class="absolute -top-5 left-10 w-12 h-12 bg-accent rounded-full flex items-center justify-center text-secondary shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.827c.097-.312.424-.51.748-.445l.135.034a.75.75 0 0 1 .553.868l-.403 1.848a2.99 2.99 0 0 0-.256-.03l-.135-.03a.75.75 0 0 1-.553-.868l.403-1.848Z"/></svg>
                    </div>
                    <p class="text-secondary/70 italic leading-relaxed mb-8 text-lg">"Fitur analisis peluang kelulusannya akurat banget. Saya jadi tau harus fokus belajar di materi mana yang masih lemah."</p>
                    <div class="flex items-center gap-4 pt-8 border-t border-gray-50">
                        <img src="https://ui-avatars.com/api/?name=Siti+Aminah&background=FBBF24&color=fff" class="w-14 h-14 rounded-2xl border-2 border-primary/20" alt="Alumni">
                        <div>
                            <div class="font-black text-secondary">Siti Aminah</div>
                            <div class="text-[10px] text-primary font-bold uppercase tracking-wider">Lolos STIS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Alur Belajar -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-20">
                <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Langkah Mudah</div>
                <h2 class="text-3xl md:text-5xl font-black text-secondary tracking-tight">Cara Kerja OneLearning</h2>
            </div>

            <div class="relative">
                <div class="hidden lg:block absolute top-14 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent -z-10"></div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-10">
                    <!-- Step 1 -->
                    <div class="text-center group">
                        <div class="w-24 h-24 bg-white border-8 border-gray-50 rounded-[2.5rem] flex items-center justify-center mx-auto mb-8 shadow-xl group-hover:bg-primary group-hover:text-white group-hover:border-primary/10 transition-all duration-500">
                            <span class="text-3xl font-black text-secondary group-hover:text-white">01</span>
                        </div>
                        <h3 class="text-xl font-extrabold text-secondary mb-3">Pilih Paket</h3>
                        <p class="text-sm text-secondary/60 font-medium leading-relaxed">Temukan paket tryout yang sesuai dengan target impianmu.</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="text-center group">
                        <div class="w-24 h-24 bg-white border-8 border-gray-50 rounded-[2.5rem] flex items-center justify-center mx-auto mb-8 shadow-xl group-hover:bg-primary group-hover:text-white group-hover:border-primary/10 transition-all duration-500">
                            <span class="text-3xl font-black text-secondary group-hover:text-white">02</span>
                        </div>
                        <h3 class="text-xl font-extrabold text-secondary mb-3">Simulasi Ujian</h3>
                        <p class="text-sm text-secondary/60 font-medium leading-relaxed">Kerjakan soal dengan timer dan sistem penilaian IRT asli.</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="text-center group">
                        <div class="w-24 h-24 bg-white border-8 border-gray-50 rounded-[2.5rem] flex items-center justify-center mx-auto mb-8 shadow-xl group-hover:bg-primary group-hover:text-white group-hover:border-primary/10 transition-all duration-500">
                            <span class="text-3xl font-black text-secondary group-hover:text-white">03</span>
                        </div>
                        <h3 class="text-xl font-extrabold text-secondary mb-3">Review Materi</h3>
                        <p class="text-sm text-secondary/60 font-medium leading-relaxed">Tonton pembahasan video dan pelajari kesalahanmu secara detail.</p>
                    </div>
                    <!-- Step 4 -->
                    <div class="text-center group">
                        <div class="w-24 h-24 bg-white border-8 border-gray-50 rounded-[2.5rem] flex items-center justify-center mx-auto mb-8 shadow-xl group-hover:bg-accent group-hover:text-secondary group-hover:border-accent/10 transition-all duration-500">
                            <span class="text-3xl font-black text-secondary group-hover:text-secondary">04</span>
                        </div>
                        <h3 class="text-xl font-extrabold text-secondary mb-3">Lolos Ujian</h3>
                        <p class="text-sm text-secondary/60 font-medium leading-relaxed">Siap menghadapi ujian sesungguhnya dan raih masa depanmu!</p>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="mt-24 bg-primary p-10 md:p-16 rounded-[4rem] shadow-2xl shadow-primary/30 flex flex-col lg:flex-row items-center justify-between gap-10 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-[100px] -mr-48 -mt-48 group-hover:scale-110 transition-transform duration-700"></div>
                <div class="relative z-10 text-center lg:text-left max-w-2xl">
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-5 leading-tight">Siap Menaklukkan Ujian Impianmu?</h2>
                    <p class="text-white/80 font-bold text-lg">Daftar sekarang dan nikmati simulasi tryout paling akurat se-Indonesia.</p>
                </div>
                <div class="relative z-10 flex shrink-0">
                    <a href="#" class="px-12 py-6 bg-white text-primary font-black text-lg rounded-[2rem] hover:bg-secondary hover:text-white transition-all transform hover:scale-105 active:scale-95 shadow-2xl">
                        Mulai Sekarang - Gratis
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
