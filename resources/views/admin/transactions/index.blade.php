@extends('layouts.admin')

@section('title', 'Daftar Transaksi - Admin')

@section('content')
<div class="space-y-8">
    <div>
        <h2 class="text-3xl font-black text-secondary tracking-tight">Daftar <span class="text-primary italic">Pesanan</span>.</h2>
        <p class="text-sm font-medium text-secondary/40 mt-1">Kelola dan verifikasi pembayaran siswa secara manual.</p>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-2xl flex items-center gap-3">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
        <span class="text-sm font-bold">{{ session('success') }}</span>
    </div>
    @endif

    <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-gray-50/50">
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Siswa & Paket</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Invoice</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Nominal</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Status</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($transactions as $item)
                    <tr class="group hover:bg-gray-50/30 transition-all">
                        <td class="px-8 py-6">
                            <div class="text-sm font-black text-secondary">{{ $item->user->name }}</div>
                            <div class="text-[10px] text-primary font-bold uppercase tracking-widest">
                                {{ $item->buyable->name ?? ($item->buyable->title ?? 'N/A') }}
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="text-xs font-bold text-secondary italic">{{ $item->reference_id }}</div>
                            <div class="text-[10px] text-secondary/30 mt-1">{{ $item->created_at->format('d/m/Y H:i') }}</div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <div class="text-sm font-black text-secondary">Rp {{ number_format($item->amount, 0, ',', '.') }}</div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <form action="{{ route('admin.transactions.update', $item->id) }}" method="POST" class="inline-block">
                                @csrf @method('PUT')
                                <select name="status" onchange="this.form.submit()" class="text-[9px] font-black uppercase tracking-wider rounded-lg border-none bg-gray-100 focus:ring-0 cursor-pointer {{ $item->status == 'success' ? 'text-green-600 bg-green-50' : ($item->status == 'failed' ? 'text-red-600 bg-red-50' : 'text-yellow-600 bg-yellow-50') }}">
                                    <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="success" {{ $item->status == 'success' ? 'selected' : '' }}>Success</option>
                                    <option value="failed" {{ $item->status == 'failed' ? 'selected' : '' }}>Failed</option>
                                </select>
                            </form>
                        </td>
                        <td class="px-8 py-6 text-right">
                             <a href="{{ route('admin.transactions.show', $item->id) }}" class="px-4 py-2 bg-gray-50 hover:bg-primary hover:text-white text-secondary rounded-xl text-[10px] font-black uppercase tracking-widest transition-all">
                                Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-20 text-center">
                            <p class="text-sm font-bold text-secondary/30">Belum ada data transaksi.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($transactions->hasPages())
        <div class="px-8 py-6 border-t border-gray-50">
            {{ $transactions->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
