@extends('layouts.admin')

@section('title', 'Ubah Soal - ' . $paket_belajar->title)

@section('content')
<div class="max-w-5xl mx-auto space-y-8 pb-20">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.paket-belajar.questions.index', $paket_belajar->slug) }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Detail Soal</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Paket: {{ $paket_belajar->title }}</p>
        </div>
    </div>

    <form action="{{ route('admin.paket-belajar.questions.update', [$paket_belajar->slug, $question->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf @method('PUT')
        
        <!-- Question Text & Image -->
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="space-y-4">
                <x-input-label for="question_text" value="Pertanyaan" />
                <textarea id="question_text" name="question_text" rows="5" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-medium text-sm transition-all">{{ old('question_text', $question->question_text) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <x-input-label for="question_image" value="Ganti Gambar Soal (Opsional)" />
                    @if($question->question_image)
                        <div class="w-40 h-24 rounded-lg overflow-hidden border border-gray-100 mb-2">
                            <img src="{{ asset('storage/'.$question->question_image) }}" class="w-full h-full object-cover">
                        </div>
                    @endif
                    <input type="file" name="question_image" class="block w-full text-xs text-secondary/40 file:mr-4 file:py-2.5 file:px-6 file:rounded-xl file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-widest file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer">
                </div>
                <div class="space-y-2">
                    <x-input-label for="order" value="Nomor Urut / Posisi" />
                    <x-text-input id="order" name="order" type="number" :value="old('order', $question->order)" required />
                </div>
            </div>
        </div>

        <!-- Options A-E -->
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm">
            <h3 class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.2em] mb-8 italic">Pilihan Jawaban (A - E)</h3>
            <div class="space-y-6">
                @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gray-50 rounded-2xl flex items-center justify-center font-black text-secondary/30 uppercase flex-shrink-0 border border-gray-100">{{ $opt }}</div>
                    <textarea name="option_{{ $opt }}" rows="2" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-4 font-medium text-sm transition-all">{{ old('option_'.$opt, $question->{'option_'.$opt}) }}</textarea>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Key & Explanation -->
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="space-y-2">
                <x-input-label for="correct_answer" value="Kunci Jawaban Benar" />
                <select id="correct_answer" name="correct_answer" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                    @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                        <option value="{{ $opt }}" {{ old('correct_answer', $question->correct_answer) == $opt ? 'selected' : '' }}>Pilihan {{ strtoupper($opt) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-2">
                <x-input-label for="explanation" value="Pembahasan / Penjelasan (Opsional)" />
                <textarea id="explanation" name="explanation" rows="4" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-medium text-sm transition-all">{{ old('explanation', $question->explanation) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.paket-belajar.questions.index', $paket_belajar->slug) }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
