@extends('layouts.app')

@section('title', 'Riwayat Pesanan - OneLearning')

@section('content')
<div class="min-h-screen bg-[#F8FAFC] pb-24 pt-32">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h1 class="text-3xl md:text-4xl font-black text-secondary tracking-tight">Riwayat <span class="text-primary italic">Pesanan</span>.</h1>
            <p class="text-sm font-medium text-secondary/40 mt-1">Pantau status pembayaran dan aktifasi paket belajar Anda.</p>
        </div>

        @if(session('success'))
        <div class="bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-2xl flex items-center gap-3 mb-8 animate-fade-up">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
            <span class="text-sm font-bold">{{ session('success') }}</span>
        </div>
        @endif

        <div class="space-y-6">
            @forelse($transactions as $item)
            <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 group flex flex-col md:flex-row md:items-center justify-between gap-8">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-primary/5 rounded-[1.5rem] flex items-center justify-center text-primary border border-primary/5 flex-shrink-0">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 11-8 0v4M5 9h12l1 12H4L5 9z" /></svg>
                    </div>
                    <div>
                        <div class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.2em] mb-1">Invoice: {{ $item->reference_id }}</div>
                        <h3 class="text-lg font-black text-secondary italic">{{ $item->buyable->name ?? $item->buyable->title }}</h3>
                        <div class="flex items-center gap-4 mt-2">
                            <span class="text-[11px] font-bold text-secondary/40">{{ $item->created_at->format('d M Y, H:i') }}</span>
                            <span class="text-[11px] font-black text-primary">Rp {{ number_format($item->amount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:items-end gap-4">
                    @if($item->status === 'pending')
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="px-4 py-1.5 bg-yellow-50 text-yellow-600 text-[10px] font-black uppercase tracking-widest rounded-full">Menunggu Pembayaran</span>
                            <a href="{{ route('order.payment', $item->reference_id) }}" class="px-6 py-2.5 bg-secondary text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-primary transition-all">Bayar Sekarang</a>
                        </div>
                    @elseif($item->status === 'verification')
                        <span class="px-4 py-1.5 bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-widest rounded-full animate-pulse">Sedang Diverifikasi</span>
                    @elseif($item->status === 'success')
                        <div class="flex items-center gap-4">
                            <span class="px-4 py-1.5 bg-green-50 text-green-600 text-[10px] font-black uppercase tracking-widest rounded-full">Pembayaran Berhasil</span>
                            <a href="{{ route('dashboard') }}" class="px-6 py-2.5 bg-gray-50 text-secondary text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-gray-100 transition-all">Mulai Belajar</a>
                        </div>
                    @else
                        <span class="px-4 py-1.5 bg-red-50 text-red-600 text-[10px] font-black uppercase tracking-widest rounded-full">Transaksi Gagal</span>
                    @endif
                </div>
            </div>
            @empty
            <div class="py-24 bg-white rounded-[3rem] border-2 border-dashed border-gray-100 text-center">
                <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-secondary/10">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 11-8 0v4M5 9h12l1 12H4L5 9z" /></svg>
                </div>
                <h4 class="text-xl font-black text-secondary/40 italic">Belum ada riwayat pesanan</h4>
                <p class="text-sm text-secondary/20 font-medium max-w-xs mx-auto mt-2">Pilih paket belajarmu sekarang dan mulai raih kampus impianmu!</p>
                <a href="{{ route('paket.index') }}" class="px-10 py-4 bg-primary text-white text-xs font-black uppercase tracking-widest rounded-2xl mt-8 inline-block shadow-xl shadow-primary/20 hover:bg-secondary transition-all active:scale-95">Lihat Katalog Paket</a>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
