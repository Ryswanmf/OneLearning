@extends('layouts.admin')

@section('title', 'Bank Soal (Excel) - OneLearning')

@section('content')
<div class="space-y-10">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">Bank <span class="text-primary italic">Soal</span> Dashboard.</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Pilih paket atau tryout untuk mengelola soal dan import Excel.</p>
        </div>
    </div>

    @foreach($data as $category => $info)
    @if($info['items']->count() > 0)
    <div class="space-y-4">
        <div class="flex items-center gap-3">
            <div class="h-px flex-1 bg-gray-100"></div>
            <h3 class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.3em]">{{ $category }}</h3>
            <div class="h-px flex-1 bg-gray-100"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($info['items'] as $item)
            <div class="bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-primary/5 text-primary text-[9px] font-black uppercase tracking-widest rounded-lg">{{ $info['type'] }}</span>
                        <div class="flex items-center gap-1 text-[10px] font-bold text-secondary/30">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2.5"/></svg>
                            {{ $item->questions()->count() }} Soal
                        </div>
                    </div>
                    <h4 class="text-sm font-black text-secondary group-hover:text-primary transition-colors leading-tight italic">{{ $item->title ?? $item->name }}</h4>
                </div>

                <div class="mt-6 pt-6 border-t border-gray-50 flex items-center justify-between">
                    <div class="text-[9px] font-bold text-secondary/20">ID: {{ $item->id }}</div>
                    <a href="{{ route('admin.questions.index', ['type' => $info['type'], 'id' => ($item->slug ?? $item->id)]) }}" class="px-4 py-2 bg-secondary text-white text-[9px] font-black uppercase tracking-widest rounded-xl hover:bg-primary transition-all shadow-lg shadow-secondary/10">
                        Kelola Soal
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    @endforeach

    @if(collect($data)->every(fn($cat) => $cat['items']->count() == 0))
    <div class="py-20 bg-white rounded-[4rem] border-2 border-dashed border-gray-100 text-center">
        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-secondary/10">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
        </div>
        <p class="text-sm font-bold text-secondary/30 italic">Belum ada paket atau tryout yang dibuat.</p>
        <p class="text-xs text-secondary/20 mt-2">Buat paket/tryout terlebih dahulu untuk mengelola bank soal.</p>
    </div>
    @endif
</div>
@endsection
