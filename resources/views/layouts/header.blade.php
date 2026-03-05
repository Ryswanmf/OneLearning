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
                <a href="/" class="text-xs font-bold text-secondary/80 hover:text-primary transition-colors">Beranda</a>
                
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
                                    <a href="{{ route('produk.sd') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                        4 - 6 SD
                                    </a>
                                    <a href="{{ route('produk.smp') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                        7 - 9 SMP
                                    </a>
                                    <a href="{{ route('produk.sma') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                        10 - 11 SMA
                                    </a>
                                    <a href="{{ route('produk.sma_utbk') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all">
                                        12 SMA & UTBK
                                    </a>
                                    <a href="{{ route('produk.alumni') }}" class="flex items-center justify-between text-[13px] font-bold text-secondary/80 hover:text-primary hover:bg-primary/5 px-3 py-2 rounded-lg transition-all text-primary">
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
            <a href="/" class="block px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">Beranda</a>
            
            <!-- Mobile Produk Accordion -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-2 text-sm font-bold text-secondary hover:bg-primary/5 hover:text-primary rounded-lg">
                    Produk
                    <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" class="pl-8 pr-4 py-2 space-y-2 bg-gray-50/50">
                    <a href="{{ route('produk.snbp') }}" class="block text-xs font-bold text-secondary/70 py-1 italic">Analisis SNBP</a>
                    <a href="{{ route('produk.utbk') }}" class="block text-xs font-bold text-secondary/70 py-1 italic">Tryout UTBK</a>
                    <div class="h-px bg-gray-200 my-2"></div>
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
            <div class="pt-3 px-4">
                <a href="#" class="block w-full text-center px-6 py-3 border border-transparent text-sm font-bold rounded-full text-white bg-primary shadow-lg shadow-primary/25">
                    Mulai Belajar
                </a>
            </div>
        </div>
    </div>
</nav>
