@extends('layouts.admin')

@section('title', 'Kelola Soal - ' . ($owner->title ?? $owner->name))

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-3 mb-2">
                <button onclick="history.back()" class="p-1.5 bg-white border border-gray-100 rounded-lg text-secondary hover:text-primary transition-all shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                </button>
                <span class="text-[10px] font-black text-primary uppercase tracking-[0.2em]">Bank Soal {{ strtoupper($type) }}</span>
            </div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">{{ $owner->title ?? $owner->name }}</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Total {{ $questions->count() }} Pertanyaan tersedia.</p>
        </div>
        <div class="flex items-center gap-3" x-data="{ importModalOpen: false }">
            <button @click="importModalOpen = true" class="inline-flex items-center gap-2 px-6 py-3 bg-green-500 text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-green-600 shadow-xl shadow-green-500/20 transition-all active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                Import Excel
            </button>
            <a href="{{ route('admin.questions.create', [$type, $id]) }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-secondary shadow-xl shadow-primary/20 transition-all active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                Tambah Soal Baru
            </a>

            <!-- Modal Import Excel -->
            <div x-show="importModalOpen" class="fixed inset-0 z-[200] flex items-center justify-center p-4" x-cloak>
                <div class="absolute inset-0 bg-secondary/80 backdrop-blur-sm" @click="importModalOpen = false" x-transition.opacity></div>
                <div class="relative bg-white rounded-[3rem] p-10 w-full max-w-lg shadow-2xl border border-white/20 transform" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                     x-transition:leave-end="opacity-0 translate-y-8 scale-95">
                    
                    <button @click="importModalOpen = false" class="absolute top-6 right-6 p-2 text-secondary/30 hover:text-red-500 transition-colors bg-gray-50 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>

                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-inner">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-secondary italic">Import Soal Excel</h3>
                        <p class="text-xs text-secondary/50 font-medium mt-2">Unggah file .xlsx untuk memasukkan ratusan soal sekaligus.</p>
                    </div>

                    <form action="{{ route('admin.questions.import', [$type, $id]) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div class="border-2 border-dashed border-gray-200 rounded-3xl p-6 text-center hover:border-primary transition-colors cursor-pointer relative group">
                            <input type="file" name="excel_file" required accept=".xlsx,.xls,.csv" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" onchange="document.getElementById('fileName').textContent = this.files[0].name">
                            <div class="text-secondary/40 group-hover:text-primary transition-colors">
                                <svg class="w-10 h-10 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                                <span id="fileName" class="text-xs font-black uppercase tracking-widest block">Pilih File / Drag & Drop</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-5 rounded-2xl border border-gray-100">
                            <h4 class="text-[10px] font-black uppercase tracking-widest text-secondary/50 mb-2">Format Header Kolom Excel:</h4>
                            <code class="text-[9px] text-primary break-all leading-relaxed font-mono">pertanyaan | topik | opsi_a | opsi_b | opsi_c | opsi_d | opsi_e | kunci_jawaban | pembahasan | urutan</code>
                        </div>

                        <button type="submit" class="w-full py-4 bg-primary text-white font-black text-xs uppercase tracking-[0.2em] rounded-2xl hover:bg-secondary transition-all shadow-xl shadow-primary/20">
                            Mulai Import
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-2xl flex items-center gap-3">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
        <span class="text-sm font-bold">{{ session('success') }}</span>
    </div>
    @endif

    <div class="space-y-6 pb-20">
        @forelse($questions as $index => $item)
        <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-md transition-all group">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Question Info -->
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 bg-secondary text-white rounded-xl flex items-center justify-center font-black italic text-sm">
                                {{ $item->order }}
                            </span>
                            <span class="px-3 py-1 bg-accent/10 text-secondary text-[9px] font-black uppercase tracking-widest rounded-lg">{{ $item->topic ?? 'Umum' }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.questions.edit', [$type, $id, $item->id]) }}" class="p-2 text-secondary/20 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            </a>
                            <form action="{{ route('admin.questions.destroy', [$type, $id, $item->id]) }}" method="POST" onsubmit="return confirm('Hapus soal ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="p-2 text-secondary/20 hover:text-red-500 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="space-y-4">
                        @if($item->question_image)
                            <div class="w-full max-w-md rounded-2xl overflow-hidden border border-gray-100 mb-4">
                                <img src="{{ asset('storage/' . $item->question_image) }}" class="w-full h-auto">
                            </div>
                        @endif
                        <div class="text-secondary font-bold text-lg leading-relaxed">
                            {!! nl2br(e($item->question_text)) !!}
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                        @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                        <div class="p-4 rounded-2xl border {{ $item->correct_answer == $opt ? 'bg-green-50 border-green-200 text-green-700' : 'bg-gray-50/50 border-gray-100 text-secondary/60' }} flex items-start gap-3">
                            <span class="uppercase font-black text-xs mt-0.5">{{ $opt }}.</span>
                            <span class="text-sm font-medium">{{ $item->{'option_'.$opt} }}</span>
                        </div>
                        @endforeach
                    </div>

                    @if($item->explanation)
                    <div class="mt-8 p-6 bg-primary/5 rounded-[2rem] border border-primary/10">
                        <h5 class="text-[10px] font-black text-primary uppercase tracking-widest mb-2 italic">Pembahasan Soal:</h5>
                        <p class="text-sm text-secondary/70 font-medium leading-relaxed italic">{{ $item->explanation }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="py-20 bg-white rounded-[3rem] border-2 border-dashed border-gray-100 text-center">
            <p class="text-sm font-bold text-secondary/30 italic">Belum ada soal tersedia.</p>
            <a href="{{ route('admin.questions.create', [$type, $id]) }}" class="text-xs font-black text-primary uppercase tracking-widest mt-4 inline-block hover:underline">Buat Soal Pertama</a>
        </div>
        @endforelse
    </div>
</div>
@endsection
