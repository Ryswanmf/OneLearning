@extends('layouts.admin')

@section('title', 'Kelola Testimoni - OneLearning')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">Daftar <span class="text-primary italic">Testimoni</span>.</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Kelola kisah sukses alumni untuk membangun kepercayaan calon siswa.</p>
        </div>
        <a href="{{ route('admin.testimoni.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-secondary shadow-xl shadow-primary/20 transition-all active:scale-95">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
            Tambah Testimoni
        </a>
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
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Alumni</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Rating</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Status</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($testimonials as $t)
                    <tr class="group hover:bg-gray-50/30 transition-all">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <img src="{{ $t->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($t->name).'&background=0EA5E9&color=fff' }}" class="w-12 h-12 rounded-xl object-cover border-2 border-primary/10" alt="">
                                <div>
                                    <div class="text-sm font-black text-secondary leading-none">{{ $t->name }}</div>
                                    <div class="text-[10px] text-primary font-bold uppercase tracking-wider mt-1.5">{{ $t->target }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <div class="flex items-center justify-center gap-0.5 text-accent">
                                @for($i=0; $i<$t->rating; $i++)
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            @if($t->is_featured)
                                <span class="inline-flex px-2.5 py-1 rounded-lg bg-primary/5 text-primary text-[9px] font-black uppercase tracking-wider">Tampil</span>
                            @else
                                <span class="inline-flex px-2.5 py-1 rounded-lg bg-gray-50 text-secondary/30 text-[9px] font-black uppercase tracking-wider">Draft</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.testimoni.edit', $t->id) }}" class="p-2 text-secondary/20 hover:text-primary transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                </a>
                                <form action="{{ route('admin.testimoni.destroy', $t->id) }}" method="POST" onsubmit="return confirm('Hapus testimoni ini?')">
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
                        <td colspan="4" class="px-8 py-20 text-center">
                            <p class="text-sm font-bold text-secondary/30">Belum ada testimoni.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
