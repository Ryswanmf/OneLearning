@extends('layouts.admin')

@section('title', 'Pengaturan Landing Page - OneLearning')

@section('content')
<div class="max-w-6xl mx-auto space-y-8" x-data="{ activeTab: '{{ array_keys($settings->toArray())[0] ?? '' }}' }">
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

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="pb-20">
        @csrf
        @method('PUT')

        <div class="flex flex-col lg:flex-row gap-8 items-start">
            <!-- Sidebar Tabs -->
            <div class="w-full lg:w-64 shrink-0 space-y-2 sticky top-24 z-10">
                @foreach($settings as $group => $items)
                <button type="button" 
                        @click="activeTab = '{{ $group }}'"
                        :class="activeTab === '{{ $group }}' ? 'bg-primary text-white shadow-xl shadow-primary/20' : 'bg-white text-secondary hover:bg-gray-50 border border-transparent hover:border-gray-100'"
                        class="w-full flex items-center justify-between px-6 py-4 rounded-2xl text-[11px] font-black uppercase tracking-widest transition-all">
                    {{ $group }}
                    <svg class="w-4 h-4" :class="activeTab === '{{ $group }}' ? 'opacity-100' : 'opacity-0'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
                </button>
                @endforeach

                <div class="pt-8">
                    <button type="submit" class="w-full px-6 py-4 bg-secondary text-white font-black text-[10px] uppercase tracking-[0.2em] rounded-2xl shadow-xl shadow-secondary/20 hover:bg-primary transition-all active:scale-95 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                        Simpan Semua
                    </button>
                </div>
            </div>

            <!-- Tab Contents -->
            <div class="flex-1 w-full bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden min-h-[500px]">
                @foreach($settings as $group => $items)
                <div x-show="activeTab === '{{ $group }}'" 
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="space-y-0">
                     
                    <div class="px-10 py-8 bg-gray-50/50 border-b border-gray-50 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-2xl bg-white border border-gray-100 flex items-center justify-center text-primary shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-black text-secondary tracking-tight capitalize">{{ $group }} Section</h3>
                            <p class="text-[10px] font-bold text-secondary/40 uppercase tracking-widest mt-0.5">Atur konten bagian {{ $group }}</p>
                        </div>
                    </div>

                    <div class="p-10 space-y-10">
                        @foreach($items as $item)
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start group">
                            <div class="lg:col-span-1 pt-2">
                                <label class="block text-[11px] font-black text-secondary uppercase tracking-widest mb-1.5">
                                    {{ str_replace('_', ' ', str_replace($group . '_', '', $item->key)) }}
                                </label>
                                <div class="inline-flex items-center gap-1.5 px-2 py-1 bg-gray-50 rounded-lg border border-gray-100">
                                    <svg class="w-3 h-3 text-secondary/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" /></svg>
                                    <span class="text-[9px] font-mono text-secondary/50 font-bold">{{ $item->key }}</span>
                                </div>
                            </div>
                            
                            <div class="lg:col-span-2">
                                @if($item->type === 'textarea')
                                    <textarea name="{{ $item->key }}" rows="4" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-5 font-medium text-sm transition-all group-hover:bg-white">{{ $item->value }}</textarea>
                                @elseif($item->type === 'image')
                                    <div class="space-y-4">
                                        <div class="relative w-full aspect-video rounded-3xl bg-gray-50 overflow-hidden border-2 border-dashed border-gray-200 group-hover:border-primary/30 transition-all flex items-center justify-center">
                                            @php
                                                $imgUrl = filter_var($item->value, FILTER_VALIDATE_URL) ? $item->value : asset('storage/' . $item->value);
                                            @endphp
                                            <img src="{{ $imgUrl }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" id="preview_{{ $item->key }}">
                                            <div class="absolute inset-0 bg-secondary/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity backdrop-blur-sm">
                                                <label for="upload_{{ $item->key }}" class="px-6 py-3 bg-white text-secondary text-[10px] font-black uppercase tracking-widest rounded-xl shadow-xl hover:text-primary transition-colors cursor-pointer">
                                                    Ganti Gambar
                                                </label>
                                            </div>
                                        </div>
                                        <input type="file" id="upload_{{ $item->key }}" name="{{ $item->key }}" class="hidden">
                                        <div class="flex items-center gap-2 text-[10px] font-bold text-secondary/30 uppercase tracking-widest">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            Format yang didukung: JPG, PNG, WEBP (Max 2MB)
                                        </div>
                                    </div>
                                @else
                                    <input type="text" name="{{ $item->key }}" value="{{ $item->value }}" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-14 px-5 font-bold text-sm transition-all group-hover:bg-white">
                                @endif
                            </div>
                        </div>
                        @if(!$loop->last) <div class="h-px bg-gray-50"></div> @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileInputs = document.querySelectorAll('input[type="file"]');
        fileInputs.forEach(input => {
            input.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.getElementById('preview_' + input.name);
                        if (img) {
                            img.src = e.target.result;
                        }
                    }
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        });
    });
</script>
@endsection
