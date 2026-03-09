@extends('layouts.app')

@section('title', 'Ujian - ' . $paket_belajar->name)

@section('content')
<div class="min-h-screen bg-[#F8FAFC] font-sans selection:bg-primary selection:text-white" x-data="tryoutEngine()">
    <!-- Ultra Compact Header -->
    <header class="bg-white border-b border-gray-100 sticky top-16 z-[90] px-4 md:px-12 py-2 shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-secondary rounded-lg flex items-center justify-center text-white shadow-lg">
                    <img src="{{ asset('images/logo.png') }}" class="w-4 h-4">
                </div>
                <div class="hidden sm:block">
                    <h2 class="text-[9px] font-black text-secondary uppercase tracking-widest line-clamp-1 italic leading-none">{{ $paket_belajar->name }}</h2>
                    <p class="text-[7px] font-bold text-secondary/30 uppercase tracking-tighter mt-0.5">IRT System</p>
                </div>
            </div>

            <!-- Compact Timer -->
            <div class="px-4 py-1.5 bg-secondary rounded-xl flex items-center gap-3 shadow-lg border border-white/10">
                <svg class="w-3.5 h-3.5 text-primary animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span class="text-sm font-black text-white tabular-nums tracking-widest" x-text="formatTime(timeLeft)">00:00:00</span>
            </div>

            <div class="flex items-center gap-3">
                <button @click="showFinishModal = true" class="px-4 py-1.5 bg-red-500 text-white text-[8px] font-black uppercase tracking-widest rounded-lg hover:bg-red-600 transition-all shadow-md">Selesai</button>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 md:px-12 py-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            
            <!-- LEFT Sidebar: Navigation -->
            <div class="lg:col-span-3 order-2 lg:order-1">
                <div class="bg-white p-5 rounded-[2rem] border border-gray-100 shadow-xl sticky top-32">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-[8px] font-black text-secondary uppercase tracking-widest italic">Navigasi</h3>
                        <span class="text-[8px] font-bold text-secondary/30 uppercase" x-text="`${Object.keys(userAnswers).length}/${questions.length}`"></span>
                    </div>
                    
                    <div class="grid grid-cols-5 gap-1.5">
                        <template x-for="(q, index) in questions" :key="q.id">
                            <button @click="currentQuestionIndex = index" 
                                    class="aspect-square rounded-lg border flex items-center justify-center text-[9px] font-black transition-all transform active:scale-90"
                                    :class="getQuestionStatusClass(index, q.id)">
                                <span x-text="index + 1"></span>
                            </button>
                        </template>
                    </div>

                    <div class="mt-4 pt-3 border-t border-gray-50 flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <div class="w-1.5 h-1.5 bg-primary rounded-sm shadow-sm"></div>
                            <span class="text-[7px] font-black text-secondary/40 uppercase">Isi</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <div class="w-1.5 h-1.5 bg-yellow-400 rounded-sm shadow-sm"></div>
                            <span class="text-[7px] font-black text-secondary/40 uppercase">Ragu</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <div class="w-1.5 h-1.5 bg-white border border-gray-100 rounded-sm shadow-sm"></div>
                            <span class="text-[7px] font-black text-secondary/40 uppercase">Kosong</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT Area: Question -->
            <div class="lg:col-span-9 order-1 lg:order-2 space-y-4">
                <div class="bg-white p-6 md:p-10 rounded-[2.5rem] border border-gray-100 shadow-2xl relative overflow-hidden min-h-[400px] flex flex-col">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gray-50">
                        <div class="h-full bg-primary transition-all duration-500" :style="`width: ${((currentQuestionIndex + 1) / (questions.length || 1)) * 100}%` text"></div>
                    </div>

                    <div class="flex items-center justify-between mb-6">
                        <div class="text-[8px] font-black text-primary uppercase tracking-[0.3em] italic">No <span x-text="currentQuestionIndex + 1"></span></div>
                        <button @click="toggleMark(questions[currentQuestionIndex].id)" class="flex items-center gap-2 text-yellow-500 hover:text-yellow-600 transition-colors">
                            <svg class="w-3.5 h-3.5" :fill="isMarked(questions[currentQuestionIndex].id) ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" /></svg>
                            <span class="text-[8px] font-black uppercase tracking-widest">Ragu-ragu</span>
                        </button>
                    </div>

                    <div class="flex-1 space-y-6 animate-fade-up" :key="currentQuestionIndex">
                        <template x-if="questions[currentQuestionIndex].question_image">
                            <div class="w-full max-w-sm rounded-xl overflow-hidden border border-gray-100 mx-auto shadow-sm p-1 bg-white mb-4">
                                <img :src="`/storage/${questions[currentQuestionIndex].question_image}`" class="w-full h-auto rounded-lg">
                            </div>
                        </template>
                        
                        <div class="text-base md:text-lg font-bold text-secondary leading-relaxed italic" x-text="questions[currentQuestionIndex].question_text"></div>

                        <div class="grid grid-cols-1 gap-2 pt-2">
                            <template x-for="opt in ['a', 'b', 'c', 'd', 'e']" :key="opt">
                                <label class="flex items-center p-3 rounded-xl border-2 cursor-pointer transition-all duration-300 group"
                                       :class="userAnswers['q' + questions[currentQuestionIndex].id] === opt ? 'bg-primary border-primary shadow-md' : 'bg-gray-50/50 border-transparent hover:border-gray-200'">
                                    <input type="radio" :name="'q' + questions[currentQuestionIndex].id" :value="opt" 
                                           class="hidden" @change="saveAnswer(questions[currentQuestionIndex].id, opt)"
                                           :checked="userAnswers['q' + questions[currentQuestionIndex].id] === opt">
                                    <div class="w-7 h-7 rounded-lg flex items-center justify-center font-black text-[10px] uppercase transition-all duration-300 flex-shrink-0"
                                         :class="userAnswers['q' + questions[currentQuestionIndex].id] === opt ? 'bg-white text-primary' : 'bg-white border border-gray-100 text-secondary/30 group-hover:text-primary'">
                                        <span x-text="opt"></span>
                                    </div>
                                    <div class="ml-4 text-xs font-bold transition-all duration-300" 
                                         :class="userAnswers['q' + questions[currentQuestionIndex].id] === opt ? 'text-white' : 'text-secondary/60 group-hover:text-secondary'"
                                         x-text="questions[currentQuestionIndex]['option_' + opt]"></div>
                                </label>
                            </template>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-50">
                        <button @click="prevQuestion" :disabled="currentQuestionIndex === 0" 
                                class="px-4 py-2 text-[8px] font-black text-secondary/30 uppercase tracking-widest hover:text-secondary disabled:opacity-10 transition-all flex items-center gap-2">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
                            Kembali
                        </button>
                        
                        <button @click="nextQuestion" x-show="currentQuestionIndex < questions.length - 1"
                                class="px-6 py-2.5 bg-secondary text-white text-[8px] font-black uppercase tracking-widest rounded-xl hover:bg-primary transition-all shadow-md flex items-center gap-2 active:scale-95">
                            Lanjut
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                        </button>

                        <button @click="showFinishModal = true" x-show="currentQuestionIndex === questions.length - 1"
                                class="px-6 py-2.5 bg-green-500 text-white text-[8px] font-black uppercase tracking-widest rounded-xl hover:bg-green-600 transition-all shadow-md flex items-center gap-2 active:scale-95">
                            Selesai
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Finish Modal (Clean Popup Style) -->
    <div x-show="showFinishModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4 bg-secondary/20 backdrop-blur-sm" x-cloak>
        
        <div class="bg-white rounded-[2.5rem] p-8 max-w-xs w-full shadow-[0_50px_100px_-20px_rgba(0,0,0,0.2)] text-center space-y-6 animate-fade-up border border-gray-100" @click.away="showFinishModal = false">
            <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mx-auto text-green-500 border border-green-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <div>
                <h3 class="text-lg font-black text-secondary italic uppercase tracking-tight">Akhiri Ujian?</h3>
                <p class="text-secondary/40 text-[10px] font-medium leading-relaxed">Seluruh jawaban Anda akan dikumpulkan dan diproses secara permanen.</p>
            </div>
            <div class="flex flex-col gap-2">
                <form action="{{ route('tryout.finish', ['type' => $type, 'id' => $id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-3 bg-secondary text-white font-black text-[9px] uppercase tracking-widest rounded-xl hover:bg-primary transition-all shadow-lg shadow-secondary/20 active:scale-95">Ya, Kumpulkan</button>
                </form>
                <button @click="showFinishModal = false" class="w-full py-2 text-[8px] font-black text-secondary/30 uppercase tracking-widest hover:text-secondary transition-all">Batalkan</button>
            </div>
        </div>
    </div>
