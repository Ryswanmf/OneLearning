<!-- Navbar -->
<nav class="sticky top-0 z-[100] bg-white/90 backdrop-blur-md border-b border-gray-100" 
     x-data="{ mobileMenuOpen: false, productDropdownOpen: false, businessDropdownOpen: false, profileDropdownOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo (Kiri) -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img src="{{ asset('images/logo.png') }}" alt="OneLearning Logo" class="w-10 h-10">
                    <span class="font-extrabold text-xl tracking-tight text-secondary">One<span class="text-primary">Learning</span></span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ url('/') }}" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Beranda</a>
                
                <!-- Dropdown Produk -->
                <div class="relative" @click.away="productDropdownOpen = false">
                    <button @click="productDropdownOpen = !productDropdownOpen; businessDropdownOpen = false; profileDropdownOpen = false" 
                            class="flex items-center gap-1 text-xs font-bold text-secondary/80 hover:text-primary transition-colors focus:outline-none py-5">
                        Produk
                        <svg class="w-3 h-3 transition-transform duration-200" :class="productDropdownOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="productDropdownOpen"
                         x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute left-0 w-[480px] bg-white rounded-2xl shadow-2xl border border-gray-100 p-6 z-[110]">
                        
                        <div class="grid grid-cols-2 gap-8">
                            <!-- Unggulan -->
                            <div>
                                <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                                    <span class="w-1 h-1 bg-accent rounded-full"></span>
                                    Unggulan
                                </h4>
                                <div class="space-y-5">
                                    <a href="{{ route('produk.snbp') }}" class="group block">
                                        <div class="font-bold text-sm text-secondary group-hover:text-primary transition-colors">Analisis SNBP</div>
                                        <p class="text-[11px] text-secondary/50 font-medium leading-relaxed mt-1">Prediksi kelulusan SNBP akurat.</p>
                                    </a>
                                    <a href="{{ route('produk.utbk') }}" class="group block">
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
                                    <a href="{{ route('produk.sd') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">4 - 6 SD</a>
                                    <a href="{{ route('produk.smp') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">7 - 9 SMP</a>
                                    <a href="{{ route('produk.sma') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">10 - 11 SMA</a>
                                    <a href="{{ route('produk.sma_utbk') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">12 SMA & UTBK</a>
                                    <a href="{{ route('produk.alumni') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all text-primary">Alumni</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Bisnis -->
                <div class="relative" @click.away="businessDropdownOpen = false">
                    <button @click="businessDropdownOpen = !businessDropdownOpen; productDropdownOpen = false; profileDropdownOpen = false" 
                            class="flex items-center gap-1 text-xs font-bold text-secondary/80 hover:text-primary transition-colors focus:outline-none py-5">
                        Bisnis
                        <svg class="w-3 h-3 transition-transform duration-200" :class="businessDropdownOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="businessDropdownOpen"
                         x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute left-0 w-[320px] bg-white rounded-2xl shadow-2xl border border-gray-100 p-5 z-[110]">
                        
                        <div class="space-y-1">
                            <a href="{{ route('bisnis.layanan') }}" class="group block p-3 rounded-xl hover:bg-primary/5 transition-all">
                                <div class="font-bold text-[13px] text-secondary group-hover:text-primary transition-colors">Layanan Bisnis</div>
                                <p class="text-[11px] text-secondary/50 font-medium leading-tight mt-1">Kerja sama sekolah dan mitra bisnis.</p>
                            </a>
                            <a href="{{ route('bisnis.educators') }}" class="group block p-3 rounded-xl hover:bg-primary/5 transition-all">
                                <div class="font-bold text-[13px] text-secondary group-hover:text-primary transition-colors">Future Educators</div>
                                <p class="text-[11px] text-secondary/50 font-medium leading-tight mt-1">Komunitas online guru dan sekolah.</p>
                            </a>
                            <div class="h-px bg-gray-50 my-2"></div>
                            <a href="{{ route('bisnis.tentang') }}" class="group block p-3 rounded-xl hover:bg-primary/5 transition-all">
                                <div class="font-bold text-[13px] text-secondary group-hover:text-primary transition-colors">Tentang Kami</div>
                                <p class="text-[11px] text-secondary/50 font-medium leading-tight mt-1">Profil PT One Learning Indonesia.</p>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('paket.index') }}" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Paket Belajar</a>
                <a href="{{ route('testimoni') }}" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Testimoni</a>
                <a href="{{ route('blog') }}" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Blog</a>
                
                @auth
                    <!-- Profile Dropdown -->
                    <div class="relative ml-4" @click.away="profileDropdownOpen = false">
                        <button @click="profileDropdownOpen = !profileDropdownOpen; productDropdownOpen = false; businessDropdownOpen = false" 
                                class="flex items-center gap-3 p-1.5 rounded-2xl hover:bg-gray-50 transition-all focus:outline-none group">
                            <div class="w-8 h-8 rounded-xl bg-primary/10 flex items-center justify-center text-primary border border-primary/10 overflow-hidden">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0EA5E9&color=fff&size=64&bold=true" class="w-full h-full object-cover">
                            </div>
                            <svg class="w-4 h-4 text-secondary/30 transition-transform duration-200" :class="profileDropdownOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="profileDropdownOpen"
                             x-cloak
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                             x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                             class="absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-2xl border border-gray-100 py-3 z-[120]">
                            
                            <div class="px-5 py-3 border-b border-gray-50 mb-2">
                                <div class="text-xs font-black text-secondary tracking-tight truncate">{{ auth()->user()->name }}</div>
                                <div class="text-[10px] text-secondary/40 font-medium truncate">{{ auth()->user()->email }}</div>
                            </div>

                            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-5 py-2.5 text-xs font-bold text-secondary hover:bg-primary/5 hover:text-primary transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                                Dashboard
                            </a>
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-5 py-2.5 text-xs font-bold text-secondary hover:bg-primary/5 hover:text-primary transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                Edit Profil
                            </a>
                            <a href="{{ route('order.history') }}" class="flex items-center gap-3 px-5 py-2.5 text-xs font-bold text-secondary hover:bg-primary/5 hover:text-primary transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg>
                                Riwayat Pesanan
                            </a>
                            
                            <div class="h-px bg-gray-50 my-2"></div>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center gap-3 w-full px-5 py-2.5 text-xs font-bold text-red-500 hover:bg-red-50 transition-all text-left">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-xs font-bold rounded-full text-white bg-primary hover:bg-secondary shadow-lg shadow-primary/25 transition-all active:scale-95 cursor-pointer ml-4">
                        Mulai Belajar
                    </a>
                @endauth
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
            <a href="{{ url('/') }}" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Beranda</a>
            
            <!-- Mobile Produk Accordion -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">
                    Produk
                    <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" class="pl-8 pr-4 py-2 space-y-2 bg-gray-50/50">
                    <a href="{{ route('produk.snbp') }}" class="block text-xs font-bold text-secondary/70 py-1">Analisis SNBP</a>
                    <a href="{{ route('produk.utbk') }}" class="block text-xs font-bold text-secondary/70 py-1">Tryout UTBK</a>
                    <a href="{{ route('produk.sd') }}" class="block text-xs font-bold text-secondary/70 py-1">4 - 6 SD</a>
                    <a href="{{ route('produk.smp') }}" class="block text-xs font-bold text-secondary/70 py-1">7 - 9 SMP</a>
                    <a href="{{ route('produk.sma') }}" class="block text-xs font-bold text-secondary/70 py-1">10 - 11 SMA</a>
                    <a href="{{ route('produk.sma_utbk') }}" class="block text-xs font-bold text-secondary/70 py-1">12 SMA & UTBK</a>
                    <a href="{{ route('produk.alumni') }}" class="block text-xs font-bold text-secondary/70 py-1 font-black">Alumni</a>
                </div>
            </div>

            <!-- Mobile Bisnis Accordion -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">
                    Bisnis
                    <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" class="pl-8 pr-4 py-2 space-y-2 bg-gray-50/50">
                    <a href="{{ route('bisnis.layanan') }}" class="block text-xs font-bold text-secondary/70 py-1">Layanan Bisnis</a>
                    <a href="{{ route('bisnis.educators') }}" class="block text-xs font-bold text-secondary/70 py-1">Future Educators</a>
                    <a href="{{ route('bisnis.tentang') }}" class="block text-xs font-bold text-secondary/70 py-1 font-black">Tentang Kami</a>
                </div>
            </div>

            <a href="{{ route('paket.index') }}" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Paket Belajar</a>
            <a href="{{ route('testimoni') }}" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Testimoni</a>
            <a href="{{ route('blog') }}" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Blog</a>
            
            <div class="pt-3 px-4 space-y-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="block w-full text-center px-6 py-3 border border-transparent text-sm font-bold rounded-xl text-white bg-primary shadow-lg shadow-primary/25">Dashboard</a>
                    <a href="{{ route('profile.edit') }}" class="block w-full text-center px-6 py-3 border border-gray-100 text-sm font-bold rounded-xl text-secondary bg-gray-50">Edit Profil</a>
                    <a href="{{ route('order.history') }}" class="block w-full text-center px-6 py-3 border border-gray-100 text-sm font-bold rounded-xl text-secondary bg-gray-50">Riwayat Pesanan</a>
                    <form method="POST" action="{{ route('logout') }}" class="block w-full">
                        @csrf
                        <button type="submit" class="w-full text-center px-6 py-3 border border-red-100 text-sm font-bold rounded-xl text-red-500 bg-red-50">Keluar</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block w-full text-center px-6 py-3 border border-transparent text-sm font-bold rounded-full text-white bg-primary shadow-lg shadow-primary/25">Mulai Belajar</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
