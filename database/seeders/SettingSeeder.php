<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // HERO SECTION
            ['key' => 'hero_title', 'value' => 'Solusi Tryout Online Terakreditasi Nomor #1', 'group' => 'hero', 'type' => 'text'],
            ['key' => 'hero_subtitle', 'value' => 'Wujudkan impian masuk PTN favorit bersama platform belajar dengan sistem penilaian IRT tercanggih di Indonesia.', 'group' => 'hero', 'type' => 'textarea'],
            ['key' => 'hero_cta_text', 'value' => 'Mulai Tryout Gratis', 'group' => 'hero', 'type' => 'text'],
            ['key' => 'hero_image', 'value' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1200', 'group' => 'hero', 'type' => 'text'],

            // STATS SECTION
            ['key' => 'stats_students', 'value' => '100.000+', 'group' => 'stats', 'type' => 'text'],
            ['key' => 'stats_passing_rate', 'value' => '98%', 'group' => 'stats', 'type' => 'text'],
            ['key' => 'stats_total_tryouts', 'value' => '1.500+', 'group' => 'stats', 'type' => 'text'],

            // ADVANTAGES SECTION
            ['key' => 'adv_1_title', 'value' => 'Sistem IRT Akurat', 'group' => 'advantages', 'type' => 'text'],
            ['key' => 'adv_1_desc', 'value' => 'Penilaian menggunakan algoritma Item Response Theory yang sama dengan standar nasional.', 'group' => 'advantages', 'type' => 'textarea'],
            ['key' => 'adv_2_title', 'value' => 'Analisis Mendalam', 'group' => 'advantages', 'type' => 'text'],
            ['key' => 'adv_2_desc', 'value' => 'Dapatkan laporan kelemahan dan kekuatan di setiap materi pelajaran secara detail.', 'group' => 'advantages', 'type' => 'textarea'],

            // CTA BOTTOM SECTION
            ['key' => 'cta_bottom_title', 'value' => 'Siap Jadi Bagian Dari Alumni Sukses Kami?', 'group' => 'cta', 'type' => 'text'],
            ['key' => 'cta_bottom_subtitle', 'value' => 'Jangan tunda lagi masa depanmu. Mulai persiapan sekarang dan jadilah juara.', 'group' => 'cta', 'type' => 'textarea'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
