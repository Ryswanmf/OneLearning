@extends('layouts.admin')

@section('title', 'Bank Soal - ' . $paket_belajar->title)

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-3 mb-2">
                <a href="{{ route('admin.paket-belajar.index') }}" class="p-1.5 bg-white border border-gray-100 rounded-lg text-secondary hover:text-primary transition-all shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                </a>
                <span class="text-[10px] font-black text-primary uppercase tracking-[0.2em]">Bank Soal Paket</span>
            </div>
            <h2 class="text-3xl font-black text-secondary tracking-tight">{{ $paket_belajar->title }}</h2>
            <p class="text-sm font-medium text-secondary/40 mt-1">Total {{ $questions->count() }} Pertanyaan tersedia di paket ini.</p>
        </div>
        <a href="{{ route('admin.paket-belajar.questions.create', $paket_belajar->slug) }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-secondary shadow-xl shadow-primary/20 transition-all active:scale-95">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
            Tambah Soal Baru
        </a>
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
                            <span class="text-[10px] font-black text-primary uppercase tracking-widest">Pilihan Ganda</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.paket-belajar.questions.edit', [$paket_belajar->slug, $item->id]) }}" class="p-2 text-secondary/20 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            </a>
                            <form action="{{ route('admin.paket-belajar.questions.destroy', [$paket_belajar->slug, $item->id]) }}" method="POST" onsubmit="return confirm('Hapus soal ini?')">
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
            <p class="text-sm font-bold text-secondary/30 italic">Belum ada soal di paket ini.</p>
            <a href="{{ route('admin.paket-belajar.questions.create', $paket_belajar->slug) }}" class="text-xs font-black text-primary uppercase tracking-widest mt-4 inline-block hover:underline">Buat Soal Pertama</a>
        </div>
        @endforelse
    </div>
</div>
@endsection
