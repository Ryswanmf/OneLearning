<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessService;
use Illuminate\Support\Str;

class BusinessServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Tryout Masal Sekolah',
                'description' => 'Kami menyediakan platform simulasi tryout berskala besar untuk sekolah yang ingin mengukur kemampuan siswanya dengan sistem IRT yang akurat.',
                'is_active' => true,
            ],
            [
                'title' => 'Kerjasama Bimbel Online',
                'description' => 'Layanan integrasi konten dan platform untuk lembaga bimbingan belajar yang ingin mendigitalisasi sistem ujian mereka.',
                'is_active' => true,
            ],
            [
                'title' => 'Pelatihan Guru Digital',
                'description' => 'Workshop intensif bagi para pendidik untuk menguasai teknologi pembelajaran modern dan pembuatan konten edukatif yang menarik.',
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            BusinessService::updateOrCreate(
                ['title' => $service['title']],
                array_merge($service, ['slug' => Str::slug($service['title'])])
            );
        }
    }
}
