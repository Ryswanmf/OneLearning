<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Unggulan
            [
                'title' => 'Analisis SNBP',
                'category' => 'Unggulan',
                'package_count' => 1,
                'duration' => 'Sekali Cek',
                'description' => 'Prediksi kelulusan SNBP akurat berdasarkan data nilai rapor dan prestasi.',
                'is_featured' => true,
                'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600',
            ],
            [
                'title' => 'Tryout UTBK',
                'category' => 'Unggulan',
                'package_count' => 24,
                'duration' => '1 Tahun',
                'description' => 'Simulasi UTBK dengan skor prediktif menggunakan sistem penilaian IRT asli.',
                'is_featured' => true,
                'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=600',
            ],
            // Jenjang
            [
                'title' => '4 - 6 SD',
                'category' => 'Jenjang',
                'package_count' => 12,
                'duration' => '1 Tahun',
                'description' => 'Persiapan ujian sekolah dan pemantapan materi dasar SD.',
                'is_featured' => false,
                'image' => 'https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=600',
            ],
            [
                'title' => '7 - 9 SMP',
                'category' => 'Jenjang',
                'package_count' => 15,
                'duration' => '1 Tahun',
                'description' => 'Persiapan ujian masuk SMA favorit dan pemantapan materi SMP.',
                'is_featured' => false,
                'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600',
            ],
            [
                'title' => '10 - 11 SMA',
                'category' => 'Jenjang',
                'package_count' => 18,
                'duration' => '1 Tahun',
                'description' => 'Pemantapan materi SMA untuk bekal persiapan ujian akhir.',
                'is_featured' => false,
                'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600',
            ],
            [
                'title' => '12 SMA & UTBK',
                'category' => 'Jenjang',
                'package_count' => 30,
                'duration' => '1 Tahun',
                'description' => 'Program intensif persiapan kelulusan SMA dan seleksi masuk PTN.',
                'is_featured' => false,
                'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600',
            ],
            [
                'title' => 'Alumni',
                'category' => 'Jenjang',
                'package_count' => 20,
                'duration' => '1 Tahun',
                'description' => 'Program khusus untuk alumni yang ingin mencoba kembali seleksi PTN.',
                'is_featured' => false,
                'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => Str::slug($product['title'])],
                $product
            );
        }
    }
}
