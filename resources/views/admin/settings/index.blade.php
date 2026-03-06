@extends('layouts.admin')

@section('title', 'Pengaturan Landing Page - OneLearning')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">Pengaturan <span class="text-primary italic">Landing Page</span>.</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Sesuaikan seluruh teks dan visual halaman utama secara real-time.</p>
        </div>
        <a href="/" target="_blank" class="px-6 py-3 bg-white border border-gray-100 rounded-2xl text-xs font-black text-secondary hover:text-primary transition-all shadow-sm flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
            Pratinjau Web
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-2xl flex items-center gap-3 animate-fade-up">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
        <span class="text-sm font-bold">{{ session('success') }}</span>
    </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-10 pb-20">
        @csrf
        @method('PUT')

        @foreach($settings as $group => $items)
        <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
            <div class="px-10 py-6 bg-gray-50/50 border-b border-gray-50 flex items-center justify-between">
                <h3 class="text-[10px] font-black text-secondary/40 uppercase tracking-[0.3em]">{{ $group }} Section</h3>
                <div class="w-2 h-2 bg-primary rounded-full"></div>
            </div>
            <div class="p-10 space-y-10">
                @foreach($items as $item)
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <div class="lg:col-span-1">
                        <label class="block text-[10px] font-black text-secondary uppercase tracking-widest ml-1 mb-2">
                            {{ str_replace('_', ' ', str_replace($group . '_', '', $item->key)) }}
                        </label>
                        <p class="text-[10px] text-secondary/30 font-medium leading-relaxed italic ml-1">Kunci data: {{ $item->key }}</p>
                    </div>
                    
                    <div class="lg:col-span-2">
                        @if($item->type === 'textarea')
                            <textarea name="{{ $item->key }}" rows="4" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-5 font-medium text-sm transition-all">{{ $item->value }}</textarea>
                        @elseif($item->type === 'image')
                            <div class="space-y-4">
                                <div class="relative w-full aspect-video rounded-2xl bg-gray-100 overflow-hidden border border-gray-100 group">
                                    @php
                                        $imgUrl = filter_var($item->value, FILTER_VALIDATE_URL) ? $item->value : asset('storage/' . $item->value);
                                    @endphp
                                    <img src="{{ $imgUrl }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" id="preview_{{ $item->key }}">
                                    <div class="absolute inset-0 bg-secondary/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="text-[10px] font-black text-white uppercase tracking-widest bg-secondary/60 px-4 py-2 rounded-full backdrop-blur-md">Pratinjau Saat Ini</span>
                                    </div>
                                </div>
                                <input type="file" name="{{ $item->key }}" class="block w-full text-xs text-secondary/40 file:mr-4 file:py-2.5 file:px-6 file:rounded-xl file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-widest file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer">
                            </div>
                        @else
                            <input type="text" name="{{ $item->key }}" value="{{ $item->value }}" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-14 px-5 font-bold text-sm transition-all">
                        @endif
                    </div>
                </div>
                @if(!$loop->last) <div class="h-px bg-gray-50"></div> @endif
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="flex justify-end sticky bottom-8 z-50">
            <button type="submit" class="px-12 py-5 bg-secondary text-white font-black text-xs uppercase tracking-[0.2em] rounded-2xl shadow-2xl hover:bg-primary transition-all active:scale-95 flex items-center gap-3 border-4 border-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                Simpan Konfigurasi Web
            </button>
        </div>
    </form>
</div>
@endsection
