@extends('layouts.app')

@section('title', 'Ujian Berlangsung - ' . $paket_belajar->title)

@section('content')
<div class="min-h-screen bg-[#F8FAFC]" x-data="tryoutEngine()">
    <!-- Top Exam Bar -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-[100] px-4 md:px-12 py-4 shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg">
                    <img src="{{ asset('images/logo.png') }}" class="w-6 h-6">
                </div>
                <div class="hidden sm:block">
                    <h2 class="text-sm font-black text-secondary uppercase tracking-widest line-clamp-1">{{ $paket_belajar->title }}</h2>
                    <p class="text-[10px] font-bold text-secondary/30 uppercase tracking-tighter">Sistem Penilaian IRT Aktif</p>
                </div>
            </div>

            <!-- Global Timer -->
            <div class="px-6 py-2.5 bg-secondary rounded-2xl flex items-center gap-4 shadow-xl">
                <svg class="w-5 h-5 text-primary animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span class="text-lg font-black text-white tabular-nums tracking-widest" x-text="formatTime(timeLeft)">00:00:00</span>
            </div>

            <div class="flex items-center gap-4">
                <button @click="showFinishModal = true" class="px-6 py-2.5 bg-red-500 text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-red-600 transition-all shadow-lg shadow-red-500/20">Selesai Ujian</button>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 md:px-12 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT: Navigation Numbers (4 Col) -->
            <div class="lg:col-span-4 order-2 lg:order-1">
                <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-xl sticky top-28">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-xs font-black text-secondary uppercase tracking-widest italic">Navigasi Soal</h3>
                        <span class="text-[10px] font-bold text-secondary/30" x-text="`${Object.keys(userAnswers).length} / ${questions.length} Terjawab` text"></span>
                    </div>
                    
                    <div class="grid grid-cols-5 gap-3">
                        <template x-for="(q, index) in questions" :key="q.id">
                            <button @click="currentQuestionIndex = index" 
                                    class="aspect-square rounded-xl border-2 flex items-center justify-center text-xs font-black transition-all transform active:scale-90"
                                    :class="getQuestionStatusClass(index, q.id)">
                                <span x-text="index + 1"></span>
                            </button>
                        </template>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-50 grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-primary rounded-md"></div>
                            <span class="text-[9px] font-black text-secondary/40 uppercase tracking-wider">Terjawab</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-white border-2 border-gray-100 rounded-md"></div>
                            <span class="text-[9px] font-black text-secondary/40 uppercase tracking-wider">Belum</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Question Area (8 Col) -->
            <div class="lg:col-span-8 order-1 lg:order-2 space-y-6">
                <div class="bg-white p-10 md:p-16 rounded-[3rem] border border-gray-100 shadow-2xl relative overflow-hidden">
                    <!-- Progress Bar Header -->
                    <div class="absolute top-0 left-0 w-full h-1 bg-gray-50">
                        <div class="h-full bg-primary transition-all duration-500" :style="`width: ${((currentQuestionIndex + 1) / questions.length) * 100}%`"></div>
                    </div>

                    <!-- Question Header -->
                    <div class="flex items-center justify-between mb-10">
                        <div class="text-xs font-black text-primary uppercase tracking-[0.3em] italic">Pertanyaan ke <span x-text="currentQuestionIndex + 1"></span></div>
                        <button @click="toggleMark(questions[currentQuestionIndex].id)" class="flex items-center gap-2 text-yellow-500 hover:text-yellow-600 transition-colors">
                            <svg class="w-5 h-5" :fill="isMarked(questions[currentQuestionIndex].id) ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" /></svg>
                            <span class="text-[10px] font-black uppercase tracking-widest">Ragu-ragu</span>
                        </button>
                    </div>

                    <!-- Question Content -->
                    <div class="space-y-10">
                        <template x-if="questions[currentQuestionIndex].question_image">
                            <div class="w-full max-w-lg rounded-2xl overflow-hidden border border-gray-100 mx-auto shadow-sm">
                                <img :src="`/storage/${questions[currentQuestionIndex].question_image}`" class="w-full h-auto">
                            </div>
                        </template>
                        
                        <div class="text-xl md:text-2xl font-bold text-secondary leading-relaxed" x-text="questions[currentQuestionIndex].question_text"></div>

                        <!-- Options -->
                        <div class="space-y-4 pt-4">
                            <template x-for="opt in ['a', 'b', 'c', 'd', 'e']" :key="opt">
                                <label class="flex items-center p-6 rounded-2xl border-2 cursor-pointer transition-all group"
                                       :class="userAnswers['q' + questions[currentQuestionIndex].id] === opt ? 'bg-primary/5 border-primary shadow-lg shadow-primary/5' : 'bg-gray-50/50 border-transparent hover:border-gray-200'">
                                    <input type="radio" :name="'q' + questions[currentQuestionIndex].id" :value="opt" 
                                           class="hidden" @change="saveAnswer(questions[currentQuestionIndex].id, opt)"
                                           :checked="userAnswers['q' + questions[currentQuestionIndex].id] === opt">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center font-black text-sm uppercase transition-all duration-300"
                                         :class="userAnswers['q' + questions[currentQuestionIndex].id] === opt ? 'bg-primary text-white' : 'bg-white border border-gray-100 text-secondary/30 group-hover:bg-primary/10 group-hover:text-primary'">
                                        <span x-text="opt"></span>
                                    </div>
                                    <div class="ml-6 text-sm font-bold text-secondary/70 group-hover:text-secondary transition-colors" x-text="questions[currentQuestionIndex]['option_' + opt]"></div>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex items-center justify-between mt-16 pt-10 border-t border-gray-50">
                        <button @click="prevQuestion" :disabled="currentQuestionIndex === 0" 
                                class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary disabled:opacity-20 transition-all flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 16l-4-4m0 0l4-4m-4 4h18" /></svg>
                            Kembali
                        </button>
                        
                        <button @click="nextQuestion" x-show="currentQuestionIndex < questions.length - 1"
                                class="px-10 py-4 bg-secondary text-white text-xs font-black uppercase tracking-widest rounded-xl hover:bg-primary transition-all shadow-xl shadow-secondary/10 flex items-center gap-2 group">
                            Selanjutnya
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </button>

                        <button @click="showFinishModal = true" x-show="currentQuestionIndex === questions.length - 1"
                                class="px-10 py-4 bg-green-500 text-white text-xs font-black uppercase tracking-widest rounded-xl hover:bg-green-600 transition-all shadow-xl shadow-green-500/10 flex items-center gap-2">
                            Selesai Ujian
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Finish Modal -->
    <div x-show="showFinishModal" class="fixed inset-0 z-[200] flex items-center justify-center p-4 bg-secondary/80 backdrop-blur-md" x-cloak>
        <div class="bg-white rounded-[3rem] p-12 max-w-md w-full shadow-2xl text-center space-y-8 animate-fade-up">
            <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto text-primary">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <div>
                <h3 class="text-2xl font-black text-secondary italic">Akhiri Ujian?</h3>
                <p class="text-secondary/50 font-medium mt-2">Pastikan semua jawaban telah terisi. Anda tidak dapat kembali setelah mengakhiri sesi ini.</p>
            </div>
            <div class="flex flex-col gap-3">
                <form action="{{ route('tryout.finish', $paket_belajar->slug) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl hover:bg-secondary transition-all shadow-xl shadow-primary/20">Ya, Selesaikan</button>
                </form>
                <button @click="showFinishModal = false" class="w-full py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Belum, Kembali</button>
            </div>
        </div>
    </div>
