<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HowToRegister;

class HowToRegisterSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            [
                'step_number' => 1,
                'title' => 'Buat Akun',
                'description' => 'Klik tombol "Daftar" di halaman utama, kemudian isi data diri Anda seperti nama, email, dan nomor WhatsApp yang aktif.',
                'is_active' => true,
            ],
            [
                'step_number' => 2,
                'title' => 'Pilih Paket Belajar',
                'description' => 'Telusuri berbagai paket tryout atau kursus yang tersedia di menu "Produk" dan pilih yang sesuai dengan kebutuhan belajar Anda.',
                'is_active' => true,
            ],
            [
                'step_number' => 3,
                'title' => 'Lakukan Pembayaran',
                'description' => 'Selesaikan pembayaran menggunakan metode yang Anda pilih (Virtual Account, E-Wallet, atau Alfamart/Indomaret).',
                'is_active' => true,
            ],
            [
                'step_number' => 4,
                'title' => 'Mulai Belajar',
                'description' => 'Setelah pembayaran terkonfirmasi secara otomatis, Anda dapat langsung mengakses materi dan memulai simulasi tryout di dashboard Anda.',
                'is_active' => true,
            ],
        ];

        foreach ($steps as $step) {
            HowToRegister::updateOrCreate(['title' => $step['title']], $step);
        }
    }
}
