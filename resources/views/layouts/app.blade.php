<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', \App\Models\Setting::where('key', 'meta_title')->first()?->value ?? 'OneLearning - Platform Belajar Masa Kini')</title>
        <meta name="description" content="@yield('meta_description', \App\Models\Setting::where('key', 'meta_description')->first()?->value ?? 'Platform simulasi tryout terbaik untuk SD, SMP, SMA, dan UTBK.')">
        <meta name="keywords" content="@yield('meta_keywords', \App\Models\Setting::where('key', 'meta_keywords')->first()?->value ?? 'tryout, utbk, snbt, simulasi ujian, belajar online')">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        @stack('styles')
    </head>
    <body class="bg-white font-sans text-secondary antialiased">
        
        <!-- Global Notifications (Toast) -->
        <div x-data="{ show: false, message: '', type: 'success' }"
             x-init="@if(session('success')) 
                        show = true; message = '{{ session('success') }}'; type = 'success';
                        setTimeout(() => show = false, 5000);
                    @endif
                    @if(session('error')) 
                        show = true; message = '{{ session('error') }}'; type = 'error';
                        setTimeout(() => show = false, 5000);
                    @endif"
             x-show="show"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:translate-x-4"
             x-transition:enter-end="opacity-100 translate-y-0 sm:translate-x-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed bottom-8 right-8 z-[200] max-w-sm w-full bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-100 p-5 flex items-center gap-4"
             style="display: none;">
            
            <div :class="type === 'success' ? 'bg-green-500' : 'bg-red-500'" class="w-12 h-12 rounded-2xl flex items-center justify-center text-white shrink-0 shadow-lg">
                <template x-if="type === 'success'">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                </template>
                <template x-if="type === 'error'">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" /></svg>
                </template>
            </div>
            
            <div class="flex-1">
                <h4 class="text-[10px] font-black uppercase tracking-widest text-secondary/30 mb-1" x-text="type === 'success' ? 'Berhasil' : 'Pemberitahuan'"></h4>
                <p class="text-sm font-bold text-secondary leading-tight" x-text="message"></p>
            </div>

            <button @click="show = false" class="text-secondary/20 hover:text-secondary transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>

        @include('layouts.header')

        <main>
            @yield('content')
        </main>

        @if(!request()->routeIs('dashboard'))
            @include('layouts.footer')
        @endif

        @stack('scripts')

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
