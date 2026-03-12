    <!-- AI Chatbot (OneBot) Widget -->
    <div x-data="{ 
            open: false, 
            messages: [{ role: 'bot', text: 'Halo! Saya OneBot. Ada yang bisa saya bantu terkait pendaftaran, materi belajar, atau fitur OneLearning?' }],
            userInput: '',
            loading: false,
            async sendMessage() {
                if (!this.userInput.trim() || this.loading) return;
                
                const userText = this.userInput;
                this.messages.push({ role: 'user', text: userText });
                this.userInput = '';
                this.loading = true;

                this.$nextTick(() => { this.scrollToBottom() });

                try {
                    const response = await fetch('{{ route('chatbot.send') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ message: userText })
                    });
                    const data = await response.json();
                    this.messages.push({ role: 'bot', text: data.reply });
                } catch (error) {
                    this.messages.push({ role: 'bot', text: 'Maaf, sepertinya saya sedang gangguan. Coba lagi ya!' });
                } finally {
                    this.loading = false;
                    this.$nextTick(() => { this.scrollToBottom() });
                }
            },
            scrollToBottom() {
                const container = this.$refs.chatContainer;
                if(container) container.scrollTo({ top: container.scrollHeight, behavior: 'smooth' });
            }
         }" 
         class="fixed bottom-4 right-4 md:bottom-6 md:right-6 z-[150] no-print">
        
        <!-- Chat Window -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-10 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 translate-y-10 scale-95"
             class="absolute bottom-20 right-0 w-[calc(100vw-32px)] sm:w-[380px] h-[calc(100dvh-120px)] sm:h-[550px] max-h-[700px] bg-white rounded-3xl md:rounded-[2.5rem] shadow-[0_30px_100px_rgba(0,0,0,0.15)] border border-gray-100 overflow-hidden flex flex-col origin-bottom-right"
             style="display: none;"
             @click.away="open = false">
            
            <!-- Header -->
            <div class="bg-secondary p-5 md:p-6 text-white relative overflow-hidden shrink-0">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/20 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                <div class="relative z-10 flex items-center gap-3 md:gap-4">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg transform -rotate-6">
                        <img src="{{ asset('images/logo.png') }}" alt="Bot" class="w-6 h-6 md:w-8 md:h-8 object-contain">
                    </div>
                    <div>
                        <h4 class="font-black text-sm md:text-base italic tracking-tight leading-tight">OneBot <span class="not-italic text-primary">AI</span></h4>
                        <div class="flex items-center gap-1.5 mt-0.5 md:mt-1">
                            <span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-green-500 rounded-full animate-pulse"></span>
                            <span class="text-[8px] md:text-[10px] font-bold text-white/50 uppercase tracking-widest">Asisten Akademik</span>
                        </div>
                    </div>
                    <button @click="open = false" class="ml-auto w-9 h-9 md:w-10 md:h-10 rounded-lg md:rounded-xl bg-white/10 flex items-center justify-center hover:bg-white/20 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
            </div>

            <!-- Messages Container -->
            <div x-ref="chatContainer" class="flex-1 overflow-y-auto p-5 md:p-6 space-y-4 md:space-y-5 bg-gray-50/30 scroll-smooth">
                <template x-for="(msg, index) in messages" :key="index">
                    <div :class="msg.role === 'user' ? 'flex justify-end' : 'flex justify-start'">
                        <div class="flex flex-col max-w-[90%] md:max-w-[85%]">
                            <div :class="msg.role === 'user' ? 'bg-primary text-white rounded-2xl md:rounded-3xl rounded-tr-none shadow-lg shadow-primary/10' : 'bg-white text-secondary rounded-2xl md:rounded-3xl rounded-tl-none border border-gray-100 shadow-sm'" 
                                 class="p-3.5 md:p-4 text-xs md:text-[13px] font-bold leading-relaxed">
                                <p x-html="msg.text.replace(/\n/g, '<br>')"></p>
                            </div>
                            <span :class="msg.role === 'user' ? 'text-right' : 'text-left'" class="text-[8px] md:text-[9px] font-bold text-secondary/20 uppercase tracking-widest mt-1.5 px-1">
                                <span x-text="msg.role === 'user' ? 'Kamu' : 'OneBot'"></span>
                            </span>
                        </div>
                    </div>
                </template>
                
                <!-- Loading State -->
                <div x-show="loading" class="flex justify-start">
                    <div class="bg-white p-3.5 md:p-4 rounded-2xl md:rounded-3xl rounded-tl-none border border-gray-100 shadow-sm flex gap-1.5 items-center">
                        <div class="flex gap-1">
                            <span class="w-1.5 h-1.5 bg-primary/40 rounded-full animate-bounce"></span>
                            <span class="w-1.5 h-1.5 bg-primary/40 rounded-full animate-bounce" style="animation-delay: 0.2s"></span>
                            <span class="w-1.5 h-1.5 bg-primary/40 rounded-full animate-bounce" style="animation-delay: 0.4s"></span>
                        </div>
                        <span class="text-[9px] md:text-[10px] font-black text-secondary/30 uppercase tracking-widest ml-2">Mengetik...</span>
                    </div>
                </div>
            </div>

            <!-- Input Area -->
            <div class="p-4 md:p-5 bg-white border-t border-gray-100 shrink-0 pb-safe-offset-4">
                <form @submit.prevent="sendMessage" class="relative flex items-center">
                    <input type="text" 
                           x-model="userInput" 
                           placeholder="Tanyakan materi atau fitur..." 
                           class="w-full bg-gray-50 border-transparent focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl md:rounded-2xl pl-4 md:pl-5 pr-12 md:pr-14 py-3.5 md:py-4 text-xs md:text-[13px] font-bold text-secondary outline-none transition-all placeholder:text-secondary/20">
                    <button type="submit" 
                            :disabled="loading"
                            class="absolute right-1.5 md:right-2 w-9 h-9 md:w-10 md:h-10 bg-secondary text-white rounded-lg md:rounded-xl flex items-center justify-center hover:bg-primary transition-all active:scale-90 disabled:opacity-50 shadow-lg">
                        <svg class="w-4 h-4 md:w-5 md:h-5 rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9-7-9-7V19z" /></svg>
                    </button>
                </form>
                <p class="text-[8px] md:text-[9px] text-center text-secondary/20 font-bold uppercase tracking-widest mt-3 md:mt-4 italic">Powered by OneLearning AI Intelligence</p>
            </div>
        </div>

        <!-- Toggle Button -->
        <button @click="open = !open" 
                class="w-14 h-14 md:w-16 md:h-16 bg-secondary text-white rounded-2xl md:rounded-[2.2rem] shadow-[0_20px_50px_rgba(30,58,138,0.3)] flex items-center justify-center hover:bg-primary md:hover:-translate-y-1 transition-all active:scale-95 group relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <svg x-show="!open" class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
            <svg x-show="open" style="display: none;" class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            
            <!-- Online Indicator Badge -->
            <span x-show="!open" class="absolute top-3 right-3 md:top-4 md:right-4 w-3 md:w-3.5 h-3 md:h-3.5 bg-green-500 border-2 border-secondary rounded-full shadow-sm animate-pulse"></span>
        </button>
    </div>
