@extends('layouts.app')

@section('title', 'Pembayaran - ' . $transaction->reference_id)

@section('content')
<div class="min-h-screen bg-gray-50 py-20">
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-[3.5rem] border border-gray-100 shadow-2xl overflow-hidden animate-fade-up">
            <div class="p-12 text-center bg-gray-50/50 border-b border-gray-50">
                <div class="text-[10px] font-black text-secondary/30 uppercase tracking-[0.3em] mb-2">Invoice Reference</div>
                <h1 class="text-2xl font-black text-secondary">{{ $transaction->reference_id }}</h1>
            </div>

            <div class="p-12 space-y-10 text-center">
                <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto text-primary">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                
                <div>
                    <h2 class="text-xl font-black text-secondary italic">Selesaikan Pembayaran</h2>
                    <p class="text-secondary/50 font-medium mt-2">Item: <strong>{{ $transaction->buyable->name ?? $transaction->buyable->title }}</strong></p>
                    <div class="text-3xl font-black text-primary mt-4 tracking-tighter">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</div>
                </div>

                <div class="space-y-4">
                    <button id="pay-button" class="w-full py-5 bg-primary text-white font-black text-sm uppercase tracking-[0.2em] rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all transform hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-3">
                        Bayar Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </button>
                    <a href="{{ route('order.history') }}" class="block text-[10px] font-black text-secondary/30 uppercase tracking-widest hover:text-secondary">Bayar Nanti</a>
                </div>

                <div class="pt-8 border-t border-gray-50 flex items-center justify-center gap-6 opacity-40 grayscale">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_dan_bank_mandiri.svg" class="h-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" class="h-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_ovo_purple.svg" class="h-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_Dana.svg" class="h-4">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Midtrans Snap JS -->
<script src="{{ config('services.midtrans.is_production') ? 'https://app.midtrans.com/snap/snap.js' : 'https://app.sandbox.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.client_key') }}"></script>
<script type="text/javascript">
    const payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        window.snap.pay('{{ $transaction->snap_token }}', {
            onSuccess: function (result) {
                window.location.href = "{{ route('order.handle-success', $transaction->reference_id) }}";
            },
            onPending: function (result) {
                window.location.href = "{{ route('order.history') }}";
            },
            onError: function (result) {
                alert("Pembayaran gagal!");
            },
            onClose: function () {
                alert('Anda menutup popup tanpa menyelesaikan pembayaran');
            }
        });
    });
</script>
@endsection
