@extends('layouts.admin')

@section('title', 'Pengaturan Landing Page - OneLearning')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <div>
        <h2 class="text-3xl font-black text-secondary tracking-tight">Pengaturan <span class="text-primary italic">Landing Page</span>.</h2>
        <p class="text-sm font-medium text-secondary/40 mt-1">Ubah konten website Anda tanpa perlu menyentuh kode.</p>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-2xl flex items-center gap-3 animate-fade-up">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
        <span class="text-sm font-bold">{{ session('success') }}</span>
    </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-10">
        @csrf
        @method('PUT')

        @foreach($settings as $group => $items)
        <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden">
            <div class="px-10 py-6 bg-gray-50/50 border-b border-gray-50 flex items-center justify-between">
                <h3 class="text-xs font-black text-secondary/40 uppercase tracking-[0.3em]">{{ $group }} Section</h3>
                <div class="w-2 h-2 bg-primary rounded-full"></div>
            </div>
            <div class="p-10 space-y-8">
                @foreach($items as $item)
                <div class="space-y-3">
                    <label class="block text-[10px] font-black text-secondary uppercase tracking-widest ml-1">
                        {{ str_replace('_', ' ', str_replace($group . '_', '', $item->key)) }}
                    </label>
                    
                    @if($item->type === 'textarea')
                        <textarea name="{{ $item->key }}" rows="3" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-5 font-medium text-sm transition-all">{{ $item->value }}</textarea>
                    @else
                        <input type="text" name="{{ $item->key }}" value="{{ $item->value }}" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-14 px-5 font-bold text-sm transition-all">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="flex justify-end sticky bottom-8 z-50">
            <button type="submit" class="px-12 py-5 bg-secondary text-white font-black text-xs uppercase tracking-[0.2em] rounded-2xl shadow-2xl hover:bg-primary transition-all active:scale-95 flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                Simpan Semua Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
