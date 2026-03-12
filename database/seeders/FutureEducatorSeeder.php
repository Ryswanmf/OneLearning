<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FutureEducator;
use Illuminate\Support\Str;

class FutureEducatorSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            [
                'title' => 'Guru Penggerak Digital',
                'description' => 'Pelatihan teknologi instruksional tingkat lanjut untuk guru masa depan dalam menghadapi era pendidikan 4.0.',
                'image' => '💻',
                'is_active' => true,
            ],
            [
                'title' => 'Beasiswa Sertifikasi Pendidik',
                'description' => 'Program bantuan biaya sertifikasi internasional bagi pengajar muda berprestasi untuk meningkatkan standar pengajaran.',
                'image' => '🎓',
                'is_active' => true,
            ],
            [
                'title' => 'Forum Diskusi Inovasi Kurikulum',
                'description' => 'Komunitas eksklusif bagi para pendidik untuk berbagi strategi dan praktik terbaik dalam implementasi Kurikulum Merdeka.',
                'image' => '💡',
                'is_active' => true,
            ],
        ];

        foreach ($positions as $position) {
            FutureEducator::updateOrCreate(
                ['title' => $position['title']],
                array_merge($position, ['slug' => Str::slug($position['title'])])
            );
        }
    }
}
