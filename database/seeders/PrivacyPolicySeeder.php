<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrivacyPolicy;

class PrivacyPolicySeeder extends Seeder
{
    public function run(): void
    {
        $policies = [
            [
                'title' => 'Pengumpulan Informasi',
                'content' => 'Kami mengumpulkan informasi yang Anda berikan saat mendaftar, seperti nama, alamat email, dan nomor telepon. Kami juga mengumpulkan data penggunaan secara otomatis untuk meningkatkan layanan kami.',
                'order' => 1,
            ],
            [
                'title' => 'Penggunaan Informasi',
                'content' => 'Informasi yang kami kumpulkan digunakan untuk memproses transaksi Anda, memberikan akses ke materi kursus, mengirimkan pembaruan layanan, dan melakukan analisis internal demi kenyamanan pengguna.',
                'order' => 2,
            ],
            [
                'title' => 'Keamanan Data',
                'content' => 'Kami mengambil langkah-langkah keamanan yang wajar untuk melindungi informasi pribadi Anda dari akses, penggunaan, atau pengungkapan yang tidak sah. Namun, tidak ada metode transmisi melalui internet yang 100% aman.',
                'order' => 3,
            ],
            [
                'title' => 'Berbagi Informasi',
                'content' => 'Kami tidak menjual atau menyewakan informasi pribadi Anda kepada pihak ketiga. Kami hanya membagikan informasi dengan mitra terpercaya yang membantu kami menjalankan platform kami (seperti penyedia pembayaran).',
                'order' => 4,
            ],
        ];

        foreach ($policies as $policy) {
            PrivacyPolicy::updateOrCreate(['title' => $policy['title']], $policy);
        }
    }
}
