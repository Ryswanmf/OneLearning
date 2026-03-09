<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Aditya Nugraha',
                'target' => 'Lolos Kedokteran UI',
                'content' => 'OneLearning sangat membantu saya dalam persiapan UTBK. Sistem IRT-nya sangat mirip dengan aslinya, sehingga saya bisa mengukur kemampuan saya dengan akurat.',
                'rating' => 5,
                'is_featured' => true,
            ],
            [
                'name' => 'Siti Aminah',
                'target' => 'Lolos Akuntansi ITB',
                'content' => 'Materi yang disediakan sangat lengkap dan mudah dipahami. Bank soalnya selalu update dengan tren ujian terbaru. Sangat direkomendasikan!',
                'rating' => 5,
                'is_featured' => true,
            ],
            [
                'name' => 'Budi Santoso',
                'target' => 'Lolos Teknik Mesin UGM',
                'content' => 'Awalnya saya ragu, tapi setelah mencoba tryout gratis, saya langsung jatuh cinta. Pembahasan soalnya sangat detail dan membantu saya memahami konsep dasar.',
                'rating' => 4,
                'is_featured' => true,
            ],
            [
                'name' => 'Rina Wijaya',
                'target' => 'Lolos Psikologi UNPAD',
                'content' => 'Fitur ranking real-time membuat saya semakin termotivasi untuk terus belajar. Terima kasih OneLearning sudah menemani perjalanan saya!',
                'rating' => 5,
                'is_featured' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(['name' => $testimonial['name']], $testimonial);
        }
    }
}
