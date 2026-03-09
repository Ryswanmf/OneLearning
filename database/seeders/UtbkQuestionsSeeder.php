<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UtbkTryout;
use App\Models\Question;

class UtbkQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = UtbkTryout::where('name', 'Tryout Akbar UTBK 2024 - Jilid I')->first();
        
        if (!$tryout) {
            $this->command->error('Tryout not found!');
            return;
        }

        $questions = [
            // PENALARAN UMUM (1-10)
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua atlet profesional selalu menjaga pola makan. Beberapa orang yang menjaga pola makan memiliki stamina yang kuat. Kesimpulan yang tepat adalah...',
                'option_a' => 'Beberapa atlet profesional memiliki stamina yang kuat.',
                'option_b' => 'Semua atlet profesional memiliki stamina yang kuat.',
                'option_c' => 'Orang yang memiliki stamina kuat pasti atlet profesional.',
                'option_d' => 'Beberapa orang yang menjaga pola makan adalah atlet profesional.',
                'option_e' => 'Tidak dapat ditarik kesimpulan.',
                'correct_answer' => 'e',
                'order' => 1
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika hari hujan, maka jalanan basah. Saat ini jalanan tidak basah. Maka...',
                'option_a' => 'Hari hujan.',
                'option_b' => 'Hari tidak hujan.',
                'option_c' => 'Hari mungkin hujan.',
                'option_d' => 'Jalanan baru saja dibersihkan.',
                'option_e' => 'Hujan turun di tempat lain.',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika x > y dan y > z, maka manakah pernyataan yang pasti benar?',
                'option_a' => 'x + y > z',
                'option_b' => 'x * z > y',
                'option_c' => 'x > z',
                'option_d' => 'x - y < z',
                'option_e' => 'x/y > z',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua guru adalah orang bijak. Beberapa orang bijak senang membaca. Maka...',
                'option_a' => 'Semua guru senang membaca.',
                'option_b' => 'Beberapa guru senang membaca.',
                'option_c' => 'Ada orang bijak yang bukan guru.',
                'option_d' => 'Beberapa orang yang senang membaca adalah guru.',
                'option_e' => 'Tidak dapat disimpulkan hubungan guru dan senang membaca.',
                'correct_answer' => 'e',
                'order' => 4
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola: 2, 6, 12, 20, 30, ... Angka selanjutnya adalah?',
                'option_a' => '38',
                'option_b' => '40',
                'option_c' => '42',
                'option_d' => '44',
                'option_e' => '46',
                'correct_answer' => 'c',
                'order' => 5
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika p adalah bilangan genap dan q adalah bilangan ganjil, maka p + q + 1 adalah...',
                'option_a' => 'Selalu ganjil',
                'option_b' => 'Selalu genap',
                'option_c' => 'Bisa ganjil bisa genap',
                'option_d' => 'Bilangan prima',
                'option_e' => 'Kelipatan 3',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Sebuah pabrik memproduksi 100 sepatu dalam 5 hari dengan 10 pekerja. Berapa sepatu yang diproduksi dalam 10 hari dengan 5 pekerja?',
                'option_a' => '50',
                'option_b' => '75',
                'option_c' => '100',
                'option_d' => '150',
                'option_e' => '200',
                'correct_answer' => 'c',
                'order' => 7
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pernyataan: "Jika investasi naik, maka ekonomi stabil." Kontrapositif dari pernyataan tersebut adalah...',
                'option_a' => 'Jika investasi tidak naik, maka ekonomi tidak stabil.',
                'option_b' => 'Jika ekonomi stabil, maka investasi naik.',
                'option_c' => 'Jika ekonomi tidak stabil, maka investasi tidak naik.',
                'option_d' => 'Investasi naik dan ekonomi tidak stabil.',
                'option_e' => 'Investasi tidak naik atau ekonomi stabil.',
                'correct_answer' => 'c',
                'order' => 8
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Urutan: A, C, E, G, ... Huruf selanjutnya adalah?',
                'option_a' => 'H',
                'option_b' => 'I',
                'option_c' => 'J',
                'option_d' => 'K',
                'option_e' => 'L',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Andi lebih tua dari Budi. Cici lebih muda dari Budi. Dedi lebih tua dari Cici tapi lebih muda dari Budi. Siapa yang paling muda?',
                'option_a' => 'Andi',
                'option_b' => 'Budi',
                'option_c' => 'Cici',
                'option_d' => 'Dedi',
                'option_e' => 'Andi & Budi',
                'correct_answer' => 'c',
                'order' => 10
            ],

            // PENGETAHUAN & PEMAHAMAN UMUM (11-18)
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Sinonim dari kata "Efisien" dalam konteks kerja adalah...',
                'option_a' => 'Cepat',
                'option_b' => 'Tepat guna',
                'option_c' => 'Hemat biaya',
                'option_d' => 'Keras',
                'option_e' => 'Sederhana',
                'correct_answer' => 'b',
                'order' => 11
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Antonim dari kata "Sporadis" adalah...',
                'option_a' => 'Jarang',
                'option_b' => 'Teratur',
                'option_c' => 'Sering',
                'option_d' => 'Kadang-kadang',
                'option_e' => 'Berhenti',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Indonesia : Jakarta = Filipina : ...',
                'option_a' => 'Bangkok',
                'option_b' => 'Hanoi',
                'option_c' => 'Manila',
                'option_d' => 'Kuala Lumpur',
                'option_e' => 'Phnom Penh',
                'correct_answer' => 'c',
                'order' => 13
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Kata "Inovasi" memiliki arti dasar sebagai...',
                'option_a' => 'Penemuan baru',
                'option_b' => 'Pembaruan',
                'option_c' => 'Perubahan radikal',
                'option_d' => 'Penciptaan teknologi',
                'option_e' => 'Modifikasi gaya',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Melindungi : Menjaga = ... : ...',
                'option_a' => 'Makan : Minum',
                'option_b' => 'Lari : Jalan',
                'option_c' => 'Melihat : Menonton',
                'option_d' => 'Mencuci : Membersihkan',
                'option_e' => 'Terbang : Jatuh',
                'correct_answer' => 'd',
                'order' => 15
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Negara yang tidak termasuk dalam wilayah Asia Tenggara adalah...',
                'option_a' => 'Laos',
                'option_b' => 'Kamboja',
                'option_c' => 'Taiwan',
                'option_d' => 'Timor Leste',
                'option_e' => 'Myanmar',
                'correct_answer' => 'c',
                'order' => 16
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Istilah "Resesi" dalam ekonomi mengacu pada...',
                'option_a' => 'Kenaikan harga barang',
                'option_b' => 'Penurunan nilai mata uang',
                'option_c' => 'Kelesuan aktivitas ekonomi',
                'option_d' => 'Pertumbuhan penduduk cepat',
                'option_e' => 'Peningkatan investasi asing',
                'correct_answer' => 'c',
                'order' => 17
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Komodo merupakan hewan endemik yang berasal dari provinsi...',
                'option_a' => 'NTB',
                'option_b' => 'NTT',
                'option_c' => 'Bali',
                'option_d' => 'Sulawesi Selatan',
                'option_e' => 'Maluku',
                'correct_answer' => 'b',
                'order' => 18
            ],

            // MEMAHAMI BACAAN & MENULIS (19-26)
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Manakah penulisan kata serapan yang benar menurut KBBI?',
                'option_a' => 'Analisa',
                'option_b' => 'Praktek',
                'option_c' => 'Kualitas',
                'option_d' => 'Ijin',
                'option_e' => 'Resiko',
                'correct_answer' => 'c',
                'order' => 19
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Kalimat yang efektif adalah...',
                'option_a' => 'Bagi para siswa-siswa diharapkan berkumpul.',
                'option_b' => 'Siswa diharapkan berkumpul di lapangan.',
                'option_c' => 'Pertemuan itu membicarakan tentang masalah sampah.',
                'option_d' => 'Meskipun lelah, namun ia tetap bekerja.',
                'option_e' => 'Untuk mempersingkat waktu, acara segera dimulai.',
                'correct_answer' => 'b',
                'order' => 20
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Penulisan judul karangan yang tepat adalah...',
                'option_a' => 'Cara Merawat Tanaman Di Musim Hujan',
                'option_b' => 'Cara merawat tanaman di musim hujan',
                'option_c' => 'Cara Merawat Tanaman di Musim Hujan',
                'option_d' => 'Cara Merawat Tanaman Di musim Hujan',
                'option_e' => 'CARA MERAWAT TANAMAN DI MUSIM HUJAN',
                'correct_answer' => 'c',
                'order' => 21
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Imbuhan me- yang bermakna "menuju ke" terdapat pada kata...',
                'option_a' => 'Melaut',
                'option_b' => 'Menyanyi',
                'option_c' => 'Menulis',
                'option_d' => 'Mengecat',
                'option_e' => 'Memukul',
                'correct_answer' => 'a',
                'order' => 22
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Konjungsi yang menyatakan hubungan sebab-akibat adalah...',
                'option_a' => 'Atau',
                'option_b' => 'Tetapi',
                'option_c' => 'Sehingga',
                'option_d' => 'Kemudian',
                'option_e' => 'Sambil',
                'correct_answer' => 'c',
                'order' => 23
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Kalimat pasif yang benar adalah...',
                'option_a' => 'Buku itu saya sudah baca.',
                'option_b' => 'Buku itu sudah saya baca.',
                'option_c' => 'Saya sudah membaca buku itu.',
                'option_d' => 'Buku itu dibaca oleh saya.',
                'option_e' => 'Sudah saya baca buku itu.',
                'correct_answer' => 'b',
                'order' => 24
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Kata yang tidak baku di bawah ini adalah...',
                'option_a' => 'Standardisasi',
                'option_b' => 'Hierarki',
                'option_c' => 'Objektif',
                'option_d' => 'Apotik',
                'option_e' => 'Saksama',
                'correct_answer' => 'd',
                'order' => 25
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Penggunaan tanda koma yang tepat adalah...',
                'option_a' => 'Ibu membeli bayam, kangkung dan sawi.',
                'option_b' => 'Ibu membeli bayam, kangkung, dan sawi.',
                'option_c' => 'Ibu membeli bayam kangkung, dan sawi.',
                'option_d' => 'Ibu membeli bayam kangkung dan sawi.',
                'option_e' => 'Ibu, membeli bayam, kangkung, dan sawi.',
                'correct_answer' => 'b',
                'order' => 26
            ],

            // PENGETAHUAN KUANTITATIF (27-34)
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika 3x + 2 = 14, maka nilai dari 2x - 1 adalah...',
                'option_a' => '5',
                'option_b' => '7',
                'option_c' => '9',
                'option_d' => '11',
                'option_e' => '13',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Berapakah 25% dari 200?',
                'option_a' => '25',
                'option_b' => '40',
                'option_c' => '50',
                'option_d' => '60',
                'option_e' => '75',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Sebuah persegi memiliki luas 64 cm2. Berapakah kelilingnya?',
                'option_a' => '16 cm',
                'option_b' => '24 cm',
                'option_c' => '32 cm',
                'option_d' => '40 cm',
                'option_e' => '48 cm',
                'correct_answer' => 'c',
                'order' => 29
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Rata-rata dari 5 bilangan adalah 20. Jika ditambahkan satu bilangan lagi, rata-ratanya menjadi 22. Berapakah bilangan yang baru ditambahkan?',
                'option_a' => '24',
                'option_b' => '28',
                'option_c' => '30',
                'option_d' => '32',
                'option_e' => '34',
                'correct_answer' => 'd',
                'order' => 30
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika f(x) = 2x - 3, maka f(f(2)) adalah...',
                'option_a' => ' -1',
                'option_b' => '1',
                'option_c' => '2',
                'option_d' => '3',
                'option_e' => ' -3',
                'correct_answer' => 'a',
                'order' => 31
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Berapakah nilai dari (2^3 * 2^2) / 2^4?',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '4',
                'option_d' => '8',
                'option_e' => '16',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Dalam sebuah kotak terdapat 3 bola merah dan 2 bola putih. Jika diambil satu bola secara acak, peluang terambil bola merah adalah...',
                'option_a' => '1/5',
                'option_b' => '2/5',
                'option_c' => '3/5',
                'option_d' => '1/2',
                'option_e' => '3/2',
                'correct_answer' => 'c',
                'order' => 33
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Nilai x yang memenuhi persamaan 5^(x-1) = 25 adalah...',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => '5',
                'correct_answer' => 'c',
                'order' => 34
            ],

            // LITERASI BAHASA INDONESIA (35-42)
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Ide pokok paragraf pertama biasanya terletak di...',
                'option_a' => 'Awal paragraf',
                'option_b' => 'Tengah paragraf',
                'option_c' => 'Akhir paragraf',
                'option_d' => 'Awal dan akhir paragraf',
                'option_e' => 'Seluruh paragraf',
                'correct_answer' => 'a',
                'order' => 35
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Tujuan utama dari teks eksposisi adalah...',
                'option_a' => 'Menceritakan sebuah kejadian',
                'option_b' => 'Meyakinkan pembaca dengan argumen',
                'option_c' => 'Menjelaskan suatu informasi secara detail',
                'option_d' => 'Menggambarkan suatu objek',
                'option_e' => 'Menghibur pembaca',
                'correct_answer' => 'c',
                'order' => 36
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Makna tersirat dari sebuah bacaan adalah...',
                'option_a' => 'Makna yang tertulis secara jelas',
                'option_b' => 'Makna yang harus disimpulkan sendiri oleh pembaca',
                'option_c' => 'Makna yang terdapat di kamus',
                'option_d' => 'Makna yang berlawanan dengan isi teks',
                'option_e' => 'Makna kata per kata',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kalimat opini adalah kalimat yang...',
                'option_a' => 'Berdasarkan data dan fakta',
                'option_b' => 'Berisi pandangan atau perasaan seseorang',
                'option_c' => 'Dapat dibuktikan kebenarannya',
                'option_d' => 'Menggunakan angka statistik',
                'option_e' => 'Netral dan objektif',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kesimpulan sebuah teks haruslah...',
                'option_a' => 'Menyebutkan seluruh isi teks',
                'option_b' => 'Berisi kutipan dari para ahli',
                'option_c' => 'Merangkum poin-poin utama secara ringkas',
                'option_d' => 'Memberikan informasi baru yang tidak ada di teks',
                'option_e' => 'Berisi kritikan pedas',
                'correct_answer' => 'c',
                'order' => 39
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Manakah yang termasuk kata penghubung antarkalimat?',
                'option_a' => 'Dan',
                'option_b' => 'Atau',
                'option_c' => 'Oleh karena itu',
                'option_d' => 'Yang',
                'option_e' => 'Jika',
                'correct_answer' => 'c',
                'order' => 40
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Ciri-ciri teks laporan hasil observasi adalah...',
                'option_a' => 'Menggunakan bahasa kiasan',
                'option_b' => 'Bersifat subjektif',
                'option_c' => 'Ditulis berdasarkan imajinasi',
                'option_d' => 'Berisi fakta-fakta objektif',
                'option_e' => 'Mengutamakan unsur drama',
                'correct_answer' => 'd',
                'order' => 41
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Apa yang dimaksud dengan kata rujukan?',
                'option_a' => 'Kata yang memiliki makna sama',
                'option_b' => 'Kata yang merujuk pada kata atau hal yang sudah disebutkan sebelumnya',
                'option_c' => 'Kata yang sulit dipahami',
                'option_d' => 'Kata yang berasal dari bahasa daerah',
                'option_e' => 'Kata kerja dalam kalimat',
                'correct_answer' => 'b',
                'order' => 42
            ],

            // LITERASI BAHASA INGGRIS (43-50)
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'What is the main idea of a text?',
                'option_a' => 'The smallest detail',
                'option_b' => 'The author name',
                'option_c' => 'The primary message or topic',
                'option_d' => 'The conclusion only',
                'option_e' => 'The difficult words',
                'correct_answer' => 'c',
                'order' => 43
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The word "Enormous" is closest in meaning to...',
                'option_a' => 'Tiny',
                'option_b' => 'Beautiful',
                'option_c' => 'Huge',
                'option_d' => 'Smart',
                'option_e' => 'Fast',
                'correct_answer' => 'c',
                'order' => 44
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Which of the following is an expression of opinion?',
                'option_a' => 'The earth revolves around the sun.',
                'option_b' => 'Water boils at 100 degrees Celsius.',
                'option_c' => 'I think this book is very boring.',
                'option_d' => 'Mount Everest is the highest mountain.',
                'option_e' => 'Indonesia is located in Southeast Asia.',
                'correct_answer' => 'c',
                'order' => 45
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Choose the correct form: She ... to the library every day.',
                'option_a' => 'Go',
                'option_b' => 'Goes',
                'option_c' => 'Going',
                'option_d' => 'Gone',
                'option_e' => 'Went',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'What does "In spite of" express?',
                'option_a' => 'Addition',
                'option_b' => 'Comparison',
                'option_c' => 'Contrast',
                'option_d' => 'Cause and effect',
                'option_e' => 'Time sequence',
                'correct_answer' => 'c',
                'order' => 47
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'If the author wants to "Persuade", what is their goal?',
                'option_a' => 'To tell a funny story',
                'option_b' => 'To explain how to do something',
                'option_c' => 'To convince the reader to agree with them',
                'option_d' => 'To provide neutral information',
                'option_e' => 'To list facts',
                'correct_answer' => 'c',
                'order' => 48
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Find the antonym of "Frequent":',
                'option_a' => 'Common',
                'option_b' => 'Regular',
                'option_c' => 'Rare',
                'option_d' => 'Often',
                'option_e' => 'Many',
                'correct_answer' => 'c',
                'order' => 49
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The pronoun "It" usually refers to...',
                'option_a' => 'A person',
                'option_b' => 'A group of people',
                'option_c' => 'A thing or an animal',
                'option_d' => 'An action',
                'option_e' => 'A place only',
                'correct_answer' => 'c',
                'order' => 50
            ],
        ];

        foreach ($questions as $q) {
            $tryout->questions()->create($q);
        }

        // Update question count in tryout table
        $tryout->update(['question_count' => 50]);
    }
}
