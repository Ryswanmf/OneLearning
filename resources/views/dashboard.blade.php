@extends('layouts.app')

@section('title', 'Dashboard Siswa - OneLearning')

@section('content')
<div class="min-h-screen bg-[#F8FAFC] pb-24">
    <!-- Premium Header Section -->
    <div class="relative bg-secondary pt-16 pb-32 overflow-hidden">
        <!-- Abstract Decorations -->
        <div class="absolute inset-0 bg-primary/5 mix-blend-overlay"></div>
        <div class="absolute -top-24 -right-24 w-[500px] h-[500px] bg-primary/20 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute -bottom-24 -left-24 w-[400px] h-[400px] bg-accent/10 rounded-full blur-[100px]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                <!-- User Profile Intro -->
                <div class="flex items-center gap-8 animate-fade-up">
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-tr from-primary to-accent rounded-[2.2rem] blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                        <div class="relative w-28 h-24 rounded-[2rem] bg-white p-1.5 shadow-2xl transform transition-transform duration-500 hover:scale-105">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=1E3A8A&color=fff&size=128&bold=true" class="w-full h-full rounded-[1.8rem] object-cover">
                        </div>
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 rounded-lg border border-white/10 mb-3 backdrop-blur-sm">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full animate-ping"></span>
                            <span class="text-[9px] font-black text-white uppercase tracking-[0.2em]">Student Active</span>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight leading-tight">
                            Selamat Datang, <br class="sm:hidden">
                            <span class="text-primary italic">{{ explode(' ', $user->name)[0] }}!</span>
                        </h1>
                        <p class="text-white/50 font-medium mt-2 text-lg">Waktunya asah kemampuan dan raih skor terbaikmu.</p>
                    </div>
                </div>

                <!-- Quick Action / Status -->
                <div class="flex items-center gap-4 animate-fade-up" style="animation-delay: 100ms">
                    <div class="hidden lg:block text-right">
                        <div class="text-[10px] font-black text-white/30 uppercase tracking-[0.2em] mb-1">Terakhir Login</div>
                        <div class="text-sm font-bold text-white">{{ now()->format('d M Y, H:i') }} WIB</div>
                    </div>
                    <div class="h-12 w-px bg-white/10 hidden lg:block"></div>
                    <a href="{{ route('profile.edit') }}" class="p-4 bg-white/10 hover:bg-white/20 border border-white/10 rounded-2xl text-white transition-all group">
                        <svg class="w-6 h-6 group-hover:rotate-45 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.756 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Dashboard Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- LEFT COLUMN: Profile & Progress (4 Col) -->
            <div class="lg:col-span-4 space-y-8 animate-fade-up" style="animation-delay: 200ms">
                <!-- Stats Overview -->
                <div class="bg-white p-8 rounded-[3rem] border border-gray-100 shadow-xl shadow-secondary/5">
                    <h3 class="text-sm font-black text-secondary uppercase tracking-[0.2em] mb-8 flex items-center gap-3">
                        <span class="w-6 h-6 bg-primary rounded-lg flex items-center justify-center text-white text-[10px]">01</span>
                        Statistik Belajar
                    </h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="space-y-1">
                            <div class="text-3xl font-black text-secondary">{{ $stats['total_tryout'] }}</div>
                            <div class="text-[10px] font-bold text-secondary/30 uppercase tracking-widest leading-tight">Total <br> Tryout</div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-3xl font-black text-primary italic">{{ $stats['average_score'] }}</div>
                            <div class="text-[10px] font-bold text-secondary/30 uppercase tracking-widest leading-tight">Rata-rata <br> Skor IRT</div>
                        </div>
                    </div>
                    
                    <div class="mt-10 pt-8 border-t border-gray-50">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-black text-secondary italic">Ranking Nasional</span>
                            <span class="text-[10px] font-bold text-primary bg-primary/5 px-2 py-1 rounded">Update 1 Jam Lalu</span>
                        </div>
                        <div class="flex items-end gap-3">
                            <div class="text-5xl font-black text-secondary tracking-tighter">{{ $stats['rank'] }}</div>
                            <div class="text-sm font-bold text-secondary/30 mb-1">/ 12.405 Siswa</div>
                        </div>
                        <!-- Simple Progress Bar -->
                        <div class="mt-6 h-2 bg-gray-50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-primary to-accent w-[85%] rounded-full shadow-sm"></div>
                        </div>
                        <p class="text-[10px] text-secondary/40 font-medium mt-3 italic text-center">Kamu berada di peringkat 15% teratas secara nasional!</p>
                    </div>
                </div>

                <!-- Latest Announcement -->
                <div class="bg-white p-8 rounded-[3rem] border border-gray-100 shadow-lg relative overflow-hidden group">
                    <div class="absolute -right-4 -bottom-4 opacity-[0.03] transform group-hover:scale-110 transition-transform duration-700">
                        <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 24 24"><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" /></svg>
                    </div>
                    <div class="relative z-10">
                        <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center text-accent mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        </div>
                        <h4 class="text-sm font-black text-secondary uppercase tracking-[0.2em] mb-3 italic">Info Terbaru</h4>
                        <p class="text-sm text-secondary/60 font-medium leading-relaxed">Tryout Akbar UTBK 2024 Jilid III akan dibuka 3 hari lagi. Pastikan kuotamu masih tersedia!</p>
                        <a href="#" class="mt-6 inline-flex items-center gap-2 text-[10px] font-black text-primary uppercase tracking-widest hover:gap-3 transition-all">Pelajari Detail <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg></a>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Main Content (8 Col) -->
            <div class="lg:col-span-8 space-y-10 animate-fade-up" style="animation-delay: 300ms">
                
                <!-- My Active Packages -->
                <div class="space-y-6">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-2xl font-black text-secondary tracking-tight">Lanjutkan <span class="text-primary italic">Belajarmu</span></h2>
                        <div class="flex items-center gap-2 text-[10px] font-black text-secondary/30 uppercase tracking-widest">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span> 2 Paket Aktif
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @forelse($myPackages as $package)
                        <div class="group bg-white p-10 rounded-[3.5rem] border border-gray-100 shadow-xl shadow-secondary/5 hover:shadow-2xl hover:shadow-primary/10 transition-all duration-700 flex flex-col justify-between relative overflow-hidden min-h-[320px]">
                            <!-- Glass Decoration -->
                            <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/5 rounded-full blur-2xl group-hover:bg-primary/10 transition-all"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center justify-between mb-8">
                                    <span class="px-4 py-1.5 bg-primary/5 text-primary text-[10px] font-black uppercase tracking-[0.2em] rounded-full border border-primary/5">{{ $package->category }}</span>
                                    <button class="text-secondary/20 hover:text-primary transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" /></svg>
                                    </button>
                                </div>
                                <h3 class="text-2xl font-black text-secondary mb-4 leading-tight group-hover:text-primary transition-colors duration-500 italic">{{ $package->title }}</h3>
                                <div class="flex items-center gap-6 text-secondary/40 text-[11px] font-bold">
                                    <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-width="2"/></svg> 12 Materi</span>
                                    <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"/></svg> 5 Tryout</span>
                                </div>
                            </div>
                            
                            <div class="relative z-10 mt-10">
                                <a href="#" class="w-full py-5 bg-secondary text-white text-center font-black text-xs uppercase tracking-[0.2em] rounded-[1.8rem] hover:bg-primary shadow-2xl shadow-secondary/20 transition-all flex items-center justify-center gap-3 active:scale-95 group-hover:gap-4 duration-500">
                                    Mulai Ujian
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                </a>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-full py-20 bg-white rounded-[4rem] border-2 border-dashed border-gray-100 text-center animate-fade-up">
                            <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-secondary/10">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                            </div>
                            <h4 class="text-lg font-black text-secondary/40 italic">Belum ada paket aktif</h4>
                            <p class="text-sm text-secondary/20 font-medium max-w-xs mx-auto mt-2">Pilih paket belajarmu sekarang dan mulai raih kampus impianmu!</p>
                            <a href="/" class="px-8 py-4 bg-primary text-white text-xs font-black uppercase tracking-widest rounded-2xl mt-8 inline-block shadow-xl shadow-primary/20 hover:bg-secondary transition-all">Lihat Katalog Paket</a>
                        </div>
                        @endforelse
                    </div>
                </div>

                <!-- Recommendations List -->
                <div class="space-y-6 pt-4">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-2xl font-black text-secondary tracking-tight italic">Program <span class="text-primary not-italic">Rekomendasi</span></h2>
                    </div>

                    <div class="space-y-4">
                        @foreach($recommendedPackages as $item)
                        <div class="bg-white p-6 rounded-[2.5rem] border border-gray-50 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.05)] flex items-center gap-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 group">
                            <div class="w-24 h-24 rounded-3xl bg-gray-50 overflow-hidden flex-shrink-0 border border-gray-100">
                                <img src="{{ $item->image ?? 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=200' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                            </div>
                            <div class="flex-1">
                                <span class="text-[9px] font-black text-primary uppercase tracking-[0.2em] bg-primary/5 px-2.5 py-1 rounded-lg">{{ $item->category }}</span>
                                <h4 class="text-xl font-black text-secondary mt-2 group-hover:text-primary transition-colors duration-500 italic line-clamp-1">{{ $item->title }}</h4>
                                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mt-3">
                                    <div class="text-[11px] font-bold text-secondary/30 flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"/></svg>
                                        {{ $item->duration }}
                                    </div>
                                    <div class="text-[11px] font-bold text-primary italic bg-primary/5 px-3 py-1 rounded-full">Investasi Masa Depan Rp 49.000</div>
                                </div>
                            </div>
                            <div class="hidden md:block pr-4">
                                <a href="#" class="w-12 h-12 bg-gray-50 text-secondary border border-gray-100 rounded-2xl flex items-center justify-center hover:bg-secondary hover:text-white hover:shadow-lg transition-all duration-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
