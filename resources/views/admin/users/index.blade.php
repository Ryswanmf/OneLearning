@extends('layouts.admin')

@section('title', 'Manajemen Siswa - OneLearning')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">Manajemen <span class="text-primary italic">Siswa</span>.</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Pantau dan kelola seluruh pengguna yang terdaftar di platform.</p>
        </div>
        <a href="{{ route('admin.users.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-secondary shadow-xl shadow-primary/20 transition-all active:scale-95">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
            Tambah User
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-2xl flex items-center gap-3">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
        <span class="text-sm font-bold">{{ session('success') }}</span>
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-50 border border-red-100 text-red-600 px-6 py-4 rounded-2xl flex items-center gap-3">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        <span class="text-sm font-bold">{{ session('error') }}</span>
    </div>
    @endif

    <!-- Filters & Search -->
    <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm">
        <form action="{{ route('admin.users.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1 relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-secondary/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </div>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama atau email..." class="block w-full pl-11 pr-4 py-3 bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 rounded-xl text-sm font-medium">
            </div>
            <div class="w-full md:w-48">
                <select name="role" class="block w-full py-3 bg-gray-50 border-none focus:ring-2 focus:ring-primary/20 rounded-xl text-sm font-bold">
                    <option value="">Semua Peran</option>
                    <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User (Siswa)</option>
                    <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
            <button type="submit" class="px-8 py-3 bg-secondary text-white text-xs font-black uppercase tracking-widest rounded-xl hover:bg-primary transition-all">Filter</button>
        </form>
    </div>

    <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left min-w-[800px]">
                <thead>
                    <tr class="bg-gray-50/50">
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest">Identitas Siswa</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Peran</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-center">Tgl Daftar</th>
                        <th class="px-8 py-5 text-[10px] font-black text-secondary/40 uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($users as $item)
                    <tr class="group hover:bg-gray-50/30 transition-all">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center border border-primary/5 flex-shrink-0">
                                    <span class="text-primary font-black text-sm uppercase">{{ substr($item->name, 0, 2) }}</span>
                                </div>
                                <div>
                                    <div class="text-sm font-black text-secondary">{{ $item->name }}</div>
                                    <div class="text-[10px] text-secondary/30 font-medium mt-0.5">{{ $item->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            @if($item->role === 'admin')
                                <span class="inline-flex px-3 py-1 rounded-full bg-secondary text-white text-[9px] font-black uppercase tracking-wider">Admin</span>
                            @else
                                <span class="inline-flex px-3 py-1 rounded-full bg-primary/5 text-primary text-[9px] font-black uppercase tracking-wider">Siswa</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-center">
                            <div class="text-[11px] font-bold text-secondary/40">{{ $item->created_at->format('d/m/Y') }}</div>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.users.edit', $item->id) }}" class="p-2 text-secondary/20 hover:text-primary transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                </a>
                                @if($item->id !== auth()->id())
                                <form action="{{ route('admin.users.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus user ini permanent?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-2 text-secondary/20 hover:text-red-500 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                    </button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-8 py-20 text-center">
                            <p class="text-sm font-bold text-secondary/30">Data siswa tidak ditemukan.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-8 py-6 border-t border-gray-50">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
