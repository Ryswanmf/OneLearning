@extends('layouts.app')

@section('title', 'Checkout - ' . ($item->name ?? $item->title))

@section('content')
<div class="min-h-screen bg-gray-50 py-20 pt-32">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-[3.5rem] border border-gray-100 shadow-2xl overflow-hidden animate-fade-up">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Left: Info -->
                <div class="p-12 bg-secondary text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                    <div class="relative z-10">
                        <span class="text-[10px] font-black text-primary uppercase tracking-[0.2em] mb-6 inline-block">Order Summary</span>
                        <h1 class="text-3xl font-black italic mb-8">{{ $item->name ?? $item->title }}</h1>
                        
                        <div class="space-y-6">
                            <div class="flex justify-between border-b border-white/10 pb-4">
                                <span class="text-white/50 text-sm">Harga Paket</span>
                                <span class="font-bold">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between border-b border-white/10 pb-4">
                                <span class="text-white/50 text-sm">Biaya Layanan</span>
                                <span class="font-bold text-primary">Gratis</span>
                            </div>
                            <div class="flex justify-between pt-4">
                                <span class="text-lg font-black italic">Total Bayar</span>
                                <span class="text-2xl font-black text-primary">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <div class="mt-12 p-6 bg-white/5 rounded-[2rem] border border-white/10">
                            <p class="text-xs text-white/60 leading-relaxed font-medium italic">"Investasi terbaik adalah investasi pada pendidikan diri sendiri. Mulai langkah suksesmu hari ini."</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="p-12">
                    <h3 class="text-xl font-black text-secondary mb-8 italic">Konfirmasi Pemesanan</h3>
                    <div class="space-y-8">
                        <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                            <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-2">Nama Akun</div>
                            <div class="text-sm font-bold text-secondary">{{ auth()->user()->name }}</div>
                        </div>
                        <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
                            <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-2">Email Terdaftar</div>
                            <div class="text-sm font-bold text-secondary">{{ auth()->user()->email }}</div>
                        </div>

                        <form action="{{ route('order.store', ['type' => $type, 'id' => $item->slug ?? $item->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full py-5 bg-primary text-white font-black text-sm uppercase tracking-[0.2em] rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all transform hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-3">
                                Lanjut Ke Pembayaran
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                            </button>
                        </form>
                        <p class="text-[10px] text-center text-secondary/30 font-medium">Dengan mengklik tombol di atas, Anda menyetujui Syarat & Ketentuan kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
