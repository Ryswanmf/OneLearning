@extends('layouts.admin')

@section('title', 'Kelola Blog - OneLearning')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">Daftar <span class="text-primary italic">Artikel</span>.</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Kelola konten edukasi dan berita terbaru untuk pengunjung.</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-secondary shadow-xl shadow-primary/20 transition-all active:scale-95">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
            Tulis Artikel
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
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Artikel</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Kategori</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Status</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($blogs as $blog)
                    <tr class="group hover:bg-gray-50/30 transition-all">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-12 rounded-lg bg-gray-100 overflow-hidden border border-gray-100 flex-shrink-0">
                                    @if($blog->image)
                                        <img src="{{ $blog->image }}" class="w-full h-full object-cover" alt="">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-secondary/20">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 00-2 2z" /></svg>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <div class="text-sm font-black text-secondary line-clamp-1">{{ $blog->title }}</div>
                                    <div class="text-[10px] text-secondary/40 font-bold uppercase tracking-wider mt-1">Oleh {{ $blog->author->name }} &bull; {{ $blog->created_at->format('d M Y') }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="inline-flex px-3 py-1 rounded-full bg-secondary/5 text-secondary text-[9px] font-black uppercase tracking-wider">
                                {{ $blog->category }}
                            </span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            @if($blog->status === 'published')
                                <span class="inline-flex px-2.5 py-1 rounded-lg bg-green-50 text-green-600 text-[9px] font-black uppercase tracking-wider">Published</span>
                            @else
                                <span class="inline-flex px-2.5 py-1 rounded-lg bg-yellow-50 text-yellow-600 text-[9px] font-black uppercase tracking-wider">Draft</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.blog.edit', $blog->slug) }}" class="p-2 text-secondary/20 hover:text-primary transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                </a>
                                <form action="{{ route('admin.blog.destroy', $blog->slug) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
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
                            <p class="text-sm font-bold text-secondary/30">Belum ada artikel yang ditulis.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($blogs->hasPages())
        <div class="px-8 py-6 border-t border-gray-50">
            {{ $blogs->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
