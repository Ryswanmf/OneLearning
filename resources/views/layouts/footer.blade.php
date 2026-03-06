<!-- Footer -->
<footer class="bg-secondary pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Brand -->
            <div class="lg:col-span-1">
                <a href="/" class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="OneLearning Logo" class="w-12 h-12">
                    <span class="font-extrabold text-2xl tracking-tight text-white">One<span class="text-primary">Learning</span></span>
                </a>
                <p class="text-white/60 text-sm leading-relaxed mb-8">
                    Platform simulasi tryout online nomor satu di Indonesia. Kami membantu kamu mempersiapkan diri menghadapi ujian masa depan dengan teknologi pendidikan tercanggih.
                </p>
                <div class="flex items-center gap-4">
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Links 1 -->
            <div>
                <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6">Program Kami</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">UTBK-SNBT 2024</a></li>
                    <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">CPNS & PPPK</a></li>
                    <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Sekolah Kedinasan</a></li>
                    <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Ujian Mandiri PTN</a></li>
                </ul>
            </div>

            <!-- Links 2 -->
            <div>
                <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6">Bantuan</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Cara Mendaftar</a></li>
                    <li><a href="#" class="text-white/60 text-sm hover:text-primary transition-colors">Pusat Bantuan</a></li>
                    <li><a href="{{ route('privacy-policy') }}" class="text-white/50 hover:text-primary transition-colors">Kebijakan Privasi</a></li>
                    <li><a href="{{ route('terms-conditions') }}" class="text-white/60 text-sm hover:text-primary transition-colors">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-black text-sm uppercase tracking-widest mb-6">Hubungi Kami</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span class="text-white/60 text-sm">support@onelearning.id</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-white/60 text-sm">Jakarta Selatan, Indonesia</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-white/40 text-xs font-medium text-center md:text-left">
                &copy; 2024 OneLearning Indonesia. All rights reserved.
            </div>
            <div class="flex items-center gap-6 grayscale opacity-30 hover:grayscale-0 hover:opacity-100 transition-all">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_dana_blue.svg" class="h-4" alt="Dana">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_ovo_purple.svg" class="h-4" alt="OVO">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-4" alt="PayPal">
            </div>
        </div>
    </div>
</footer>