</div>

<script>
function tryoutEngine() {
    return {
        currentQuestionIndex: 0,
        questions: @json($questions),
        userAnswers: @json($submission->answers ?? []),
        markedQuestions: [],
        timeLeft: {{ (int)$paket_belajar->duration_minutes * 60 }},
        showFinishModal: false,

        init() {
            this.startTimer();
            const saved = localStorage.getItem('marked_q_' + {{ $submission->id }});
            if(saved) this.markedQuestions = JSON.parse(saved);
        },

        startTimer() {
            // Heartbeat: Kirim sinyal ke server setiap 2 menit agar sesi tidak mati
            const heartbeat = setInterval(() => {
                fetch('/dashboard', { 
                    headers: { 'X-Requested-With': 'XMLHttpRequest' } 
                })
                .then(response => {
                    if (response.status === 401 || response.status === 419) {
                        console.warn('Sesi habis, mencoba menyambungkan kembali...');
                        // Jika sesi mati, arahkan ke login dengan pesan yang jelas
                        window.location.href = "/login?error=session_expired";
                    }
                })
                .catch(err => console.error('Koneksi terputus:', err));
            }, 120000); // 120 detik (2 menit)

            const interval = setInterval(() => {
                if (this.timeLeft > 0) {
                    this.timeLeft--;
                } else {
                    clearInterval(interval);
                    clearInterval(heartbeat);
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

        async saveAnswer(questionId, option) {
            this.userAnswers['q' + questionId] = option;
            
            try {
                const response = await fetch("{{ route('tryout.save-answer', ['type' => $type, 'id' => $id]) }}", {
                    method: 'POST',
                    headers: { 
                        'Content-Type': 'application/json', 
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ question_id: questionId, answer: option })
                });

                if (response.status === 419 || response.status === 401) {
                    // Jika sesi benar-benar hilang, simpan ke local storage agar jawaban tidak hilang
                    console.error('Sesi terputus. Menyimpan jawaban ke memori lokal browser.');
                    this.saveToLocalStorage(questionId, option);
                    
                    // Coba refresh token atau beritahu user
                    alert('Sesi Anda telah berakhir. Silakan login kembali, jawaban Anda tetap tersimpan di browser ini.');
                    window.location.href = "/login";
                }
            } catch (error) {
                console.error('Gagal mengirim jawaban:', error);
                this.saveToLocalStorage(questionId, option);
            }
        },

        saveToLocalStorage(qId, opt) {
            let backup = JSON.parse(localStorage.getItem('backup_ans_' + {{ $submission->id }}) || '{}');
            backup['q' + qId] = opt;
            localStorage.setItem('backup_ans_' + {{ $submission->id }}, JSON.stringify(backup));
        },

        toggleMark(qId) {
            if (this.markedQuestions.includes(qId)) {
                this.markedQuestions = this.markedQuestions.filter(id => id !== qId);
            } else {
                this.markedQuestions.push(qId);
            }
            localStorage.setItem('marked_q_' + {{ $submission->id }}, JSON.stringify(this.markedQuestions));
        },

        isMarked(qId) { return this.markedQuestions.includes(qId); },

        getQuestionStatusClass(index, qId) {
            if (this.currentQuestionIndex === index) return ' bg-secondary text-white border-secondary ring-2 ring-secondary/10 ';
            if (this.userAnswers['q' + qId]) return ' bg-primary text-white border-primary shadow-sm ';
            if (this.isMarked(qId)) return ' bg-yellow-400 text-white border-yellow-400 shadow-sm ';
            return ' bg-white border-gray-100 text-secondary/20 hover:border-primary/20 hover:text-primary ';
        },

        nextQuestion() { if (this.currentQuestionIndex < this.questions.length - 1) this.currentQuestionIndex++; },
        prevQuestion() { if (this.currentQuestionIndex > 0) this.currentQuestionIndex--; },
        autoFinish() { document.querySelector('form').submit(); }
    }
}
</script>
@endsection
