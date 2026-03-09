@extends('layouts.app')

@section('title', 'Dashboard Siswa - OneLearning')

@push('styles')
<style>
    #student-sidebar {
        width: 280px;
        height: calc(100vh - 64px);
        position: fixed;
        left: 0;
        top: 64px;
        background-color: white;
        border-right: 1px solid #f1f5f9;
        z-index: 40;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    #main-content {
        margin-left: 280px;
        min-height: calc(100vh - 64px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .sidebar-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 24px;
        font-size: 13px;
        font-weight: 700;
        color: #64748B;
        transition: all 0.2s;
        border-radius: 16px;
        margin: 4px 16px;
    }

    .sidebar-item:hover {
        background-color: #F8FAFC;
        color: #1E3A8A;
    }

    .sidebar-item.active {
        background-color: #0EA5E9;
        color: white;
        box-shadow: 0 10px 15px -3px rgba(14, 165, 233, 0.3);
    }

    .sidebar-label {
        padding: 24px 32px 8px;
        font-size: 10px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #94A3B8;
    }

    @media (max-width: 1024px) {
        #student-sidebar {
            transform: translateX(-100%);
        }
        #student-sidebar.open {
            transform: translateX(0);
        }
        #main-content {
            margin-left: 0;
        }
    }
</style>
@endpush

