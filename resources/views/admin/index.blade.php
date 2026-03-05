@extends('layouts.app')

@section('title', 'Admin Dashboard - OneLearning')

@section('content')
<div class="min-h-screen bg-gray-50/50 pb-20">
    <!-- Admin Header -->
    <div class="bg-white border-b border-gray-100 mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-black text-secondary tracking-tight">Dashboard <span class="text-primary italic">Admin</span></h1>
                    <p class="text-sm font-medium text-secondary/50 mt-1">Selamat datang kembali, {{ Auth::user()->name }}. Kelola platform OneLearning Anda.</p>
                </div>
                <div class="flex items-center gap-3">
                    <button class="px-5 py-2.5 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-xl shadow-lg shadow-primary/20 hover:bg-secondary transition-all">
                        Unduh Laporan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Stat 1 -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                    <span class="text-xs font-black text-green-500 bg-green-50 px-2 py-1 rounded-lg">+12%</span>
                </div>
                <div class="text-2xl font-black text-secondary">1,284</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mt-1">Total Siswa</div>
            </div>

            <!-- Stat 2 -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-accent/15 rounded-2xl flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-secondary transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                    </div>
                    <span class="text-xs font-black text-primary bg-primary/5 px-2 py-1 rounded-lg">85 Aktif</span>
                </div>
                <div class="text-2xl font-black text-secondary">156</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mt-1">Total Tryout</div>
            </div>

            <!-- Stat 3 -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <span class="text-xs font-black text-green-500 bg-green-50 px-2 py-1 rounded-lg">Rp 4.2M</span>
                </div>
                <div class="text-2xl font-black text-secondary">IDR 42.5M</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mt-1">Pendapatan (Bulan Ini)</div>
            </div>

            <!-- Stat 4 -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-500 group-hover:bg-green-500 group-hover:text-white transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <span class="text-xs font-black text-green-500 bg-green-50 px-2 py-1 rounded-lg">98% Lolos</span>
                </div>
                <div class="text-2xl font-black text-secondary">4.9</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mt-1">Kepuasan Siswa</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activity Table -->
            <div class="lg:col-span-2 bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
                <div class="p-8 border-b border-gray-50 flex items-center justify-between">
                    <h3 class="text-lg font-black text-secondary tracking-tight">Pendaftaran <span class="text-primary italic">Terbaru</span></h3>
                    <a href="#" class="text-[10px] font-black text-primary uppercase tracking-widest hover:text-secondary transition-colors">Lihat Semua</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="px-8 py-4 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Siswa</th>
                                <th class="px-8 py-4 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Target</th>
                                <th class="px-8 py-4 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Status</th>
                                <th class="px-8 py-4 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @for($i=0; $i<5; $i++)
                            <tr class="hover:bg-gray-50/30 transition-colors">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-black text-xs italic">SR</div>
                                        <div>
                                            <div class="text-sm font-bold text-secondary">Siswa Rinto</div>
                                            <div class="text-[10px] text-secondary/40 font-medium lowercase leading-none">siswa@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="text-xs font-bold text-secondary italic">UTBK-SNBT 2024</span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-green-50 text-green-600 text-[10px] font-black uppercase tracking-wider">
                                        <span class="w-1 h-1 bg-green-500 rounded-full"></span> Terbayar
                                    </span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="text-[11px] text-secondary/40 font-bold">2 Menit Lalu</span>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Actions / Sidebar -->
            <div class="space-y-6">
                <!-- Profile Action -->
                <div class="bg-secondary p-8 rounded-[2.5rem] shadow-2xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform"></div>
                    <div class="relative z-10 text-white">
                        <div class="text-[10px] font-black text-primary uppercase tracking-[0.3em] mb-2">Manajemen Profil</div>
                        <h4 class="text-xl font-black mb-4 italic">Butuh bantuan pengaturan?</h4>
                        <p class="text-white/60 text-xs font-medium leading-relaxed mb-6">Sesuaikan konfigurasi sistem atau buat akun admin baru untuk tim Anda.</p>
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center justify-center w-full py-3 bg-white text-secondary font-black text-[10px] uppercase tracking-widest rounded-xl hover:bg-primary hover:text-white transition-all">
                            Pengaturan Akun
                        </a>
                    </div>
                </div>

                <!-- Server Status -->
                <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm">
                    <h4 class="text-sm font-black text-secondary uppercase tracking-widest mb-6">Status Sistem</h4>
                    <div class="space-y-5">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-secondary/50 italic">Server API</span>
                            <span class="text-xs font-black text-green-500 flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> Online</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-secondary/50 italic">Database</span>
                            <span class="text-xs font-black text-green-500 flex items-center gap-1.5"><span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> Optimal</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-secondary/50 italic">Penyimpanan</span>
                            <span class="text-xs font-black text-secondary tracking-tighter">42.5 / 100 GB</span>
                        </div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[42.5%] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
