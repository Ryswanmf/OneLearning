@extends('layouts.admin')

@section('title', 'Detail Transaksi - ' . $transaction->reference_id)

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.transactions.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight italic">Detail <span class="text-primary not-italic">Transaksi</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Invoice: {{ $transaction->reference_id }}</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 pb-20">
        <!-- Info Transaksi -->
        <div class="lg:col-span-2 space-y-8">
            <div class="bg-white p-10 rounded-[3rem] border border-gray-100 shadow-sm space-y-10">
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-2">Nama Siswa</div>
                        <div class="text-sm font-bold text-secondary">{{ $transaction->user->name }}</div>
                        <div class="text-xs font-medium text-secondary/40">{{ $transaction->user->email }}</div>
                    </div>
                    <div>
                        <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-2">Paket Belajar</div>
                        <div class="text-sm font-bold text-primary italic">{{ $transaction->buyable->name ?? $transaction->buyable->title }}</div>
                        <div class="text-xs font-medium text-secondary/40">Harga: Rp {{ number_format($transaction->amount, 0, ',', '.') }}</div>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-50">
                    <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-4">Bukti Pembayaran</div>
                    @if($transaction->proof_of_payment)
                        <div class="rounded-[2rem] overflow-hidden border border-gray-100 bg-gray-50 group relative">
                            <img src="{{ asset('storage/' . $transaction->proof_of_payment) }}" class="w-full h-auto">
                            <a href="{{ asset('storage/' . $transaction->proof_of_payment) }}" target="_blank" class="absolute inset-0 bg-secondary/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity text-white font-black text-xs uppercase tracking-widest backdrop-blur-sm">Lihat Gambar Penuh</a>
                        </div>
                    @else
                        <div class="py-12 bg-gray-50 rounded-[2rem] border-2 border-dashed border-gray-100 text-center">
                            <p class="text-xs font-bold text-secondary/30 italic">Belum ada bukti yang diunggah.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Form Verifikasi -->
        <div class="lg:col-span-1">
            <div class="bg-white p-8 rounded-[3rem] border border-gray-100 shadow-xl sticky top-28">
                <h3 class="text-sm font-black text-secondary uppercase tracking-[0.2em] mb-8">Aksi Verifikasi</h3>
                
                <form action="{{ route('admin.transactions.update', $transaction->id) }}" method="POST" class="space-y-6">
                    @csrf @method('PUT')
                    <div class="space-y-2">
                        <x-input-label for="status" value="Status Transaksi" />
                        <select name="status" class="block w-full bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 rounded-xl h-12 px-4 font-bold text-xs">
                            <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="verification" {{ $transaction->status == 'verification' ? 'selected' : '' }}>Verifikasi</option>
                            <option value="success" {{ $transaction->status == 'success' ? 'selected' : '' }}>Berhasil (Aktifkan Paket)</option>
                            <option value="failed" {{ $transaction->status == 'failed' ? 'selected' : '' }}>Gagal / Tolak</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <x-input-label for="admin_note" value="Catatan Admin (Opsional)" />
                        <textarea name="admin_note" rows="4" class="block w-full bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 rounded-2xl p-4 font-medium text-xs">{{ $transaction->admin_note }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-secondary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-secondary/20 hover:bg-primary transition-all">
                        Update Status
                    </button>
                </form>

                @if($transaction->status === 'success')
                <div class="mt-6 p-4 bg-green-50 rounded-xl border border-green-100 flex items-center gap-3">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span class="text-[10px] font-bold text-green-700 uppercase">Paket Sudah Aktif</span>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
