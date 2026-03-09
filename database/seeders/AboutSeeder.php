<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        $abouts = [
            [
                'title' => 'Tentang OneLearning',
                'category' => 'Profil',
                'description' => 'OneLearning adalah platform pendidikan digital terdepan di Indonesia yang berdedikasi untuk membantu siswa meraih impian akademis mereka melalui bimbingan belajar berkualitas dan sistem tryout yang akurat.',
                'order' => 1,
            ],
            [
                'title' => 'Visi Kami',
                'category' => 'Visi',
                'description' => 'Menjadi mitra belajar nomor satu yang mampu mencetak generasi cerdas, inovatif, dan siap bersaing di tingkat nasional maupun internasional.',
                'order' => 2,
            ],
            [
                'title' => 'Misi Kami',
                'category' => 'Misi',
                'description' => '1. Menyediakan materi belajar yang mudah dipahami. 2. Mengembangkan teknologi pendidikan yang interaktif. 3. Membantu siswa dalam persiapan ujian dengan simulasi yang realistis.',
                'order' => 3,
            ],
        ];

        foreach ($abouts as $about) {
            About::updateOrCreate(['title' => $about['title']], $about);
        }
    }
}
