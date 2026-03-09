@extends('layouts.admin')

@section('title', 'Edit Soal - ' . ($owner->title ?? $owner->name))

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.questions.index', [$type, $id]) }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Edit <span class="text-primary italic">Pertanyaan</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui detail pertanyaan atau kunci jawaban.</p>
        </div>
    </div>

    <form action="{{ route('admin.questions.update', [$type, $id, $question->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <!-- Question Content -->
            <div class="space-y-6">
                <div class="space-y-2">
                    <x-input-label for="question_text" value="Pertanyaan" />
                    <textarea id="question_text" name="question_text" rows="4" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-bold text-lg transition-all" placeholder="Tuliskan pertanyaan di sini..." required>{{ old('question_text', $question->question_text) }}</textarea>
                </div>

                <div class="space-y-4">
                    <x-input-label for="question_image" value="Gambar (Opsional)" />
                    @if($question->question_image)
                        <div class="w-full max-w-sm rounded-2xl overflow-hidden border border-gray-100 mb-4 shadow-sm relative group">
                            <img src="{{ asset('storage/' . $question->question_image) }}" class="w-full h-auto">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all">
                                <span class="text-[10px] text-white font-black uppercase tracking-widest">Gambar Saat Ini</span>
                            </div>
                        </div>
                    @endif
                    <input type="file" id="question_image" name="question_image" class="block w-full text-sm text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-primary file:text-white hover:file:bg-secondary transition-all">
                </div>
            </div>

            <hr class="border-gray-100">

            <!-- Options Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                <div class="space-y-2">
                    <x-input-label for="option_{{ $opt }}" value="Opsi {{ strtoupper($opt) }}" />
                    <x-text-input id="option_{{ $opt }}" name="option_{{ $opt }}" type="text" :value="old('option_'.$opt, $question->{'option_'.$opt})" required />
                </div>
                @endforeach
            </div>

            <hr class="border-gray-100">

            <!-- Meta Data -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="correct_answer" value="Kunci Jawaban" />
                    <select id="correct_answer" name="correct_answer" class="block w-full bg-gray-50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                        <option value="{{ $opt }}" {{ old('correct_answer', $question->correct_answer) == $opt ? 'selected' : '' }}>Opsi {{ strtoupper($opt) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="space-y-2">
                    <x-input-label for="order" value="Urutan Tampil" />
                    <x-text-input id="order" name="order" type="number" :value="old('order', $question->order)" required />
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="explanation" value="Pembahasan (Opsional)" />
                <textarea id="explanation" name="explanation" rows="3" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-medium text-sm transition-all" placeholder="Tuliskan pembahasan soal...">{{ old('explanation', $question->explanation) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.questions.index', [$type, $id]) }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
