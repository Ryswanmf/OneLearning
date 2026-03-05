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
    <body class="bg-white font-sans text-secondary antialiased" x-data="{ mobileMenuOpen: false, productDropdownOpen: false, businessDropdownOpen: false }">
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
                        
                        <!-- Dropdown Produk -->
                        <div class="relative" @mouseenter="productDropdownOpen = true" @mouseleave="productDropdownOpen = false">
                            <button class="flex items-center gap-1 text-xs font-bold text-secondary/80 hover:text-primary transition-colors focus:outline-none py-5">
                                Produk
                                <svg class="w-3 h-3 transition-transform duration-200" :class="productDropdownOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <!-- Mega Dropdown Menu -->
                            <div x-show="productDropdownOpen"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 translate-y-2"
                                 class="absolute left-0 w-[480px] bg-white rounded-2xl shadow-2xl border border-gray-100 p-6 z-[60]"
                                 style="display: none;">
                                
                                <div class="grid grid-cols-2 gap-8">
                                    <!-- Unggulan -->
                                    <div>
                                        <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                                            <span class="w-1 h-1 bg-accent rounded-full"></span>
                                            Unggulan
                                        </h4>
                                        <div class="space-y-5">
                                            <a href="#" class="group block">
                                                <div class="font-bold text-sm text-secondary group-hover:text-primary transition-colors">Analisis SNBP</div>
                                                <p class="text-[11px] text-secondary/50 font-medium leading-relaxed mt-1">Prediksi kelulusan SNBP akurat.</p>
                                            </a>
                                            <a href="#" class="group block">
                                                <div class="font-bold text-sm text-secondary group-hover:text-primary transition-colors">Tryout UTBK</div>
                                                <p class="text-[11px] text-secondary/50 font-medium leading-relaxed mt-1">Simulasi UTBK dengan skor prediktif.</p>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Jenjang -->
                                    <div class="border-l border-gray-50 pl-8">
                                        <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                                            <span class="w-1 h-1 bg-primary rounded-full"></span>
                                            Jenjang
                                        </h4>
                                        <div class="space-y-1">
                                            <a href="#" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                                4 - 6 SD
                                                <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                                            </a>
                                            <a href="#" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                                7 - 9 SMP
                                            </a>
                                            <a href="#" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                                10 - 11 SMA
                                            </a>
                                            <a href="#" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                                12 SMA & UTBK
                                            </a>
                                            <a href="#" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all text-primary">
                                                Alumni
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dropdown Bisnis -->
                        <div class="relative" @mouseenter="businessDropdownOpen = true" @mouseleave="businessDropdownOpen = false">
                            <button class="flex items-center gap-1 text-xs font-bold text-secondary/80 hover:text-primary transition-colors focus:outline-none py-5">
                                Bisnis
                                <svg class="w-3 h-3 transition-transform duration-200" :class="businessDropdownOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu Bisnis -->
                            <div x-show="businessDropdownOpen"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 translate-y-2"
                                 class="absolute left-0 w-[320px] bg-white rounded-2xl shadow-2xl border border-gray-100 p-5 z-[60]"
                                 style="display: none;">
                                
                                <div class="space-y-1">
                                    <a href="#" class="group block p-3 rounded-xl hover:bg-primary/5 transition-all">
                                        <div class="font-bold text-[13px] text-secondary group-hover:text-primary transition-colors">Layanan Bisnis</div>
                                        <p class="text-[11px] text-secondary/50 font-medium leading-tight mt-1">Kerja sama sekolah dan mitra bisnis.</p>
                                    </a>
                                    
                                    <a href="#" class="group block p-3 rounded-xl hover:bg-primary/5 transition-all">
                                        <div class="font-bold text-[13px] text-secondary group-hover:text-primary transition-colors">Future Educators</div>
                                        <p class="text-[11px] text-secondary/50 font-medium leading-tight mt-1">Komunitas online guru dan sekolah.</p>
                                    </a>

                                    <div class="h-px bg-gray-50 my-2"></div>

                                    <a href="#" class="group block p-3 rounded-xl hover:bg-primary/5 transition-all">
                                        <div class="font-bold text-[13px] text-secondary group-hover:text-primary transition-colors">Tentang Kami</div>
                                        <p class="text-[11px] text-secondary/50 font-medium leading-tight mt-1">Profil PT One Learning Indonesia.</p>
                                    </a>
                                </div>
                            </div>
                        </div>

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
                    
                    <!-- Mobile Produk Accordion -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">
                            Produk
                            <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="open" class="pl-8 pr-4 py-2 space-y-2 bg-gray-50/50">
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1 italic">Analisis SNBP</a>
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1 italic">Tryout UTBK</a>
                            <div class="h-px bg-gray-200 my-2"></div>
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1">4 - 6 SD</a>
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1">7 - 9 SMP</a>
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1">10 - 11 SMA</a>
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1">12 SMA & UTBK</a>
                        </div>
                    </div>

                    <!-- Mobile Bisnis Accordion -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">
                            Bisnis
                            <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="open" class="pl-8 pr-4 py-2 space-y-2 bg-gray-50/50">
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1">Layanan Bisnis</a>
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1">Future Educators</a>
                            <a href="#" class="block text-xs font-bold text-secondary/70 py-1 font-black">Tentang Kami</a>
                        </div>
                    </div>

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
                        
                        <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black text-secondary leading-[1.1] tracking-tighter mb-6">
                            Wujudkan <span class="text-primary italic font-bold">Masa Depanmu</span> <br class="hidden lg:block">
                            <span class="flex items-center justify-center lg:justify-start gap-3 flex-wrap">
                                Bersama 
                                <span class="relative inline-block px-2">
                                    <span class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">OneLearning</span>
                                    <span class="absolute bottom-1 left-0 w-full h-3 bg-accent/20 -rotate-1"></span>
                                </span>
                            </span>
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

        <!-- Section 3: Testimoni Alumni -->
        <section class="py-20 bg-secondary/5 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center mb-16">
                    <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Kisah Sukses</div>
                    <h2 class="text-3xl md:text-5xl font-black text-secondary tracking-tight">Mereka Telah Membuktikan</h2>
                    <p class="text-secondary/60 mt-4 font-medium max-w-2xl mx-auto">Bergabunglah dengan ribuan alumni yang telah berhasil meraih mimpi mereka bersama sistem tryout kami.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testi 1 -->
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 relative group hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500">
                        <div class="absolute -top-5 left-8 w-10 h-10 bg-accent rounded-full flex items-center justify-center text-secondary shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.827c.097-.312.424-.51.748-.445l.135.034a.75.75 0 0 1 .553.868l-.403 1.848a2.99 2.99 0 0 0-.256-.03l-.135-.03a.75.75 0 0 1-.553-.868l.403-1.848Z"/><path d="M4.172 6.556c.106-.305.426-.497.74-.423l.135.031a.75.75 0 0 1 .562.862l-.37 1.854a2.986 2.986 0 0 0-.256-.027l-.135-.031a.75.75 0 0 1-.562-.862l.37-1.854ZM15.828 6.556c-.106-.305-.426-.497-.74-.423l-.135.031a.75.75 0 0 0-.562.862l.37 1.854c.084-.012.17-.021.256-.027l.135.031a.75.75 0 0 0 .562-.862l-.37-1.854ZM7.25 10c0-1.243 1.007-2.25 2.25-2.25h.5c1.243 0 2.25 1.007 2.25 2.25v.5c0 1.243-1.007 2.25-2.25 2.25h-.5c-1.243 0-2.25-1.007-2.25-2.25v-.5Z"/><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.501Z" clip-rule="evenodd"/></svg>
                        </div>
                        <p class="text-secondary/70 italic leading-relaxed mb-6">"Sistem IRT di OneLearning benar-benar mirip dengan UTBK asli. Ranking nasionalnya bikin motivasi belajar naik terus setiap hari!"</p>
                        <div class="flex items-center gap-4 pt-6 border-t border-gray-50">
                            <img src="https://ui-avatars.com/api/?name=Rina+Putri&background=0EA5E9&color=fff" class="w-12 h-12 rounded-full border-2 border-primary/20" alt="Alumni">
                            <div>
                                <div class="font-black text-secondary text-sm">Rina Putri</div>
                                <div class="text-[10px] text-primary font-bold uppercase tracking-wider">Lolos Akuntansi UI</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testi 2 -->
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-xl border border-gray-100 relative group hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500 transform md:scale-105 z-10">
                        <div class="absolute -top-5 left-8 w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 12h3v9h6v-6h4v6h6v-9h3L12 2z"/></svg>
                        </div>
                        <p class="text-secondary/70 italic leading-relaxed mb-6">"Soal-soal CPNS di sini update banget dan pembahasannya super gampang dimengerti. Gak nyesel langganan di OneLearning, akhirnya jadi ASN!"</p>
                        <div class="flex items-center gap-4 pt-6 border-t border-gray-50">
                            <img src="https://ui-avatars.com/api/?name=Andi+Saputra&background=1E3A8A&color=fff" class="w-12 h-12 rounded-full border-2 border-primary/20" alt="Alumni">
                            <div>
                                <div class="font-black text-secondary text-sm">Andi Saputra</div>
                                <div class="text-[10px] text-primary font-bold uppercase tracking-wider">Lolos Kemenkeu</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testi 3 -->
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 relative group hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500">
                        <div class="absolute -top-5 left-8 w-10 h-10 bg-accent rounded-full flex items-center justify-center text-secondary shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.827c.097-.312.424-.51.748-.445l.135.034a.75.75 0 0 1 .553.868l-.403 1.848a2.99 2.99 0 0 0-.256-.03l-.135-.03a.75.75 0 0 1-.553-.868l.403-1.848Z"/></svg>
                        </div>
                        <p class="text-secondary/70 italic leading-relaxed mb-6">"Fitur analisis peluang kelulusannya akurat banget. Saya jadi tau harus fokus belajar di materi mana yang masih lemah. Thank you OneLearning!"</p>
                        <div class="flex items-center gap-4 pt-6 border-t border-gray-50">
                            <img src="https://ui-avatars.com/api/?name=Siti+Aminah&background=FBBF24&color=fff" class="w-12 h-12 rounded-full border-2 border-primary/20" alt="Alumni">
                            <div>
                                <div class="font-black text-secondary text-sm">Siti Aminah</div>
                                <div class="text-[10px] text-primary font-bold uppercase tracking-wider">Lolos STIS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Alur Belajar -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="text-primary font-black text-xs uppercase tracking-[0.3em] mb-3">Langkah Mudah</div>
                    <h2 class="text-3xl md:text-4xl font-black text-secondary tracking-tight">Cara Kerja OneLearning</h2>
                </div>

                <div class="relative">
                    <!-- Connecting Line (Desktop) -->
                    <div class="hidden lg:block absolute top-12 left-0 w-full h-0.5 border-t-2 border-dashed border-gray-100 -z-10"></div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
                        <!-- Step 1 -->
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-white border-4 border-gray-50 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all duration-500">
                                <span class="text-2xl font-black text-secondary group-hover:text-white">01</span>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2">Pilih Paket</h3>
                            <p class="text-xs md:text-sm text-secondary/60 font-medium">Temukan paket tryout yang sesuai dengan target impianmu.</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-white border-4 border-gray-50 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all duration-500">
                                <span class="text-2xl font-black text-secondary group-hover:text-white">02</span>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2">Simulasi Ujian</h3>
                            <p class="text-xs md:text-sm text-secondary/60 font-medium">Kerjakan soal dengan timer dan sistem penilaian IRT asli.</p>
                        </div>

                        <!-- Step 3 -->
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-white border-4 border-gray-50 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all duration-500">
                                <span class="text-2xl font-black text-secondary group-hover:text-white">03</span>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2">Review Materi</h3>
                            <p class="text-xs md:text-sm text-secondary/60 font-medium">Tonton pembahasan video dan pelajari kesalahanmu secara detail.</p>
                        </div>

                        <!-- Step 4 -->
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-white border-4 border-gray-50 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl group-hover:bg-accent group-hover:text-secondary group-hover:border-accent transition-all duration-500">
                                <span class="text-2xl font-black text-secondary group-hover:text-secondary">04</span>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2">Lolos Ujian</h3>
                            <p class="text-xs md:text-sm text-secondary/60 font-medium">Siap menghadapi ujian sesungguhnya dan raih masa depanmu!</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div class="mt-20 bg-primary p-8 md:p-12 rounded-[3rem] shadow-2xl shadow-primary/30 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32 group-hover:scale-110 transition-transform duration-700"></div>
                    <div class="relative z-10 text-center md:text-left">
                        <h2 class="text-3xl md:text-4xl font-black text-white mb-3">Siap Menaklukkan Ujianmu?</h2>
                        <p class="text-white/80 font-bold">Daftar sekarang dan dapatkan Tryout Gratis pertamamu!</p>
                    </div>
                    <a href="#" class="relative z-10 px-10 py-5 bg-white text-primary font-black rounded-full hover:bg-secondary hover:text-white transition-all transform hover:scale-105 active:scale-95 shadow-xl">
                        Mulai Sekarang - Gratis
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-secondary pt-20 pb-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    <!-- Brand -->
                    <div class="lg:col-span-1">
                        <a href="/" class="flex items-center gap-3 mb-6">
                            <img src="{{ asset('images/logo.png') }}" alt="OneLearning Logo" class="w-12 h-12">
                            <span class="font-extrabold text-2xl tracking-tight text-white">One<span class="text-primary">Learning</span></span>
                        </a>
                        <p class="text-white/60 text-sm leading-relaxed mb-8">
                            Platform simulasi tryout online nomor satu di Indonesia. Kami membantu kamu mempersiapkan diri menghadapi ujian masa depan dengan teknologi pendidikan tercanggih.
                        </p>
                        <div class="flex items-center gap-4">
                            <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Links 1 -->
                    <div>
                        <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6">Program Kami</h4>
                        <ul class="space-y-4">
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">UTBK-SNBT 2024</a></li>
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">CPNS & PPPK</a></li>
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Sekolah Kedinasan</a></li>
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Ujian Mandiri PTN</a></li>
                        </ul>
                    </div>

                    <!-- Links 2 -->
                    <div>
                        <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6">Bantuan</h4>
                        <ul class="space-y-4">
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Cara Mendaftar</a></li>
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Pusat Bantuan</a></li>
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Kebijakan Privasi</a></li>
                            <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6">Hubungi Kami</h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span class="text-white/60 text-sm">support@onelearning.id</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span class="text-white/60 text-sm">Jakarta Selatan, Indonesia</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="text-white/40 text-xs font-medium text-center md:text-left">
                        &copy; 2024 OneLearning Indonesia. All rights reserved.
                    </div>
                    <div class="flex items-center gap-6 grayscale opacity-30 hover:grayscale-0 hover:opacity-100 transition-all">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_dana_blue.svg" class="h-4" alt="Dana">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_ovo_purple.svg" class="h-4" alt="OVO">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-4" alt="PayPal">
                    </div>
                </div>
            </div>
        </footer>

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
