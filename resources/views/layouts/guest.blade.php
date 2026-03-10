<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'OneLearning - Autentikasi')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes fade-up {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-up { animation: fade-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
            
            /* Custom scrollbar for better aesthetics */
            ::-webkit-scrollbar { width: 6px; }
            ::-webkit-scrollbar-track { background: transparent; }
            ::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 10px; }
            ::-webkit-scrollbar-thumb:hover { background: #d1d5db; }
        </style>
    </head>
    <body class="font-sans text-secondary antialiased bg-white" x-data="{ loading: false }">
        <!-- Full Screen Loading Overlay -->
        <div x-show="loading" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             class="fixed inset-0 z-[999] flex items-center justify-center bg-white/80 backdrop-blur-md"
             style="display: none;">
            <div class="flex flex-col items-center">
                <div class="relative">
                    <!-- Outer Ring -->
                    <div class="w-20 h-20 border-4 border-primary/10 border-t-primary rounded-full animate-spin"></div>
                    <!-- Inner Logo -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 animate-pulse">
                    </div>
                </div>
                <div class="mt-6 flex flex-col items-center">
                    <h3 class="text-sm font-black text-secondary uppercase tracking-[0.3em] animate-pulse">Menyiapkan <span class="text-primary italic">Dashboard</span></h3>
                    <p class="text-[9px] font-bold text-secondary/30 uppercase tracking-widest mt-2">Mohon tunggu sebentar...</p>
                </div>
            </div>
        </div>

        <div class="min-h-screen flex flex-col lg:flex-row">
            <!-- Sisi Kiri: Visual (Desktop Only) -->
            <div class="hidden lg:flex lg:w-[45%] xl:w-[50%] relative overflow-hidden bg-secondary sticky top-0 h-screen">
                <!-- Abstract Gradient Overlay -->
                <div class="absolute inset-0 z-10 bg-gradient-to-br from-secondary via-secondary/60 to-primary/30"></div>
                
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1200" 
                     class="absolute inset-0 w-full h-full object-cover scale-110 animate-float" 
                     style="animation-duration: 30s;"
                     alt="Education Background">

                <div class="relative z-20 flex flex-col justify-between p-12 xl:p-20 w-full h-full">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="p-2 bg-white rounded-2xl shadow-sm group-hover:scale-105 transition-all duration-500">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12 object-contain">
                        </div>
                        <span class="font-black text-2xl tracking-tighter text-white uppercase">One<span class="text-primary">Learning</span></span>
                    </a>

                    <div class="max-w-lg">
                        <div class="flex items-center gap-2 mb-6">
                            <div class="h-px w-8 bg-primary"></div>
                            <span class="text-[10px] font-black text-primary uppercase tracking-[0.4em]">Smart Education System</span>
                        </div>
                        <h1 class="text-5xl xl:text-6xl font-black text-white leading-[1.1] mb-8">
                            Empowering <br> <span class="italic text-primary">Your Dreams</span> <br> to Reality.
                        </h1>
                        
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-[2rem] max-w-sm">
                            <div class="flex gap-1 mb-3">
                                @for($i=0; $i<5; $i++)
                                    <svg class="w-3 h-3 text-accent fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                            <p class="text-white/70 text-sm italic font-medium leading-relaxed">"Sistem penilaian IRT di sini benar-benar membantu saya mengukur kemampuan asli sebelum UTBK!"</p>
                            <div class="mt-4 flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Azahra&background=0EA5E9&color=fff" class="w-8 h-8 rounded-full border border-white/20" alt="Sarah">
                                <span class="text-xs font-bold text-white">Sarah Azahra — <span class="text-primary">FK UI 2024</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 text-white/40 text-[10px] font-black uppercase tracking-widest">
                        <span>&copy; 2024 OneLearning Indonesia</span>
                    </div>
                </div>
            </div>

            <!-- Sisi Kanan: Form (Bisa di-scroll jika panjang) -->
            <div class="w-full lg:w-[55%] xl:w-[50%] flex flex-col items-center py-12 px-6 sm:px-12 lg:px-20 relative bg-white min-h-screen">
                <!-- Back Button -->
                <a href="/" class="self-end lg:absolute lg:top-12 lg:right-12 flex items-center gap-2 text-[10px] font-black text-secondary/40 hover:text-primary transition-colors uppercase tracking-widest group mb-12 lg:mb-0">
                    <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                    Beranda
                </a>

                <!-- Mobile Logo -->
                <div class="lg:hidden mb-10">
                    <a href="/" class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-14 h-14">
                        <span class="font-black text-xl text-secondary uppercase tracking-tighter">One<span class="text-primary">Learning</span></span>
                    </a>
                </div>

                <div class="w-full max-w-[340px] my-auto animate-fade-up opacity-0">
                    {{ $slot }}
                </div>

                <!-- Footer Mobile Only -->
                <div class="mt-12 lg:hidden text-center">
                    <p class="text-[10px] font-black text-secondary/20 uppercase tracking-[0.2em]">&copy; 2024 OneLearning</p>
                </div>
            </div>
        </div>
    </body>
</html>
