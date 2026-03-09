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
                'title' => 'Tentor Matematika SMA',
                'description' => 'Mencari pengajar yang mampu menyampaikan materi matematika dengan cara yang kreatif, sederhana, dan menyenangkan bagi siswa SMA.',
                'is_active' => true,
            ],
            [
                'title' => 'Content Creator Edukasi',
                'description' => 'Bergabunglah untuk menciptakan video pembelajaran dan infografis menarik yang akan membantu ribuan siswa di seluruh Indonesia.',
                'is_active' => true,
            ],
            [
                'title' => 'Penulis Bank Soal UTBK',
                'description' => 'Dibutuhkan ahli materi yang mampu menyusun soal-soal HOTS sesuai dengan tren terbaru seleksi nasional masuk perguruan tinggi.',
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
