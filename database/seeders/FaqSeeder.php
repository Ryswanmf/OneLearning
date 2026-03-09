<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'category' => 'Akun',
                'question' => 'Bagaimana cara mendaftar di OneLearning?',
                'answer' => 'Anda dapat mendaftar dengan mengklik tombol "Daftar" di pojok kanan atas, lalu isi formulir dengan data diri yang valid atau gunakan akun Google untuk pendaftaran cepat.',
                'order' => 1,
            ],
            [
                'category' => 'Pembayaran',
                'question' => 'Metode pembayaran apa saja yang tersedia?',
                'answer' => 'Kami menerima pembayaran melalui Transfer Bank (Virtual Account), E-Wallet (Gopay, OVO, Dana), dan gerai retail seperti Alfamart/Indomaret.',
                'order' => 2,
            ],
            [
                'category' => 'Tryout',
                'question' => 'Kapan saya bisa melihat hasil tryout saya?',
                'answer' => 'Hasil tryout dan pembahasan akan tersedia segera setelah Anda menyelesaikan ujian di menu "Riwayat Tryout".',
                'order' => 3,
            ],
            [
                'category' => 'Teknis',
                'question' => 'Dapatkah saya mengakses materi di aplikasi mobile?',
                'answer' => 'Ya, platform kami responsif dan dapat diakses melalui browser di smartphone, tablet, maupun komputer desktop.',
                'order' => 4,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }
    }
}
