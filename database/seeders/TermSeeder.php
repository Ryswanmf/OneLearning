<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Term;

class TermSeeder extends Seeder
{
    public function run(): void
    {
        $terms = [
            [
                'title' => 'Ketentuan Umum',
                'content' => 'Selamat datang di OneLearning. Dengan mengakses dan menggunakan layanan kami, Anda setuju untuk terikat oleh syarat dan ketentuan berikut. Jika Anda tidak setuju dengan bagian mana pun dari syarat-syarat ini, Anda tidak diperkenankan menggunakan layanan kami.',
                'order' => 1,
            ],
            [
                'title' => 'Akun Pengguna',
                'content' => 'Anda bertanggung jawab penuh untuk menjaga kerahasiaan informasi akun dan kata sandi Anda. Anda setuju untuk segera memberitahu kami jika ada penggunaan yang tidak sah atas akun Anda atau pelanggaran keamanan lainnya.',
                'order' => 2,
            ],
            [
                'title' => 'Pembayaran dan Layanan',
                'content' => 'Layanan tertentu mungkin memerlukan pembayaran. Harga yang tercantum adalah final kecuali dinyatakan sebaliknya. Kami berhak mengubah harga kapan saja tanpa pemberitahuan sebelumnya, namun perubahan tersebut tidak akan memengaruhi pembelian yang sudah selesai.',
                'order' => 3,
            ],
            [
                'title' => 'Hak Kekayaan Intelektual',
                'content' => 'Semua materi yang disediakan di platform OneLearning, termasuk namun tidak terbatas pada video, teks, gambar, dan materi ujian, adalah milik intelektual OneLearning atau pemberi lisensinya. Anda tidak diperbolehkan menggandakan, mendistribusikan, atau menyalahgunakan materi tersebut tanpa izin tertulis.',
                'order' => 4,
            ],
            [
                'title' => 'Pembatalan dan Pengembalian Dana',
                'content' => 'Kebijakan pengembalian dana bervariasi tergantung pada jenis paket yang dibeli. Umumnya, pengembalian dana hanya dapat dilakukan jika ada kesalahan sistem yang menyebabkan akses tidak dapat diberikan setelah pembayaran berhasil dikonfirmasi.',
                'order' => 5,
            ],
            [
                'title' => 'Perubahan Syarat dan Ketentuan',
                'content' => 'OneLearning berhak untuk memperbarui atau mengubah syarat dan ketentuan ini kapan saja. Perubahan akan berlaku segera setelah dipublikasikan di halaman ini. Penggunaan berkelanjutan atas layanan kami setelah perubahan tersebut merupakan bentuk persetujuan Anda.',
                'order' => 6,
            ],
        ];

        foreach ($terms as $term) {
            Term::updateOrCreate(['title' => $term['title']], $term);
        }
    }
}
