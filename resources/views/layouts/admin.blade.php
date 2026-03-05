<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Admin Panel - OneLearning')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 font-sans text-secondary antialiased" x-data="{ sidebarOpen: true }">
        
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="bg-secondary text-white w-72 flex-shrink-0 flex flex-col transition-all duration-300 fixed h-full z-[100]" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
                <!-- Logo Admin Section -->
                <div class="px-8 py-10">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="relative">
                            <div class="absolute -inset-2 bg-primary/20 rounded-xl blur-lg group-hover:bg-primary/30 transition-all duration-500 opacity-0 group-hover:opacity-100"></div>
                            <div class="relative p-2 bg-white rounded-xl shadow-sm group-hover:scale-105 transition-all duration-500">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-black text-lg leading-none tracking-tighter text-white uppercase">One<span class="text-primary">Learning</span></span>
                            <span class="text-[9px] font-black text-white/20 uppercase tracking-[0.3em] mt-1.5 ml-0.5">Admin Panel</span>
                        </div>
                    </a>
                </div>

                <div class="h-px w-full bg-gradient-to-r from-transparent via-white/5 to-transparent mb-6"></div>

                <!-- Navigation -->
                <nav class="flex-1 overflow-y-auto p-6 space-y-8">
                    <!-- Dashboard Section -->
                    <div>
                        <div class="text-[10px] font-black text-white/30 uppercase tracking-[0.3em] mb-4 ml-4">Main Menu</div>
                        <div class="space-y-1">
                            <a href="{{ route('admin.index') }}" class="flex items-center gap-3 px-4 py-3 bg-primary text-white rounded-2xl font-bold text-sm transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                                Dashboard
                            </a>
                        </div>
                    </div>

                    <!-- Landing Page Section -->
                    <div>
                        <div class="text-[10px] font-black text-white/30 uppercase tracking-[0.3em] mb-4 ml-4">Kelola Landing</div>
                        <div class="space-y-1">
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/60 hover:text-white hover:bg-white/5 rounded-2xl font-bold text-sm transition-all group">
                                <svg class="w-5 h-5 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                                Hero & Banner
                            </a>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/60 hover:text-white hover:bg-white/5 rounded-2xl font-bold text-sm transition-all group">
                                <svg class="w-5 h-5 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" /></svg>
                                Fitur Unggulan
                            </a>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/60 hover:text-white hover:bg-white/5 rounded-2xl font-bold text-sm transition-all group">
                                <svg class="w-5 h-5 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                                Testimoni Alumni
                            </a>
                        </div>
                    </div>

                    <!-- Program Section -->
                    <div>
                        <div class="text-[10px] font-black text-white/30 uppercase tracking-[0.3em] mb-4 ml-4">Data & Program</div>
                        <div class="space-y-1">
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/60 hover:text-white hover:bg-white/5 rounded-2xl font-bold text-sm transition-all group">
                                <svg class="w-5 h-5 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                                Paket Belajar
                            </a>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 text-white/60 hover:text-white hover:bg-white/5 rounded-2xl font-bold text-sm transition-all group">
                                <svg class="w-5 h-5 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                                Manajemen Siswa
                            </a>
                        </div>
                    </div>
                </nav>

                <!-- Sidebar Footer -->
                <div class="p-6 border-t border-white/5 space-y-4">
                    <div class="flex items-center gap-3 px-4">
                        <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center font-black text-xs italic shadow-lg shadow-primary/20">AD</div>
                        <div>
                            <div class="text-xs font-black truncate w-32">{{ Auth::user()->name }}</div>
                            <div class="text-[10px] text-white/40 font-bold uppercase tracking-widest">Administrator</div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:text-red-500 hover:bg-red-500/5 rounded-2xl font-bold text-sm transition-all group">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                            Logout Panel
                        </button>
                    </form>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main class="flex-1 transition-all duration-300 min-h-screen" :class="sidebarOpen ? 'pl-72' : 'pl-0'">
                <!-- Top Minimal Header -->
                <header class="bg-white border-b border-gray-100 sticky top-0 z-[90] px-8 py-4 flex items-center justify-between">
                    <button @click="sidebarOpen = !sidebarOpen" class="p-2 bg-gray-50 rounded-xl text-secondary hover:bg-gray-100 transition-all">
                        <svg x-show="sidebarOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                        <svg x-show="!sidebarOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    </button>

                    <div class="flex items-center gap-6">
                        <div class="text-right hidden sm:block">
                            <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest">Sistem Tanggal</div>
                            <div class="text-xs font-bold text-secondary italic">{{ date('d F Y') }}</div>
                        </div>
                        <div class="h-8 w-px bg-gray-100"></div>
                        <a href="/" target="_blank" class="flex items-center gap-2 text-[10px] font-black text-primary uppercase tracking-widest hover:text-secondary transition-all">
                            Lihat Website <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </a>
                    </div>
                </header>

                <!-- Page Content -->
                <div class="p-8">
                    @yield('content')
                </div>
            </main>
        </div>

        <style>
            /* Custom Scrollbar for Sidebar */
            aside nav::-webkit-scrollbar { width: 4px; }
            aside nav::-webkit-scrollbar-track { background: transparent; }
            aside nav::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.05); border-radius: 10px; }
            aside nav::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.1); }
        </style>
    </body>
</html>
