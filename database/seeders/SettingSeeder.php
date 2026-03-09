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
            ['key' => 'hero_title', 'value' => 'Raih Kampus Impianmu Sekarang.', 'group' => 'hero', 'type' => 'text'],
            ['key' => 'hero_subtitle', 'value' => 'Platform simulasi tryout tercanggih dengan sistem IRT & Ranking Real-time. Persiapan matang untuk masa depan cerah.', 'group' => 'hero', 'type' => 'textarea'],
            ['key' => 'hero_cta_text', 'value' => 'Mulai Tryout Gratis', 'group' => 'hero', 'type' => 'text'],
            ['key' => 'hero_image', 'value' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1200', 'group' => 'hero', 'type' => 'image'],

            // STATS SECTION
            ['key' => 'stats_students', 'value' => '100.000+', 'group' => 'stats', 'type' => 'text'],
            ['key' => 'stats_passing_rate', 'value' => '98%', 'group' => 'stats', 'type' => 'text'],
            ['key' => 'stats_total_tryouts', 'value' => '1.500+', 'group' => 'stats', 'type' => 'text'],

            // CTA BOTTOM SECTION
            ['key' => 'cta_bottom_title', 'value' => 'Siap Jadi Bagian Dari Alumni Sukses Kami?', 'group' => 'cta', 'type' => 'text'],
            ['key' => 'cta_bottom_subtitle', 'value' => 'Jangan tunda lagi masa depanmu. Mulai persiapan sekarang dan jadilah juara.', 'group' => 'cta', 'type' => 'textarea'],

            // CONTACT
            ['key' => 'whatsapp_number', 'value' => '6289515915699', 'group' => 'contact', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'support@onelearning.id', 'group' => 'contact', 'type' => 'text'],
            ['key' => 'contact_address', 'value' => 'Jakarta Selatan, Indonesia', 'group' => 'contact', 'type' => 'textarea'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
