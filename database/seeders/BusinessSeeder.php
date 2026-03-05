<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BusinessSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title' => 'Kemitraan Sekolah',
                'category' => 'Layanan Bisnis',
                'description' => 'Solusi tryout massal dan sistem manajemen nilai untuk sekolah menengah atas.',
                'is_active' => true,
            ],
            [
                'title' => 'Komunitas Pendidik',
                'category' => 'Future Educators',
                'description' => 'Wadah berbagi materi dan metode pembelajaran inovatif bagi para guru.',
                'is_active' => true,
            ],
            [
                'title' => 'Profil Perusahaan',
                'category' => 'Tentang Kami',
                'description' => 'PT One Learning Indonesia adalah platform teknologi edukasi yang berfokus pada keadilan akses pendidikan.',
                'is_active' => true,
            ],
        ];

        foreach ($data as $item) {
            Business::updateOrCreate(
                ['slug' => Str::slug($item['title'])],
                $item
            );
        }
    }
}