</div>

<script>
function tryoutEngine() {
    return {
        currentQuestionIndex: 0,
        questions: @json($questions),
        userAnswers: @json(json_decode($submission->answers, true) ?? []),
        markedQuestions: [],
        timeLeft: {{ (int)str_replace(' Menit', '', $paket_belajar->duration) * 60 }},
        showFinishModal: false,

        init() {
            this.startTimer();
            // Load marked questions from local storage if any
            const saved = localStorage.getItem('marked_q_' + {{ $submission->id }});
            if(saved) this.markedQuestions = JSON.parse(saved);
        },

        startTimer() {
            const interval = setInterval(() => {
                if (this.timeLeft > 0) {
                    this.timeLeft--;
                } else {
                    clearInterval(interval);
                    this.autoFinish();
                }
            }, 1000);
        },

        formatTime(seconds) {
            const h = Math.floor(seconds / 3600);
            const m = Math.floor((seconds % 3600) / 60);
            const s = seconds % 60;
            return [h, m, s].map(v => v < 10 ? '0' + v : v).join(':');
        },

        saveAnswer(questionId, option) {
            this.userAnswers['q' + questionId] = option;
            
            // Send to server (Auto-save)
            fetch("{{ route('tryout.save-answer', $paket_belajar->slug) }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    question_id: questionId,
                    answer: option
                })
            });
        },

        toggleMark(qId) {
            if (this.markedQuestions.includes(qId)) {
                this.markedQuestions = this.markedQuestions.filter(id => id !== qId);
            } else {
                this.markedQuestions.push(qId);
            }
            localStorage.setItem('marked_q_' + {{ $submission->id }}, JSON.stringify(this.markedQuestions));
        },

        isMarked(qId) {
            return this.markedQuestions.includes(qId);
        },

        getQuestionStatusClass(index, qId) {
            let classes = '';
            if (this.currentQuestionIndex === index) classes += ' border-primary text-primary shadow-lg scale-110 z-10 ';
            else classes += ' border-gray-100 ';

            if (this.userAnswers['q' + qId]) {
                classes += ' bg-primary text-white border-primary ';
            } else if (this.isMarked(qId)) {
                classes += ' bg-yellow-400 text-white border-yellow-400 ';
            } else {
                classes += ' bg-white text-secondary/30 ';
            }
            return classes;
        },

        nextQuestion() {
            if (this.currentQuestionIndex < this.questions.length - 1) this.currentQuestionIndex++;
        },

        prevQuestion() {
            if (this.currentQuestionIndex > 0) this.currentQuestionIndex--;
        },

        autoFinish() {
            alert('Waktu habis! Jawaban Anda akan dikirim otomatis.');
            document.querySelector('form').submit();
        }
    }
}
</script>
@endsection
