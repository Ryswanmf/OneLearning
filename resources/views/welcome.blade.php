<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OneLearning - Platform Belajar Masa Kini</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white font-sans text-gray-900 antialiased" x-data="{ mobileMenuOpen: false }">
        <!-- Navbar -->
        <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo (Kiri) -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-200">
                                <span class="text-white font-bold text-xl">O</span>
                            </div>
                            <span class="font-bold text-2xl tracking-tight text-gray-900">One<span class="text-blue-600">Learning</span></span>
                        </a>
                    </div>

                    <!-- Desktop Menu (Tengah ke Kanan) -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">Beranda</a>
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">Produk</a>
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">Bisnis</a>
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">Paket Belajar</a>
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">Testimoni</a>
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">Blog</a>
                        
                        <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-full text-white bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all active:scale-95">
                            Mulai Belajar
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 hover:text-blue-600 focus:outline-none">
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
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-4"
                 class="md:hidden bg-white border-b border-gray-100 shadow-xl"
                 style="display: none;">
                <div class="px-4 pt-2 pb-6 space-y-2">
                    <a href="#" class="block px-3 py-2.5 text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Beranda</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Produk</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Bisnis</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Paket Belajar</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Testimoni</a>
                    <a href="#" class="block px-3 py-2.5 text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Blog</a>
                    <div class="pt-4 px-3">
                        <a href="#" class="block w-full text-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-white bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all">
                            Mulai Belajar
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section (Content Utama) -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6 tracking-tight">
                    Belajar Apapun, <br>
                    <span class="text-blue-600 italic">Kapanpun & Dimanapun</span>
                </h1>
                <p class="max-w-2xl mx-auto text-xl text-gray-500 mb-10 leading-relaxed">
                    Tingkatkan skill kamu dengan materi berkualitas dari instruktur berpengalaman di bidangnya. 
                    Mulai perjalanan karirmu bersama OneLearning sekarang!
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#" class="w-full sm:w-auto px-10 py-4 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 shadow-xl shadow-blue-200 transition-all transform hover:-translate-y-1">
                        Daftar Gratis
                    </a>
                    <a href="#" class="w-full sm:w-auto px-10 py-4 border-2 border-gray-200 text-gray-700 font-bold rounded-full hover:bg-gray-50 transition-all">
                        Lihat Katalog Produk
                    </a>
                </div>
            </div>
        </main>
    </body>
</html>
