<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OneLearning - Platform Belajar Masa Kini</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white font-sans text-secondary antialiased" x-data="{ mobileMenuOpen: false }">
        <!-- Navbar -->
        <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo (Kiri) -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="flex items-center gap-2">
                            <img src="{{ asset('images/logo.png') }}" alt="OneLearning Logo" class="w-10 h-10">
                            <span class="font-extrabold text-xl tracking-tight text-secondary">One<span class="text-primary">Learning</span></span>
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-6">
                        <a href="#" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Beranda</a>
                        <a href="#" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Produk</a>
                        <a href="#" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Bisnis</a>
                        <a href="#" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Paket Belajar</a>
                        <a href="#" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Testimoni</a>
                        <a href="#" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Blog</a>
                        
                        <a href="#" class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-xs font-bold rounded-full text-white bg-primary hover:bg-secondary shadow-lg shadow-primary/25 transition-all active:scale-95">
                            Mulai Belajar
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-secondary hover:text-primary focus:outline-none p-1">
                            <svg x-show="!mobileMenuOpen" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg x-show="mobileMenuOpen" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="md:hidden bg-white border-b border-gray-100 shadow-xl overflow-hidden"
                 style="display: none;">
                <div class="px-4 pt-2 pb-4 space-y-0.5">
                    <a href="#" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Beranda</a>
                    <a href="#" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Produk</a>
                    <a href="#" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Bisnis</a>
                    <a href="#" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Paket Belajar</a>
                    <a href="#" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Testimoni</a>
                    <a href="#" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Blog</a>
                    <div class="pt-3 px-4">
                        <a href="#" class="block w-full text-center px-6 py-3 border border-transparent text-sm font-bold rounded-full text-white bg-primary shadow-lg shadow-primary/25">
                            Mulai Belajar
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <main class="relative pt-6 pb-12 lg:pt-12 lg:pb-20 overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-[400px] h-[400px] bg-primary/5 rounded-full blur-3xl -z-10"></div>
            <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/4 w-[350px] h-[350px] bg-accent/5 rounded-full blur-3xl -z-10"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-8">
                    
                    <!-- Content (Left) -->
                    <div class="flex-1 text-center lg:text-left order-2 lg:order-1">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-accent/15 text-secondary font-bold text-[10px] uppercase tracking-[0.2em] rounded-full mb-6">
                            <span class="relative flex h-1.5 w-1.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-accent"></span>
                            </span>
                            Solusi Belajar Digital Terbaik
                        </div>
                        
                        <h1 class="text-4xl md:text-5xl xl:text-6xl font-black text-secondary mb-6 leading-[1.1] tracking-tight">
                            Wujudkan Masa Depanmu <br class="hidden lg:block">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-primary bg-[length:200%_auto] animate-gradient-x italic">Bersama OneLearning</span>
                        </h1>
                        
                        <p class="text-base md:text-lg text-secondary/70 mb-8 leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Akses ribuan materi eksklusif dari instruktur profesional. Dirancang khusus untuk membantu kamu menguasai skill baru dengan cepat.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                            <a href="#" class="w-full sm:w-auto px-8 py-4 bg-primary text-white font-extrabold rounded-full hover:bg-secondary shadow-xl shadow-primary/20 transition-all transform hover:-translate-y-1 active:scale-95 text-base">
                                Gabung Sekarang
                            </a>
                            <a href="#" class="w-full sm:w-auto px-8 py-4 border-2 border-secondary/5 text-secondary font-extrabold rounded-full hover:bg-secondary hover:text-white transition-all transform hover:-translate-y-1 flex items-center justify-center gap-2 text-base group">
                                <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                                Lihat Katalog
                            </a>
                        </div>
                        
                        <div class="mt-10 flex flex-wrap items-center justify-center lg:justify-start gap-6">
                            <div class="flex -space-x-2">
                                <img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://ui-avatars.com/api/?name=Alex&background=0EA5E9&color=fff" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://ui-avatars.com/api/?name=Sarah&background=1E3A8A&color=fff" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://ui-avatars.com/api/?name=Budi&background=FBBF24&color=fff" alt="User">
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-gray-50 flex items-center justify-center text-[10px] font-bold text-gray-400 shadow-sm">+2k</div>
                            </div>
                            <div class="text-[11px] font-bold text-secondary/50 uppercase tracking-widest">
                                Dipercaya oleh <span class="text-secondary">10,000+</span> Siswa
                            </div>
                        </div>
                    </div>

                    <!-- Image/Visual (Right) -->
                    <div class="flex-1 w-full order-1 lg:order-2">
                        <div class="relative max-w-[440px] mx-auto lg:ml-auto">
                            <!-- Main Decorative Frame -->
                            <div class="absolute inset-0 bg-gradient-to-tr from-primary to-accent rounded-[2.5rem] rotate-2 opacity-10 blur-xl"></div>
                            
                            <!-- Image Container Placeholder -->
                            <div class="relative bg-white p-3 rounded-[2rem] shadow-xl border border-gray-50 overflow-hidden group">
                                <div class="aspect-[5/4] bg-gray-50 rounded-[1.5rem] flex items-center justify-center overflow-hidden border border-dashed border-gray-100">
                                    <div class="text-center p-6">
                                        <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-500">
                                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <p class="text-xs text-secondary/40 font-bold italic tracking-wide">Foto Hero Disini</p>
                                    </div>
                                    <!-- Hover Overlay -->
                                    <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                </div>
                                
                                <!-- Floating Elements (Smaller) -->
                                <div class="absolute top-6 -left-4 bg-white p-3 rounded-xl shadow-lg border border-gray-50 animate-bounce-slow hidden sm:block">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-accent rounded flex items-center justify-center text-white">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                                        </div>
                                        <div>
                                            <div class="text-[8px] text-gray-400 font-bold uppercase tracking-wider">Instructors</div>
                                            <div class="text-xs font-black text-secondary">Expert Mentors</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute bottom-8 -right-6 bg-secondary py-3 px-4 rounded-xl shadow-lg animate-float hidden sm:block text-center">
                                    <div class="text-accent text-lg font-black italic leading-none">4.9/5</div>
                                    <div class="text-[7px] text-white/40 uppercase font-bold mt-1 tracking-tighter">Student Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- Section 1: Fitur Unggulan -->
        <section class="py-12 bg-gray-50/50 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Keunggulan Sistem</div>
                    <h2 class="text-3xl md:text-4xl font-black text-secondary tracking-tight">Lebih Dari Sekedar Latihan Soal</h2>
                    <p class="text-secondary/60 mt-3 font-medium max-w-2xl mx-auto text-sm md:text-base">Sistem simulasi modern yang dirancang khusus untuk memberikan pengalaman ujian yang paling akurat.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Feature Card 1 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-primary/5 transition-all group hover:-translate-y-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300 text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        </div>
                        <h3 class="text-lg font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Penilaian IRT</h3>
                        <p class="text-xs md:text-sm text-secondary/60 leading-relaxed font-medium">Sistem penilaian Item Response Theory seperti standar UTBK asli untuk akurasi skor maksimal.</p>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-primary/5 transition-all group hover:-translate-y-1">
                        <div class="w-12 h-12 bg-accent/15 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-accent group-hover:text-secondary transition-all duration-300 text-accent">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        </div>
                        <h3 class="text-lg font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Ranking Nasional</h3>
                        <p class="text-xs md:text-sm text-secondary/60 leading-relaxed font-medium">Pantau posisimu secara real-time di antara ribuan pejuang masa depan lainnya di seluruh Indonesia.</p>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-primary/5 transition-all group hover:-translate-y-1">
                        <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white transition-all duration-300 text-secondary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                        </div>
                        <h3 class="text-lg font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Pembahasan Video</h3>
                        <p class="text-xs md:text-sm text-secondary/60 leading-relaxed font-medium">Tak hanya kunci jawaban, setiap soal dilengkapi pembahasan video dan PDF mendalam.</p>
                    </div>

                    <!-- Feature Card 4 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-primary/5 transition-all group hover:-translate-y-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300 text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        </div>
                        <h3 class="text-lg font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Analisis Peluang</h3>
                        <p class="text-xs md:text-sm text-secondary/60 leading-relaxed font-medium">Dapatkan rekomendasi jurusan atau instansi berdasarkan hasil skor tryout terbarumu.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Kategori Tryout -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6 text-center md:text-left">
                    <div>
                        <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Pilih Targetmu</div>
                        <h2 class="text-3xl md:text-4xl font-black text-secondary tracking-tight">Kategori Tryout Terpopuler</h2>
                        <p class="text-secondary/60 mt-3 font-medium text-sm md:text-base">Mulai langkah pertamamu dengan simulasi yang tepat sasaran.</p>
                    </div>
                    <a href="#" class="inline-flex items-center justify-center gap-2 text-sm font-black text-primary hover:text-secondary transition-all group">
                        Lihat Semua Kategori 
                        <svg class="w-5 h-5 group-hover:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Category 1 -->
                    <div class="relative group rounded-3xl overflow-hidden aspect-[4/5] shadow-lg border border-gray-100">
                        <div class="absolute inset-0 bg-secondary/40 group-hover:bg-secondary/20 transition-colors duration-500 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="UTBK">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent z-20"></div>
                        <div class="absolute bottom-0 left-0 p-6 z-30 w-full">
                            <span class="inline-block px-3 py-1 bg-accent text-secondary font-black text-[9px] uppercase tracking-widest rounded-lg mb-3">Kuliah</span>
                            <h3 class="text-white font-extrabold text-xl mb-3 leading-tight">UTBK-SNBT 2024</h3>
                            <div class="flex items-center gap-3 pt-3 border-t border-white/20">
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg> 24 Paket</span>
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> Akses 1 Thn</span>
                            </div>
                        </div>
                    </div>

                    <!-- Category 2 -->
                    <div class="relative group rounded-3xl overflow-hidden aspect-[4/5] shadow-lg border border-gray-100">
                        <div class="absolute inset-0 bg-secondary/40 group-hover:bg-secondary/20 transition-colors duration-500 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=600" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="CPNS">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent z-20"></div>
                        <div class="absolute bottom-0 left-0 p-6 z-30 w-full">
                            <span class="inline-block px-3 py-1 bg-primary text-white font-black text-[9px] uppercase tracking-widest rounded-lg mb-3">Karir</span>
                            <h3 class="text-white font-extrabold text-xl mb-3 leading-tight">CPNS & PPPK 2024</h3>
                            <div class="flex items-center gap-3 pt-3 border-t border-white/20">
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg> 18 Paket</span>
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> Akses 1 Thn</span>
                            </div>
                        </div>
                    </div>

                    <!-- Category 3 -->
                    <div class="relative group rounded-3xl overflow-hidden aspect-[4/5] shadow-lg border border-gray-100">
                        <div class="absolute inset-0 bg-secondary/40 group-hover:bg-secondary/20 transition-colors duration-500 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Kedinasan">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent z-20"></div>
                        <div class="absolute bottom-0 left-0 p-6 z-30 w-full">
                            <span class="inline-block px-3 py-1 bg-accent text-secondary font-black text-[9px] uppercase tracking-widest rounded-lg mb-3">Ikatan Dinas</span>
                            <h3 class="text-white font-extrabold text-xl mb-3 leading-tight">Sekolah Kedinasan</h3>
                            <div class="flex items-center gap-3 pt-3 border-t border-white/20">
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg> 12 Paket</span>
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> Akses 1 Thn</span>
                            </div>
                        </div>
                    </div>

                    <!-- Category 4 -->
                    <div class="relative group rounded-3xl overflow-hidden aspect-[4/5] shadow-lg border border-gray-100">
                        <div class="absolute inset-0 bg-secondary/40 group-hover:bg-secondary/20 transition-colors duration-500 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=600" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Ujian Mandiri">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent z-20"></div>
                        <div class="absolute bottom-0 left-0 p-6 z-30 w-full">
                            <span class="inline-block px-3 py-1 bg-primary text-white font-black text-[9px] uppercase tracking-widest rounded-lg mb-3">Mandiri</span>
                            <h3 class="text-white font-extrabold text-xl mb-3 leading-tight">Ujian Mandiri PTN</h3>
                            <div class="flex items-center gap-3 pt-3 border-t border-white/20">
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg> 15 Paket</span>
                                <span class="text-[10px] text-white/80 font-bold flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> Akses 1 Thn</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            @keyframes gradient-x {
                0%, 100% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
            }
            .animate-gradient-x {
                animation: gradient-x 5s ease infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-15px); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes bounce-slow {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-8px); }
            }
            .animate-bounce-slow {
                animation: bounce-slow 4s ease-in-out infinite;
            }
        </style>
    </body>
</html>
