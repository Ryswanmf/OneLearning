<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlumniTryout;
use App\Models\Question;

class AlumniMandiriQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = AlumniTryout::where('name', 'Tryout Spesialis Ujian Mandiri Alumni')->first();
        
        if (!$tryout) {
            $tryout = AlumniTryout::create([
                'name' => 'Tryout Spesialis Ujian Mandiri Alumni',
                'subject' => 'Mandiri Pack',
                'question_count' => 50,
                'duration_minutes' => 90,
                'price' => 30000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // TES POTENSI AKADEMIK - TPA (1-15)
            [
                'topic' => 'TPA - Verbal',
                'question_text' => 'Sinonim dari kata "Iterasi" adalah...',
                'option_a' => 'Perulangan',
                'option_b' => 'Perubahan',
                'option_c' => 'Penyusunan',
                'option_d' => 'Pengurangan',
                'option_e' => 'Perbaikan',
                'correct_answer' => 'a',
                'order' => 1
            ],
            [
                'topic' => 'TPA - Verbal',
                'question_text' => 'Antonim dari kata "Prominen" adalah...',
                'option_a' => 'Terkenal',
                'option_b' => 'Biasa',
                'option_c' => 'Utama',
                'option_d' => 'Tinggi',
                'option_e' => 'Hebat',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'TPA - Analogi',
                'question_text' => 'Bulan : Bumi = Bumi : ...',
                'option_a' => 'Orbit',
                'option_b' => 'Matahari',
                'option_c' => 'Bintang',
                'option_d' => 'Satelit',
                'option_e' => 'Planet',
                'correct_answer' => 'b',
                'order' => 3
            ],
            [
                'topic' => 'TPA - Logika',
                'question_text' => 'Jika semua pahlawan adalah pemberani, dan sebagian pemberani adalah prajurit, maka...',
                'option_a' => 'Semua pahlawan adalah prajurit.',
                'option_b' => 'Sebagian pahlawan adalah prajurit.',
                'option_c' => 'Prajurit bukan pahlawan.',
                'option_d' => 'Sebagian prajurit adalah pahlawan.',
                'option_e' => 'Tidak dapat ditarik kesimpulan.',
                'correct_answer' => 'e',
                'order' => 4
            ],
            [
                'topic' => 'TPA - Numerik',
                'question_text' => 'Jika 3x + 5 = 20, maka nilai 6x - 2 adalah...',
                'option_a' => '28',
                'option_b' => '30',
                'option_c' => '25',
                'option_d' => '32',
                'option_e' => '35',
                'correct_answer' => 'a',
                'order' => 5
            ],
            [
                'topic' => 'TPA - Deret',
                'question_text' => 'Pola: 2, 4, 8, 14, 22, ... Angka selanjutnya adalah...',
                'option_a' => '30',
                'option_b' => '32',
                'option_c' => '34',
                'option_d' => '36',
                'option_e' => '28',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'TPA - Figural',
                'question_text' => 'Manakah yang tidak termasuk kelompoknya?',
                'option_a' => 'Lingkaran',
                'option_b' => 'Persegi',
                'option_c' => 'Segitiga',
                'option_d' => 'Kubus',
                'option_e' => 'Trapesium',
                'correct_answer' => 'd',
                'order' => 7
            ],
            [
                'topic' => 'TPA - Verbal',
                'question_text' => 'Pedagogi adalah ilmu tentang...',
                'option_a' => 'Pengajaran',
                'option_b' => 'Kedokteran',
                'option_c' => 'Hukum',
                'option_d' => 'Tanaman',
                'option_e' => 'Bintang',
                'correct_answer' => 'a',
                'order' => 8
            ],
            [
                'topic' => 'TPA - Analogi',
                'question_text' => 'Sekolah : Guru : Siswa = ...',
                'option_a' => 'Rumah sakit : Pasien : Dokter',
                'option_b' => 'Pasar : Penjual : Pembeli',
                'option_c' => 'Sawah : Petani : Padi',
                'option_d' => 'Hutan : Pohon : Hewan',
                'option_e' => 'Kantor : Bos : Pegawai',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'TPA - Numerik',
                'question_text' => 'Berapakah 15% dari 250?',
                'option_a' => '30,5',
                'option_b' => '37,5',
                'option_c' => '40',
                'option_d' => '35',
                'option_e' => '42,5',
                'correct_answer' => 'b',
                'order' => 10
            ],
            [
                'topic' => 'TPA - Logika',
                'question_text' => 'Semua mahasiswa rajin belajar. Budi bukan mahasiswa. Kesimpulan:',
                'option_a' => 'Budi tidak rajin belajar.',
                'option_b' => 'Budi mungkin rajin belajar.',
                'option_c' => 'Budi adalah siswa.',
                'option_d' => 'Budi malas.',
                'option_e' => 'Tidak dapat disimpulkan.',
                'correct_answer' => 'e',
                'order' => 11
            ],
            [
                'topic' => 'TPA - Deret',
                'question_text' => 'Pola: A, C, E, G, ... Huruf selanjutnya adalah...',
                'option_a' => 'H',
                'option_b' => 'I',
                'option_c' => 'J',
                'option_d' => 'K',
                'option_e' => 'L',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'TPA - Numerik',
                'question_text' => 'Jika a = 2 dan b = 3, maka a^b + b^a adalah...',
                'option_a' => '13',
                'option_b' => '17',
                'option_c' => '25',
                'option_d' => '12',
                'option_e' => '10',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'TPA - Analogi',
                'question_text' => 'Kering : Air = ...',
                'option_a' => 'Lapar : Makan',
                'option_b' => 'Gelap : Lampu',
                'option_c' => 'Hampa : Udara',
                'option_d' => 'Dingin : Selimut',
                'option_e' => 'Bodoh : Buku',
                'correct_answer' => 'c',
                'order' => 14
            ],
            [
                'topic' => 'TPA - Logika',
                'question_text' => 'Jika hari hujan, maka jalan basah. Ternyata jalan tidak basah. Kesimpulan:',
                'option_a' => 'Hari tidak hujan.',
                'option_b' => 'Hari mendung.',
                'option_c' => 'Jalan baru diperbaiki.',
                'option_d' => 'Hujan baru saja berhenti.',
                'option_e' => 'Tidak ada air.',
                'correct_answer' => 'a',
                'order' => 15
            ],

            // MATEMATIKA DASAR (16-25)
            [
                'topic' => 'Matematika - Aljabar',
                'question_text' => 'Jika x^2 - 4 = 0, maka nilai x adalah...',
                'option_a' => '2',
                'option_b' => ' -2',
                'option_c' => '2 atau -2',
                'option_d' => '4',
                'option_e' => '0',
                'correct_answer' => 'c',
                'order' => 16
            ],
            [
                'topic' => 'Matematika - Peluang',
                'question_text' => 'Peluang munculnya angka genap pada sebuah dadu adalah...',
                'option_a' => '1/2',
                'option_b' => '1/3',
                'option_c' => '1/6',
                'option_d' => '2/3',
                'option_e' => '1',
                'correct_answer' => 'a',
                'order' => 17
            ],
            [
                'topic' => 'Matematika - Statistika',
                'question_text' => 'Rata-rata dari 5, 7, 8, 10 adalah...',
                'option_a' => '7',
                'option_b' => '7,5',
                'option_c' => '8',
                'option_d' => '8,5',
                'option_e' => '9',
                'correct_answer' => 'b',
                'order' => 18
            ],
            [
                'topic' => 'Matematika - Geometri',
                'question_text' => 'Luas lingkaran dengan jari-jari 7 cm adalah...',
                'option_a' => '44 cm²',
                'option_b' => '154 cm²',
                'option_c' => '22 cm²',
                'option_d' => '49 cm²',
                'option_e' => '100 cm²',
                'correct_answer' => 'b',
                'order' => 19
            ],
            [
                'topic' => 'Matematika - Eksponen',
                'question_text' => 'Hasil dari 2^3 x 2^4 adalah...',
                'option_a' => '2^7',
                'option_b' => '2^12',
                'option_c' => '4^7',
                'option_d' => '2^1',
                'option_e' => '16',
                'correct_answer' => 'a',
                'order' => 20
            ],
            [
                'topic' => 'Matematika - Logaritma',
                'question_text' => 'Nilai dari log 100 adalah...',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '10',
                'option_d' => '0',
                'option_e' => '100',
                'correct_answer' => 'b',
                'order' => 21
            ],
            [
                'topic' => 'Matematika - Fungsi',
                'question_text' => 'Jika f(x) = 2x - 3, maka f(5) adalah...',
                'option_a' => '7',
                'option_b' => '10',
                'option_c' => '13',
                'option_d' => '5',
                'option_e' => '2',
                'correct_answer' => 'a',
                'order' => 22
            ],
            [
                'topic' => 'Matematika - Trigonometri',
                'question_text' => 'Nilai sin 90 derajat adalah...',
                'option_a' => '0',
                'option_b' => '1/2',
                'option_c' => '1',
                'option_d' => '1/2 √2',
                'option_e' => 'tak hingga',
                'correct_answer' => 'c',
                'order' => 23
            ],
            [
                'topic' => 'Matematika - Himpunan',
                'question_text' => 'Irisan dari A = {1, 2, 3} dan B = {2, 3, 4} adalah...',
                'option_a' => '{1, 4}',
                'option_b' => '{2, 3}',
                'option_c' => '{1, 2, 3, 4}',
                'option_d' => '{}',
                'option_e' => '{2}',
                'correct_answer' => 'b',
                'order' => 24
            ],
            [
                'topic' => 'Matematika - Persamaan Garis',
                'question_text' => 'Gradien garis y = 3x + 5 adalah...',
                'option_a' => '3',
                'option_b' => '5',
                'option_c' => ' -3',
                'option_d' => '1/3',
                'option_e' => '0',
                'correct_answer' => 'a',
                'order' => 25
            ],

            // BAHASA INDONESIA (26-38)
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Penulisan kata baku yang benar adalah...',
                'option_a' => 'Apotik',
                'option_b' => 'Apotek',
                'option_c' => 'Ijin',
                'option_d' => 'Analisa',
                'option_e' => 'Praktek',
                'correct_answer' => 'b',
                'order' => 26
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Ide pokok paragraf yang terletak di akhir disebut...',
                'option_a' => 'Deduktif',
                'option_b' => 'Induktif',
                'option_c' => 'Campuran',
                'option_d' => 'Naratif',
                'option_e' => 'Deskriptif',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Kalimat yang mengandung opini adalah...',
                'option_a' => 'Matahari terbit dari timur.',
                'option_b' => 'Indonesia merdeka tahun 1945.',
                'option_c' => 'Pemandangan di sini sangat indah.',
                'option_d' => 'Air membeku pada suhu 0 derajat Celsius.',
                'option_e' => 'Sapi adalah hewan herbivora.',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Konjungsi yang menyatakan urutan waktu adalah...',
                'option_a' => 'Karena',
                'option_b' => 'Setelah itu',
                'option_c' => 'Tetapi',
                'option_d' => 'Meskipun',
                'option_e' => 'Atau',
                'correct_answer' => 'b',
                'order' => 29
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Makna kiasan "buah bibir" adalah...',
                'option_a' => 'Makanan enak',
                'option_b' => 'Bahan pembicaraan',
                'option_c' => 'Hasil karya',
                'option_d' => 'Anak kesayangan',
                'option_e' => 'Oleh-oleh',
                'correct_answer' => 'b',
                'order' => 30
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Gaya bahasa yang membandingkan dua hal secara langsung tanpa kata pembanding disebut...',
                'option_a' => 'Simile',
                'option_b' => 'Metafora',
                'option_c' => 'Personifikasi',
                'option_d' => 'Hiperbola',
                'option_e' => 'Ironi',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Penulisan singkatan gelar yang benar adalah...',
                'option_a' => 'S.H',
                'option_b' => 'S.H.',
                'option_c' => 'SH',
                'option_d' => 'S,H',
                'option_e' => 's.h',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Manakah yang merupakan kalimat perintah?',
                'option_a' => 'Tolong buka pintunya.',
                'option_b' => 'Pintu itu terbuka.',
                'option_c' => 'Siapa yang membuka pintu?',
                'option_d' => 'Pintunya sangat bagus.',
                'option_e' => 'Saya ingin membuka pintu.',
                'correct_answer' => 'a',
                'order' => 33
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Antonim kata "Konveks" adalah...',
                'option_a' => 'Bulat',
                'option_b' => 'Konkaf (Cekung)',
                'option_c' => 'Datar',
                'option_d' => 'Miring',
                'option_e' => 'Lurus',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Sinonim kata "Eskalasi" adalah...',
                'option_a' => 'Penurunan',
                'option_b' => 'Peningkatan',
                'option_c' => 'Perataan',
                'option_d' => 'Perbaikan',
                'option_e' => 'Pergerakan',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Tanda baca yang tepat untuk akhir kalimat tanya adalah...',
                'option_a' => '.',
                'option_b' => '?',
                'option_c' => '!',
                'option_d' => ',',
                'option_e' => ':',
                'correct_answer' => 'b',
                'order' => 36
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Huruf kapital digunakan untuk nama kota, contohnya...',
                'option_a' => 'jakarta',
                'option_b' => 'Jakarta',
                'option_c' => 'JAKARTA',
                'option_d' => 'JaKarTa',
                'option_e' => 'Semua benar',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Kata penghubung "dan" menyatakan hubungan...',
                'option_a' => 'Pertentangan',
                'option_b' => 'Penambahan',
                'option_c' => 'Sebab-akibat',
                'option_d' => 'Tujuan',
                'option_e' => 'Waktu',
                'correct_answer' => 'b',
                'order' => 38
            ],

            // BAHASA INGGRIS (39-50)
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'I ... my homework last night.',
                'option_a' => 'do',
                'option_b' => 'did',
                'option_c' => 'done',
                'option_d' => 'doing',
                'option_e' => 'does',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'She is the ... girl in the class.',
                'option_a' => 'beautiful',
                'option_b' => 'more beautiful',
                'option_c' => 'most beautiful',
                'option_d' => 'as beautiful',
                'option_e' => 'beautifully',
                'correct_answer' => 'c',
                'order' => 40
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'If I ... you, I would take the job.',
                'option_a' => 'am',
                'option_b' => 'was',
                'option_c' => 'were',
                'option_d' => 'be',
                'option_e' => 'been',
                'correct_answer' => 'c',
                'order' => 41
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'The book ... by many students.',
                'option_a' => 'read',
                'option_b' => 'is read',
                'option_c' => 'is reading',
                'option_d' => 'reads',
                'option_e' => 'has read',
                'correct_answer' => 'b',
                'order' => 42
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'He enjoys ... in the pool.',
                'option_a' => 'swim',
                'option_b' => 'swims',
                'option_c' => 'swimming',
                'option_d' => 'swam',
                'option_e' => 'to swim',
                'correct_answer' => 'c',
                'order' => 43
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Synonym of "Fast" is...',
                'option_a' => 'Quick',
                'option_b' => 'Slow',
                'option_c' => 'Heavy',
                'option_d' => 'Strong',
                'option_e' => 'Big',
                'correct_answer' => 'a',
                'order' => 44
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Antonym of "Cheap" is...',
                'option_a' => 'Easy',
                'option_b' => 'Expensive',
                'option_c' => 'Hard',
                'option_d' => 'Old',
                'option_e' => 'New',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'We have been waiting here ... an hour.',
                'option_a' => 'since',
                'option_b' => 'for',
                'option_c' => 'during',
                'option_d' => 'at',
                'option_e' => 'in',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'What is the color of the sky?',
                'option_a' => 'Green',
                'option_b' => 'Blue',
                'option_c' => 'Red',
                'option_d' => 'Yellow',
                'option_e' => 'White',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Which one is a fruit?',
                'option_a' => 'Carrot',
                'option_b' => 'Apple',
                'option_c' => 'Spinach',
                'option_d' => 'Potato',
                'option_e' => 'Cabbage',
                'correct_answer' => 'b',
                'order' => 48
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Where can we buy books?',
                'option_a' => 'Pharmacy',
                'option_b' => 'Bookstore',
                'option_c' => 'Hospital',
                'option_d' => 'Cinema',
                'option_e' => 'Airport',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'A person who treats patients is a...',
                'option_a' => 'Teacher',
                'option_b' => 'Doctor',
                'option_c' => 'Pilot',
                'option_d' => 'Chef',
                'option_e' => 'Driver',
                'correct_answer' => 'b',
                'order' => 50
            ],
        ];

        foreach ($questions as $q) {
            $tryout->questions()->create($q);
        }

        $tryout->update(['question_count' => count($questions)]);
    }
}