@section('content')
<div class="min-h-screen bg-[#F8FAFC]" x-data="{ sidebarOpen: false }">
    
    <!-- Student Sidebar -->
    <aside id="student-sidebar" :class="sidebarOpen ? 'open' : ''" class="flex flex-col py-6">
        <div class="px-8 mb-8">
            <div class="p-6 bg-primary/5 rounded-[2rem] border border-primary/10">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-white p-1 shadow-sm border border-primary/10">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=0EA5E9&color=fff&bold=true" class="w-full h-full rounded-[0.9rem] object-cover">
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="text-[10px] font-black text-primary uppercase tracking-widest">Siswa</div>
                        <div class="text-sm font-black text-secondary truncate italic">{{ explode(' ', $user->name)[0] }}</div>
                    </div>
                </div>
                <div class="h-1 bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-primary w-[85%]"></div>
                </div>
                <div class="text-[8px] font-bold text-secondary/30 mt-2 uppercase tracking-widest">Profil Lengkap 85%</div>
            </div>
        </div>

        <div class="flex-1 overflow-y-auto">
            <div class="sidebar-label">Menu Utama</div>
            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" class="sidebar-item active">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                    Dashboard
                </a>
                <a href="#active-packages" class="sidebar-item">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                    Paket Saya
                </a>
                <a href="{{ route('order.history') }}" class="sidebar-item">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg>
                    Riwayat Pesanan
                </a>
            </nav>

            <div class="sidebar-label">Pengaturan</div>
            <nav class="space-y-1">
                <a href="{{ route('profile.edit') }}" class="sidebar-item">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    Edit Profil
                </a>
                <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-[calc(100%-32px)] mx-4 flex items-center gap-3 px-6 py-3 text-[13px] font-bold text-red-500 hover:bg-red-50 rounded-2xl transition-all text-left">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                        Keluar Akun
                    </button>
                </form>
            </nav>
        </div>

        <div class="px-8 mt-8">
            <div class="p-6 bg-secondary rounded-[2rem] text-white relative overflow-hidden group shadow-lg">
                <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white/5 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                <h4 class="text-[10px] font-black uppercase tracking-widest mb-2 opacity-50 italic">Butuh Bantuan?</h4>
                <p class="text-[11px] font-medium leading-relaxed mb-4">Hubungi kami via WhatsApp jika ada kendala.</p>
                <a href="https://wa.me/6289515915699" class="block w-full py-2.5 bg-primary text-center text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-white hover:text-primary transition-all shadow-lg shadow-primary/20">Chat Admin</a>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main id="main-content" class="p-6 lg:p-10">
        <!-- Mobile Sidebar Toggle -->
        <div class="lg:hidden flex items-center justify-between mb-8 bg-white p-4 rounded-3xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" class="w-8 h-8">
                <span class="font-black text-secondary tracking-tight">One<span class="text-primary">Learning</span></span>
            </div>
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 bg-gray-50 rounded-xl text-secondary">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- LEFT: Stats & Chart (8 Col) -->
            <div class="lg:col-span-8 space-y-10">
                <!-- Welcome Section -->
                <div class="flex items-center justify-between animate-fade-up">
                    <div>
                        <h1 class="text-3xl font-black text-secondary tracking-tight italic">Halo, <span class="text-primary not-italic">{{ explode(' ', $user->name)[0] }}!</span></h1>
                        <p class="text-secondary/40 text-sm font-medium mt-1 uppercase tracking-widest">Waktunya melampaui batas kemampuanmu hari ini.</p>
                    </div>
                </div>

                <!-- Score Progress Chart -->
                <div class="bg-white p-10 rounded-[3.5rem] border border-gray-100 shadow-xl shadow-secondary/5 relative overflow-hidden animate-fade-up" style="animation-delay: 100ms">
                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <h2 class="text-2xl font-black text-secondary tracking-tight italic">Tren <span class="text-primary not-italic">Performa</span></h2>
                            <p class="text-secondary/40 text-[10px] font-black uppercase tracking-widest mt-1">Grafik perkembangan nilai tryout kamu</p>
                        </div>
                        <div class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" /></svg>
                        </div>
                    </div>

                    @if($scoreHistory->count() > 1)
                    <div class="relative h-[300px] w-full">
                        <canvas id="scoreChart"></canvas>
                    </div>
                    @else
                    <div class="py-12 text-center bg-gray-50/50 rounded-[2.5rem] border border-dashed border-gray-200">
                        <p class="text-sm font-bold text-secondary/30 italic">Belum ada data yang cukup untuk menampilkan grafik.</p>
                        <p class="text-[10px] text-secondary/20 uppercase tracking-widest mt-2">Selesaikan minimal 2 tryout untuk melihat tren performa.</p>
                    </div>
                    @endif
                </div>

                <!-- My Active Packages -->
                <div id="active-packages" class="space-y-6 animate-fade-up" style="animation-delay: 200ms">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-2xl font-black text-secondary tracking-tight italic uppercase">Paket <span class="text-primary not-italic">Aktif</span></h2>
                        <div class="flex items-center gap-2 text-[10px] font-black text-secondary/30 uppercase tracking-widest">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span> {{ count($myPackages) }} Paket Tersedia
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @forelse($myPackages as $package)
                        <div class="group bg-white p-10 rounded-[3.5rem] border border-gray-100 shadow-xl shadow-secondary/5 hover:shadow-2xl hover:shadow-primary/10 transition-all duration-700 flex flex-col justify-between relative overflow-hidden min-h-[320px]">
                            <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/5 rounded-full blur-2xl group-hover:bg-primary/10 transition-all"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center justify-between mb-8">
                                    <span class="px-4 py-1.5 bg-primary/5 text-primary text-[10px] font-black uppercase tracking-[0.2em] rounded-full border border-primary/5">{{ $package->category ?? ($package->subject ?? 'Paket Belajar') }}</span>
                                </div>
                                <h3 class="text-2xl font-black text-secondary mb-4 leading-tight group-hover:text-primary transition-colors duration-500 italic">{{ $package->name ?? $package->title }}</h3>
                                <div class="flex items-center gap-6 text-secondary/40 text-[11px] font-bold">
                                    @if(isset($package->question_count))
                                    <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-width="2"/></svg> {{ $package->question_count }} Soal</span>
                                    @endif
                                    @if(isset($package->duration_minutes))
                                    <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"/></svg> {{ $package->duration_minutes }} Menit</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="relative z-10 mt-10">
                                @if($package->is_completed)
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center gap-2 px-4 py-2 bg-green-50 text-green-600 rounded-xl border border-green-100 justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                        <span class="text-[10px] font-black uppercase tracking-widest">Selesai Dikerjakan</span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-3">
                                        <a href="{{ route('tryout.result', ['type' => $package->type, 'id' => $package->slug]) }}" class="py-4 bg-primary text-white text-center font-black text-[10px] uppercase tracking-widest rounded-2xl hover:bg-secondary transition-all">Selesai</a>
                                        <a href="{{ route('tryout.instructions', ['type' => $package->type, 'id' => $package->slug]) }}" class="py-4 bg-gray-50 text-secondary text-center font-black text-[10px] uppercase tracking-widest rounded-2xl hover:bg-gray-100 transition-all border border-gray-100">Ulangi</a>
                                    </div>
                                </div>
                                @else
                                <a href="{{ route('tryout.instructions', ['type' => $package->type, 'id' => $package->slug]) }}" class="w-full py-5 bg-secondary text-white text-center font-black text-xs uppercase tracking-[0.2em] rounded-[1.8rem] hover:bg-primary shadow-2xl shadow-secondary/20 transition-all flex items-center justify-center gap-3 active:scale-95 group-hover:gap-4 duration-500">
                                    Mulai Ujian
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                </a>
                                @endif
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
            </div>

            <!-- RIGHT: Stats & Rank (4 Col) -->
            <div class="lg:col-span-4 space-y-8 animate-fade-up" style="animation-delay: 300ms">
                <!-- Stats Detail -->
                <div class="bg-white p-8 rounded-[3rem] border border-gray-100 shadow-xl">
                    <h3 class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.3em] mb-8 italic">Detail Statistik</h3>
                    <div class="space-y-8">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary/10 text-primary rounded-xl flex items-center justify-center"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke-width="2"/></svg></div>
                                <div><div class="text-sm font-black text-secondary">{{ $stats['total_tryout'] }}</div><div class="text-[9px] font-bold text-secondary/30 uppercase">Ujian Selesai</div></div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-accent/10 text-accent rounded-xl flex items-center justify-center"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" stroke-width="2"/></svg></div>
                                <div><div class="text-sm font-black text-secondary">{{ $stats['average_score'] }}</div><div class="text-[9px] font-bold text-secondary/30 uppercase">Skor Rata-rata</div></div>
                            </div>
                        </div>
                        
                        <div class="pt-8 border-t border-gray-50">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-[10px] font-black text-secondary uppercase tracking-widest italic">Peringkat Kamu</span>
                                <span class="text-[9px] font-bold text-primary italic underline decoration-primary/20 underline-offset-4">Lihat Leaderboard</span>
                            </div>
                            <div class="flex items-end gap-3 mb-6">
                                <div class="text-5xl font-black text-secondary tracking-tighter">{{ $stats['rank'] }}</div>
                                <div class="text-xs font-bold text-secondary/30 mb-1">/ 12.405 Peserta</div>
                            </div>
                            <div class="h-2 bg-gray-50 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-primary to-accent w-[85%] rounded-full shadow-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recommendations -->
                <div class="space-y-6">
                    <h2 class="text-xl font-black text-secondary tracking-tight italic uppercase px-4">Program <span class="text-primary not-italic">Unggulan</span></h2>
                    <div class="space-y-4">
                        @foreach($recommendedPackages as $item)
                        @php
                            $route = '#';
                            $title_low = strtolower($item->title);
                            if(Str::contains($title_low, 'snbp')) $route = route('produk.snbp');
                            elseif(Str::contains($title_low, 'utbk') && !Str::contains($title_low, 'sma')) $route = route('produk.utbk');
                            elseif(Str::contains($title_low, 'sd')) $route = route('produk.sd');
                            elseif(Str::contains($title_low, 'smp')) $route = route('produk.smp');
                            elseif(Str::contains($title_low, 'sma') && Str::contains($title_low, 'utbk')) $route = route('produk.sma_utbk');
                            elseif(Str::contains($title_low, 'sma')) $route = route('produk.sma');
                            elseif(Str::contains($title_low, 'alumni')) $route = route('produk.alumni');
                        @endphp
                        <a href="{{ $route }}" class="bg-white p-5 rounded-[2rem] border border-gray-50 shadow-sm hover:shadow-xl transition-all duration-500 group flex items-center gap-5">
                            <div class="w-16 h-16 rounded-2xl bg-gray-50 overflow-hidden flex-shrink-0 border border-gray-100">
                                <img src="{{ $item->image ?? 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=200' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-black text-secondary truncate group-hover:text-primary transition-colors italic leading-tight">{{ $item->title }}</h4>
                                <div class="text-[9px] font-bold text-secondary/30 mt-1 uppercase tracking-widest">{{ $item->duration }}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    @if($scoreHistory->count() > 1)
    const ctx = document.getElementById('scoreChart').getContext('2d');
    const data = @json($scoreHistory);
    
    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(14, 165, 233, 0.2)');
    gradient.addColorStop(1, 'rgba(14, 165, 233, 0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.map(item => item.date),
            datasets: [{
                label: 'Skor Tryout',
                data: data.map(item => item.score),
                borderColor: '#0EA5E9',
                backgroundColor: gradient,
                borderWidth: 4,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#0EA5E9',
                pointBorderWidth: 2,
                pointRadius: 6,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: '#0EA5E9',
                pointHoverBorderColor: '#fff',
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#1E3A8A',
                    titleFont: { family: 'Instrument Sans', size: 12, weight: 'bold' },
                    bodyFont: { family: 'Instrument Sans', size: 14, weight: 'bold' },
                    padding: 12,
                    cornerRadius: 12,
                    displayColors: false,
                    callbacks: {
                        label: function(context) {
                            return 'Skor: ' + context.parsed.y;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 1000,
                    grid: { color: 'rgba(0,0,0,0.03)', drawBorder: false },
                    ticks: {
                        font: { family: 'Instrument Sans', size: 10, weight: 'bold' },
                        color: '#94A3B8',
                        stepSize: 200
                    }
                },
                x: {
                    grid: { display: false },
                    ticks: {
                        font: { family: 'Instrument Sans', size: 10, weight: 'bold' },
                        color: '#94A3B8'
                    }
                }
            }
        }
    });
    @endif
});
</script>
@endpush
