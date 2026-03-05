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
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white font-sans text-secondary antialiased" x-data="{ mobileMenuOpen: false }">
        <!-- Navbar -->
        <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo (Kiri) -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="flex items-center gap-3">
                            <img src="{{ asset('images/logo.png') }}" alt="OneLearning Logo" class="w-12 h-12">
                            <span class="font-bold text-2xl tracking-tight text-secondary">One<span class="text-primary">Learning</span></span>
                        </a>
                    </div>

                    <!-- Desktop Menu (Tengah ke Kanan) -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#" class="text-sm font-semibold text-secondary/80 hover:text-primary transition-colors">Beranda</a>
                        <a href="#" class="text-sm font-semibold text-secondary/80 hover:text-primary transition-colors">Produk</a>
                        <a href="#" class="text-sm font-semibold text-secondary/80 hover:text-primary transition-colors">Bisnis</a>
                        <a href="#" class="text-sm font-semibold text-secondary/80 hover:text-primary transition-colors">Paket Belajar</a>
                        <a href="#" class="text-sm font-semibold text-secondary/80 hover:text-primary transition-colors">Testimoni</a>
                        <a href="#" class="text-sm font-semibold text-secondary/80 hover:text-primary transition-colors">Blog</a>
                        
                        <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-full text-white bg-primary hover:bg-secondary shadow-lg shadow-primary/20 transition-all active:scale-95">
                            Mulai Belajar
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-secondary hover:text-primary focus:outline-none">
                            <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
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
                 class="md:hidden bg-white border-b border-gray-100 shadow-xl"
                 style="display: none;">
                <div class="px-4 pt-2 pb-6 space-y-2">
                    <a href="#" class="block px-3 py-2.5 text-base font-semibold text-secondary hover:bg-primary/10 hover:text-primary rounded-lg">Beranda</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-semibold text-secondary hover:bg-primary/10 hover:text-primary rounded-lg">Produk</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-semibold text-secondary hover:bg-primary/10 hover:text-primary rounded-lg">Bisnis</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-semibold text-secondary hover:bg-primary/10 hover:text-primary rounded-lg">Paket Belajar</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-semibold text-secondary hover:bg-primary/10 hover:text-primary rounded-lg">Testimoni</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-semibold text-secondary hover:bg-primary/10 hover:text-primary rounded-lg">Blog</a>
                    <div class="pt-4 px-3">
                        <a href="#" class="block w-full text-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-white bg-primary hover:bg-secondary shadow-lg shadow-primary/20 transition-all">
                            Mulai Belajar
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section (Content Utama) -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>

            <div class="text-center relative">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/20 text-secondary font-bold text-xs uppercase tracking-widest rounded-full mb-8">
                    <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                    Platform Edukasi Terpercaya
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold text-secondary mb-8 tracking-tight leading-[1.1]">
                    Belajar Apapun, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary italic">Kapanpun & Dimanapun</span>
                </h1>
                <p class="max-w-2xl mx-auto text-xl text-secondary/70 mb-12 leading-relaxed">
                    Tingkatkan skill kamu dengan materi berkualitas dari instruktur berpengalaman di bidangnya. 
                    Mulai perjalanan karirmu bersama OneLearning sekarang!
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="#" class="w-full sm:w-auto px-12 py-5 bg-primary text-white font-bold rounded-full hover:bg-secondary shadow-2xl shadow-primary/30 transition-all transform hover:-translate-y-1 hover:scale-105">
                        Daftar Sekarang - Gratis
                    </a>
                    <a href="#" class="w-full sm:w-auto px-12 py-5 border-2 border-secondary/10 text-secondary font-bold rounded-full hover:bg-secondary hover:text-white transition-all transform hover:-translate-y-1">
                        Lihat Katalog Produk
                    </a>
                </div>

                <!-- Stats/Social Proof -->
                <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-gray-100 pt-12">
                    <div>
                        <div class="text-4xl font-black text-secondary">50k+</div>
                        <div class="text-sm text-secondary/60 font-medium mt-1">Siswa Aktif</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-primary">100+</div>
                        <div class="text-sm text-secondary/60 font-medium mt-1">Kursus Unggulan</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-accent">4.9/5</div>
                        <div class="text-sm text-secondary/60 font-medium mt-1">Rating Kepuasan</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-secondary">200+</div>
                        <div class="text-sm text-secondary/60 font-medium mt-1">Instruktur Expert</div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
