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
        </style>
    </head>
    <body class="font-sans text-secondary antialiased bg-white overflow-hidden">
        <div class="min-h-screen flex">
            <!-- Sisi Kiri: Visual & Branding (Desktop) -->
            <div class="hidden lg:flex lg:w-[45%] xl:w-[50%] relative overflow-hidden bg-secondary">
                <!-- Abstract Gradient Overlay -->
                <div class="absolute inset-0 z-10 bg-gradient-to-br from-secondary via-secondary/60 to-primary/30"></div>
                
                <!-- Background Image with Ken Burns Effect -->
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1200" 
                     class="absolute inset-0 w-full h-full object-cover scale-110 animate-float" 
                     style="animation-duration: 30s;"
                     alt="Education Background">

                <!-- Content Overlay -->
                <div class="relative z-20 flex flex-col justify-between p-12 xl:p-20 w-full">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="p-2 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 group-hover:bg-white/20 transition-all duration-500">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 brightness-0 invert">
                        </div>
                        <span class="font-black text-2xl tracking-tighter text-white">One<span class="text-primary font-medium">Learning</span></span>
                    </a>

                    <div class="max-w-lg">
                        <div class="flex items-center gap-2 mb-6">
                            <div class="h-px w-8 bg-primary"></div>
                            <span class="text-[10px] font-black text-primary uppercase tracking-[0.4em]">Smart Education System</span>
                        </div>
                        <h1 class="text-5xl xl:text-6xl font-black text-white leading-[1.1] mb-8">
                            Empowering <br> <span class="italic text-primary">Your Dreams</span> <br> to Reality.
                        </h1>
                        
                        <!-- Testimonial Snippet -->
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
                        <span>Privacy Policy</span>
                        <div class="w-1 h-1 bg-white/20 rounded-full"></div>
                        <span>Terms of Service</span>
                        <div class="w-1 h-1 bg-white/20 rounded-full"></div>
                        <span>&copy; 2024 OneLearning</span>
                    </div>
                </div>
            </div>

            <!-- Sisi Kanan: Form (Desktop & Mobile) -->
            <div class="w-full lg:w-[55%] xl:w-[50%] flex flex-col justify-center items-center p-8 sm:p-20 relative bg-white">
                <!-- Back Button -->
                <a href="/" class="absolute top-8 right-8 lg:top-12 lg:right-12 flex items-center gap-2 text-[10px] font-black text-secondary/40 hover:text-primary transition-colors uppercase tracking-widest group">
                    <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                    Kembali Ke Beranda
                </a>

                <!-- Mobile Logo -->
                <div class="lg:hidden mb-12">
                    <a href="/" class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-16">
                        <span class="font-black text-xl text-secondary uppercase tracking-tighter">One<span class="text-primary">Learning</span></span>
                    </a>
                </div>

                <!-- Abstract Subtle Background Shapes -->
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/[0.03] rounded-full blur-[100px] -mr-64 -mt-64"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent/[0.03] rounded-full blur-[100px] -ml-64 -mb-64"></div>

                <div class="w-full max-w-sm animate-fade-up opacity-0">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
