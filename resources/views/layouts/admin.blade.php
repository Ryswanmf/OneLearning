<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') - OneLearning</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
        #admin-sidebar {
            width: 280px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #1E3A8A;
            z-index: 100;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        #admin-content {
            margin-left: 280px;
            min-height: 100vh;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .sidebar-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            margin: 4px 16px;
            border-radius: 12px;
            color: rgba(255,255,255,0.6);
            font-weight: 600;
            font-size: 13px;
            text-decoration: none;
            transition: all 0.2s;
        }
        .sidebar-item:hover {
            background-color: rgba(255,255,255,0.05);
            color: white;
        }
        .sidebar-item.active {
            background-color: #0EA5E9;
            color: white;
            box-shadow: 0 10px 15px -3px rgba(14, 165, 233, 0.3);
        }
        .sidebar-label {
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: rgba(255,255,255,0.2);
            padding: 24px 32px 8px;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans text-secondary antialiased" x-data="{ sidebarOpen: true }">
    
    <!-- SIDEBAR -->
    <aside id="admin-sidebar" :style="sidebarOpen ? '' : 'transform: translateX(-100%)'">
        <div class="py-10 px-8 flex items-center gap-3">
            <div class="p-2 bg-white rounded-xl shadow-sm">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-7 h-7">
            </div>
            <div class="flex flex-col">
                <span class="font-black text-lg leading-none tracking-tighter text-white uppercase">One<span class="text-primary">Learning</span></span>
                <span class="text-[9px] font-black text-white/20 uppercase tracking-[0.2em] mt-1.5">Admin Dashboard</span>
            </div>
        </div>

        <nav class="flex-1 overflow-y-auto">
            <div class="sidebar-label">Main</div>
            <a href="{{ route('admin.index') }}" class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                Dashboard
            </a>

            <div class="sidebar-label">Konten Landing</div>
            <a href="{{ route('admin.blog.index') }}" class="sidebar-item {{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                Blog & Berita
            </a>
            <a href="{{ route('admin.produk.index') }}" class="sidebar-item {{ request()->routeIs('admin.produk.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h12l1 12H4L5 9z" /></svg>
                Produk & Jenjang
            </a>
            <a href="{{ route('admin.snbp.index') }}" class="sidebar-item {{ request()->routeIs('admin.snbp.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                Analisis SNBP
            </a>
            <a href="{{ route('admin.utbk.index') }}" class="sidebar-item {{ request()->routeIs('admin.utbk.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                Tryout UTBK
            </a>
            <a href="{{ route('admin.sd.index') }}" class="sidebar-item {{ request()->routeIs('admin.sd.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                Tryout SD 4-6
            </a>
            <a href="{{ route('admin.smp.index') }}" class="sidebar-item {{ request()->routeIs('admin.smp.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                Tryout SMP 7-9
            </a>
            <a href="{{ route('admin.sma.index') }}" class="sidebar-item {{ request()->routeIs('admin.sma.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                Tryout SMA 10-11
            </a>
            <a href="{{ route('admin.sma-utbk.index') }}" class="sidebar-item {{ request()->routeIs('admin.sma-utbk.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                Tryout SMA 12 & UTBK
            </a>
            <a href="{{ route('admin.alumni.index') }}" class="sidebar-item {{ request()->routeIs('admin.alumni.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                Tryout Alumni
            </a>
            <a href="{{ route('admin.testimoni.index') }}" class="sidebar-item {{ request()->routeIs('admin.testimoni.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                Testimoni Alumni
            </a>

            <div class="sidebar-label">Bisnis & Profil</div>
            <a href="{{ route('admin.bisnis.index') }}" class="sidebar-item {{ request()->routeIs('admin.bisnis.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                Layanan Bisnis
            </a>
            <a href="{{ route('admin.paket-belajar.index') }}" class="sidebar-item {{ request()->routeIs('admin.paket-belajar.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Paket Belajar
            </a>
            <div class="sidebar-label">Sistem</div>
            <a href="{{ route('admin.settings.index') }}" class="sidebar-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.756 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                Pengaturan Web
            </a>
        </nav>

        <div class="p-6 border-t border-white/10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:text-red-500 font-bold text-sm transition-all bg-transparent border-none cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                    Logout Panel
                </button>
            </form>
        </div>
    </aside>

    <!-- CONTENT -->
    <main id="admin-content" :style="sidebarOpen ? '' : 'margin-left: 0'">
        <!-- Top Bar -->
        <header class="bg-white border-b border-gray-100 sticky top-0 z-[90] px-8 py-4 flex items-center justify-between shadow-sm">
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 bg-gray-50 rounded-xl text-secondary hover:bg-gray-100 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>

            <div class="flex items-center gap-6">
                <div class="hidden sm:block text-right text-[10px] font-black text-secondary/30 uppercase tracking-widest">
                    {{ date('d F Y') }}
                </div>
                <div class="h-8 w-px bg-gray-100"></div>
                <a href="/" target="_blank" class="px-4 py-2 bg-primary/5 text-primary text-[10px] font-black uppercase tracking-widest rounded-lg hover:bg-primary hover:text-white transition-all">Lihat Web</a>
            </div>
        </header>

        <div class="p-8 lg:p-12">
            @yield('content')
        </div>
    </main>

</body>
</html>
