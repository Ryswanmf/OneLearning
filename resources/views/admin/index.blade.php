@extends('layouts.admin')

@section('title', 'Dashboard - Admin OneLearning')

@section('content')
<div class="space-y-10">
    <!-- Welcome Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div>
            <h2 class="text-3xl font-black text-secondary leading-tight tracking-tight">Ringkasan <span class="text-primary italic">Platform</span>.</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Pantau perkembangan OneLearning secara real-time dari sini.</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="flex items-center gap-2 px-5 py-3 bg-white border border-gray-100 rounded-2xl text-xs font-black text-secondary/60 hover:text-primary hover:border-primary/20 transition-all shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                Filter Periode
            </button>
            <button class="flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-secondary shadow-xl shadow-primary/20 transition-all active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                Buat Tryout Baru
            </button>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all group overflow-hidden relative">
            <div class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-full -mr-12 -mt-12 group-hover:scale-110 transition-transform"></div>
            <div class="relative z-10">
                <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </div>
                <div class="text-3xl font-black text-secondary tracking-tighter">1,284</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.2em] mt-1">Siswa Terdaftar</div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all group overflow-hidden relative">
            <div class="absolute top-0 right-0 w-24 h-24 bg-accent/10 rounded-full -mr-12 -mt-12 group-hover:scale-110 transition-transform"></div>
            <div class="relative z-10">
                <div class="w-12 h-12 bg-accent/15 rounded-2xl flex items-center justify-center text-accent mb-6 group-hover:bg-accent group-hover:text-secondary transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                </div>
                <div class="text-3xl font-black text-secondary tracking-tighter">156</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.2em] mt-1">Paket Tryout</div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all group overflow-hidden relative">
            <div class="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-full -mr-12 -mt-12 group-hover:scale-110 transition-transform"></div>
            <div class="relative z-10">
                <div class="w-12 h-12 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary mb-6 group-hover:bg-secondary group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div class="text-3xl font-black text-secondary tracking-tighter">IDR 42.5M</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.2em] mt-1">Omzet Bulan Ini</div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all group overflow-hidden relative">
            <div class="absolute top-0 right-0 w-24 h-24 bg-green-500/5 rounded-full -mr-12 -mt-12 group-hover:scale-110 transition-transform"></div>
            <div class="relative z-10">
                <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-500 mb-6 group-hover:bg-green-500 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div class="text-3xl font-black text-secondary tracking-tighter">4.9/5</div>
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.2em] mt-1">Rating Kepuasan</div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Aktivitas Terbaru -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
                <div class="p-8 border-b border-gray-50 flex items-center justify-between">
                    <h3 class="text-lg font-black text-secondary">Pendaftaran <span class="text-primary italic">Terbaru</span></h3>
                    <button class="text-[10px] font-black text-primary uppercase tracking-widest hover:text-secondary transition-colors">Lihat Semua Data</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="px-8 py-4 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Siswa</th>
                                <th class="px-8 py-4 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Program</th>
                                <th class="px-8 py-4 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @for($i=0; $i<4; $i++)
                            <tr class="group hover:bg-gray-50/30 transition-all">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center font-black text-xs text-secondary/40 italic">S</div>
                                        <div>
                                            <div class="text-sm font-bold text-secondary">Nama Siswa {{ $i+1 }}</div>
                                            <div class="text-[10px] text-secondary/30 font-medium">siswa{{ $i }}@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/5 text-primary text-[10px] font-black uppercase tracking-wider">
                                        UTBK-SNBT
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-center">
                                    <button class="p-2 text-secondary/20 hover:text-primary transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                    </button>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Sidebar Info -->
        <div class="space-y-6">
            <div class="bg-secondary p-8 rounded-[2.5rem] shadow-2xl relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform duration-700"></div>
                <div class="relative z-10">
                    <h4 class="text-xl font-black text-white mb-4 italic">Update Landing Page?</h4>
                    <p class="text-white/50 text-xs font-medium leading-relaxed mb-8">Anda bisa mengubah konten hero, testimoni, dan paket belajar langsung dari panel ini.</p>
                    <button class="w-full py-4 bg-white text-secondary font-black text-[10px] uppercase tracking-widest rounded-2xl hover:bg-primary hover:text-white transition-all shadow-xl">
                        Mulai Kelola Konten
                    </button>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm">
                <h4 class="text-sm font-black text-secondary uppercase tracking-widest mb-6">Status Sistem</h4>
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-xs font-bold text-secondary/40 italic">API Engine</span>
                            <span class="text-[10px] font-black text-green-500 uppercase">Stable</span>
                        </div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-green-500 h-full w-[98%]"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-xs font-bold text-secondary/40 italic">Storage</span>
                            <span class="text-[10px] font-black text-secondary/60 uppercase">42% Used</span>
                        </div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[42%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
