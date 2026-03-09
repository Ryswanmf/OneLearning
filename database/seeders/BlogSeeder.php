<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $userId = User::where('role', 'admin')->first()?->id ?? User::first()?->id;

        $blogs = [
            [
                'title' => 'Tips Ampuh Lolos UTBK-SNBT 2024',
                'category' => 'UTBK',
                'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Menghadapi UTBK-SNBT memerlukan strategi yang matang. Berikut adalah beberapa tips yang bisa Anda terapkan:</p><ul><li>Pahami konsep dasar setiap materi.</li><li>Latihan soal secara rutin setiap hari.</li><li>Ikuti simulasi tryout dengan sistem IRT.</li><li>Kelola waktu pengerjaan soal dengan efisien.</li></ul><p>Dengan persiapan yang konsisten, peluang Anda untuk lolos ke PTN impian akan semakin besar.</p>',
            ],
            [
                'title' => 'Memahami Sistem Penilaian IRT di OneLearning',
                'category' => 'Edukasi',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Item Response Theory (IRT) adalah sistem penilaian yang digunakan dalam seleksi nasional masuk perguruan tinggi. Di OneLearning, kami mengadopsi sistem ini untuk memberikan hasil yang akurat.</p><p>IRT tidak hanya menghitung jumlah benar, tetapi juga melihat tingkat kesulitan soal. Soal yang jarang dijawab benar oleh peserta lain akan memberikan bobot skor yang lebih tinggi jika Anda berhasil menjawabnya dengan benar.</p>',
            ],
            [
                'title' => 'Pentingnya Simulasi Tryout Sejak Dini',
                'category' => 'Tips Belajar',
                'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Banyak siswa yang meremehkan pentingnya tryout. Padahal, tryout adalah cerminan dari kemampuan Anda saat ini.</p><p>Manfaat mengikuti tryout sejak dini meliputi: mengenal medan tempur, mengukur kemampuan diri, melatih ketenangan mental, dan mengevaluasi kelemahan materi. Jangan menunggu hingga mendekati hari H untuk memulai simulasi.</p>',
            ],
            [
                'title' => 'Strategi Belajar Efektif untuk Siswa SMA',
                'category' => 'Edukasi',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Belajar berjam-jam tidak menjamin efektivitas. Kuncinya adalah belajar cerdas, bukan hanya belajar keras.</p><p>Gunakan teknik Pomodoro untuk menjaga fokus, buat peta konsep (mind mapping) untuk memahami keterkaitan materi, dan jangan lupa untuk mengulang kembali materi yang telah dipelajari secara berkala (Spaced Repetition).</p>',
            ],
            [
                'title' => 'Cara Memilih Jurusan Kuliah yang Tepat',
                'category' => 'Info PTN',
                'image' => 'https://images.unsplash.com/photo-1541339907198-e08756cdfb3f?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Memilih jurusan kuliah adalah keputusan besar dalam hidup. Berikut panduannya:</p><ol><li>Kenali minat dan bakat Anda.</li><li>Riset prospek kerja di masa depan.</li><li>Konsultasikan dengan orang tua dan guru BK.</li><li>Pertimbangkan akreditasi jurusan dan universitas.</li></ol><p>Pilihlah jurusan yang benar-benar Anda nikmati agar masa perkuliahan terasa menyenangkan.</p>',
            ],
            [
                'title' => 'Mengenal Kurikulum Merdeka di Jenjang SD',
                'category' => 'SD',
                'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da096a0b?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Kurikulum Merdeka memberikan keleluasaan bagi guru dan siswa dalam proses pembelajaran. Di jenjang SD, fokus utamanya adalah pada penguatan karakter dan literasi numerasi dasar.</p><p>Pembelajaran berbasis projek menjadi salah satu ciri khas kurikulum ini, yang bertujuan untuk mengembangkan kompetensi abad 21 pada anak sejak usia dini.</p>',
            ],
            [
                'title' => 'Persiapan Mental Menghadapi Ujian Nasional',
                'category' => 'Tips Belajar',
                'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Kecemasan berlebih dapat mengganggu performa saat ujian. Persiapan mental sama pentingnya dengan persiapan materi.</p><p>Pastikan Anda mendapatkan istirahat yang cukup, lakukan teknik pernapasan untuk meredakan stres, dan bangun pola pikir positif bahwa Anda mampu menghadapi ujian dengan baik.</p>',
            ],
            [
                'title' => 'Keuntungan Ikut Tryout Online vs Offline',
                'category' => 'Edukasi',
                'image' => 'https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Di era digital, tryout online menawarkan berbagai kemudahan. Namun, tryout offline juga memiliki keunggulan tersendiri.</p><p>Tryout online unggul dalam kecepatan akses hasil dan fleksibilitas waktu. Sementara tryout offline memberikan pengalaman suasana ujian yang lebih nyata. Di OneLearning, kami mengoptimalkan sistem online agar semirip mungkin dengan ujian aslinya.</p>',
            ],
            [
                'title' => 'Tips Mengatur Waktu Belajar dan Istirahat',
                'category' => 'Tips Belajar',
                'image' => 'https://images.unsplash.com/photo-1495364141860-b0d03eedd04f?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Keseimbangan antara belajar dan istirahat adalah kunci produktivitas jangka panjang. Otak memerlukan waktu untuk memproses informasi yang baru masuk.</p><p>Hindari sistem kebut semalam (SKS). Aturlah jadwal harian dengan disiplin, sertakan waktu luang untuk hobi dan olahraga ringan agar pikiran tetap segar.</p>',
            ],
            [
                'title' => 'Update Terkini Informasi Pendaftaran PTN 2024',
                'category' => 'Info PTN',
                'image' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&q=80&w=800',
                'content' => '<p>Pemerintah baru saja merilis jadwal resmi pendaftaran PTN tahun 2024. Pastikan Anda tidak melewatkan tanggal-tanggal penting.</p><p>Mulai dari pembuatan akun SNPMB hingga pendaftaran SNBP dan SNBT, semua memiliki batas waktu yang ketat. Simpan jadwal ini dan pasang pengingat di gadget Anda.</p>',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::updateOrCreate(
                ['title' => $blog['title']],
                array_merge($blog, [
                    'user_id' => $userId,
                    'status' => 'published',
                ])
            );
        }
    }
}
