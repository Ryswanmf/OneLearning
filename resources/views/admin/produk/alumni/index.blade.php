@extends('layouts.admin')

@section('title', 'Kelola Tryout Alumni - OneLearning')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">Tryout <span class="text-primary italic">Alumni</span>.</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Kelola bank soal dan simulasi ujian khusus untuk alumni (Linjur/Gapyear).</p>
        </div>
        <a href="{{ route('admin.alumni.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-secondary shadow-xl shadow-primary/20 transition-all active:scale-95">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
            Tambah Paket
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-2xl flex items-center gap-3 animate-fade-up">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
        <span class="text-sm font-bold">{{ session('success') }}</span>
    </div>
    @endif

    <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-gray-50/50">
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Nama Paket</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Mata Pelajaran</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Soal / Menit</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Status</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($tryouts as $tryout)
                    <tr class="group hover:bg-gray-50/30 transition-all">
                        <td class="px-8 py-6">
                            <div>
                                <div class="text-sm font-black text-secondary leading-none">{{ $tryout->name }}</div>
                                <div class="text-[9px] font-bold text-secondary/30 mt-1">Slug: {{ $tryout->slug }}</div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="inline-flex px-3 py-1 rounded-full bg-accent/10 text-secondary font-black text-[9px] uppercase tracking-wider">
                                {{ $tryout->subject }}
                            </span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <div class="text-sm font-black text-secondary italic">{{ $tryout->question_count }} <span class="text-[10px] text-secondary/30 not-italic">Soal</span></div>
                            <div class="text-[10px] text-secondary/40 font-bold">{{ $tryout->duration_minutes }} Menit</div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            @if($tryout->status === 'published')
                                <span class="inline-flex px-2.5 py-1 rounded-lg bg-green-50 text-green-600 text-[9px] font-black uppercase tracking-wider">Published</span>
                            @else
                                <span class="inline-flex px-2.5 py-1 rounded-lg bg-yellow-50 text-yellow-600 text-[9px] font-black uppercase tracking-wider">Draft</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.alumni.edit', $tryout->id) }}" class="p-2 text-secondary/20 hover:text-primary transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                </a>
                                <form action="{{ route('admin.alumni.destroy', $tryout->id) }}" method="POST" onsubmit="return confirm('Hapus paket ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-2 text-secondary/20 hover:text-red-500 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-8 py-20 text-center">
                            <p class="text-sm font-bold text-secondary/30">Belum ada paket tryout Alumni.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
