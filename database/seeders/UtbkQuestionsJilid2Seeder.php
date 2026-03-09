<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UtbkTryout;
use App\Models\Question;

class UtbkQuestionsJilid2Seeder extends Seeder
{
    public function run(): void
    {
        $tryout = UtbkTryout::where('name', 'Tryout Akbar UTBK 2024 - Jilid II')->first();
        
        if (!$tryout) {
            $this->command->error('Tryout Jilid II not found!');
            return;
        }

        // Clear existing questions for this tryout to avoid duplicates
        $tryout->questions()->delete();

        $questions = [
            // PENALARAN UMUM (1-10)
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua mamalia bernapas dengan paru-paru. Paus adalah mamalia yang hidup di air. Maka...',
                'option_a' => 'Paus tidak bernapas dengan paru-paru.',
                'option_b' => 'Paus bernapas dengan paru-paru.',
                'option_c' => 'Hanya mamalia di darat yang bernapas dengan paru-paru.',
                'option_d' => 'Semua yang hidup di air bukan mamalia.',
                'option_e' => 'Paus adalah ikan.',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika x + y = 10 dan x - y = 2, maka nilai x * y adalah...',
                'option_a' => '16',
                'option_b' => '20',
                'option_c' => '24',
                'option_d' => '28',
                'option_e' => '32',
                'correct_answer' => 'c',
                'order' => 2
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Deret: 1, 3, 7, 15, 31, ... Angka selanjutnya adalah?',
                'option_a' => '46',
                'option_b' => '53',
                'option_c' => '60',
                'option_d' => '63',
                'option_e' => '70',
                'correct_answer' => 'd',
                'order' => 3
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua murid yang rajin pasti lulus ujian. Sebagian murid kelas 12 tidak lulus ujian. Maka...',
                'option_a' => 'Semua murid kelas 12 rajin.',
                'option_b' => 'Sebagian murid kelas 12 tidak rajin.',
                'option_c' => 'Ada murid rajin yang tidak lulus.',
                'option_d' => 'Murid yang tidak lulus pasti rajin.',
                'option_e' => 'Kelulusan tidak ditentukan oleh kerajinan.',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Lampu A menyala setiap 4 menit, lampu B setiap 6 menit. Jika menyala bersama jam 08.00, kapan menyala bersama lagi?',
                'option_a' => '08.10',
                'option_b' => '08.12',
                'option_c' => '08.14',
                'option_d' => '08.20',
                'option_e' => '08.24',
                'correct_answer' => 'b',
                'order' => 5
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pernyataan: "Semua bunga mawar berwarna merah." Ingkaran dari pernyataan tersebut adalah...',
                'option_a' => 'Semua bunga mawar tidak berwarna merah.',
                'option_b' => 'Beberapa bunga mawar tidak berwarna merah.',
                'option_c' => 'Ada bunga merah yang bukan mawar.',
                'option_d' => 'Bunga mawar pasti berwarna merah.',
                'option_e' => 'Beberapa bunga merah adalah mawar.',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika p > 0 dan q < 0, maka manakah yang pasti bernilai negatif?',
                'option_a' => 'p - q',
                'option_b' => 'p * q',
                'option_c' => 'p / (-q)',
                'option_d' => 'p^2 + q^2',
                'option_e' => 'p + q',
                'correct_answer' => 'b',
                'order' => 7
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola: 100, 95, 85, 70, 50, ... Angka selanjutnya adalah?',
                'option_a' => '35',
                'option_b' => '30',
                'option_c' => '25',
                'option_d' => '20',
                'option_e' => '15',
                'correct_answer' => 'c',
                'order' => 8
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Dalam sebuah kompetisi, jika Andi menang maka Budi kalah. Saat ini Budi menang. Maka...',
                'option_a' => 'Andi menang.',
                'option_b' => 'Andi kalah.',
                'option_c' => 'Andi tidak ikut lomba.',
                'option_d' => 'Budi curang.',
                'option_e' => 'Keduanya menang.',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Urutan: Z, W, T, Q, ... Huruf selanjutnya adalah?',
                'option_a' => 'N',
                'option_b' => 'M',
                'option_c' => 'O',
                'option_d' => 'P',
                'option_e' => 'L',
                'correct_answer' => 'a',
                'order' => 10
            ],

            // PENGETAHUAN & PEMAHAMAN UMUM (11-18)
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Sinonim dari kata "Akselerasi" adalah...',
                'option_a' => 'Perpindahan',
                'option_b' => 'Percepatan',
                'option_c' => 'Perlambatan',
                'option_d' => 'Pemberhentian',
                'option_e' => 'Perubahan',
                'correct_answer' => 'b',
                'order' => 11
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Antonim dari kata "Fiktif" adalah...',
                'option_a' => 'Khayalan',
                'option_b' => 'Nyata',
                'option_c' => 'Palsu',
                'option_d' => 'Karangan',
                'option_e' => 'Mitos',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Bulan : Bumi = Bumi : ...',
                'option_a' => 'Mars',
                'option_b' => 'Bintang',
                'option_c' => 'Matahari',
                'option_d' => 'Langit',
                'option_e' => 'Satelit',
                'correct_answer' => 'c',
                'order' => 13
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Arti kata "Fundamental" dalam konteks kebijakan adalah...',
                'option_a' => 'Mendasar',
                'option_b' => 'Tambahan',
                'option_c' => 'Sementara',
                'option_d' => 'Luas',
                'option_e' => 'Rahasia',
                'correct_answer' => 'a',
                'order' => 14
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Menulis : Buku = Melukis : ...',
                'option_a' => 'Kertas',
                'option_b' => 'Kanvas',
                'option_c' => 'Cat air',
                'option_d' => 'Pemandangan',
                'option_e' => 'Pensil',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Organisasi kesehatan dunia yang berada di bawah naungan PBB adalah...',
                'option_a' => 'UNICEF',
                'option_b' => 'UNESCO',
                'option_c' => 'WHO',
                'option_d' => 'ILO',
                'option_e' => 'IMF',
                'correct_answer' => 'c',
                'order' => 16
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Candi Borobudur dibangun pada masa dinasti...',
                'option_a' => 'Majapahit',
                'option_b' => 'Syailendra',
                'option_c' => 'Sanjaya',
                'option_d' => 'Kediri',
                'option_e' => 'Singasari',
                'correct_answer' => 'b',
                'order' => 17
            ],
            [
                'topic' => 'Pengetahuan & Pemahaman Umum',
                'question_text' => 'Lagu kebangsaan Indonesia Raya pertama kali dikumandangkan pada...',
                'option_a' => '17 Agustus 1945',
                'option_b' => '20 Mei 1908',
                'option_c' => '28 Oktober 1928',
                'option_d' => '1 Juni 1945',
                'option_e' => '10 November 1945',
                'correct_answer' => 'c',
                'order' => 18
            ],

            // MEMAHAMI BACAAN & MENULIS (19-26)
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Penggunaan huruf kapital yang benar terdapat pada kalimat...',
                'option_a' => 'Saya membeli Jeruk Bali di pasar.',
                'option_b' => 'Adik sedang membaca novel Laskar Pelangi.',
                'option_c' => 'Ibu memasak soto Makassar siang ini.',
                'option_d' => 'Kami akan berlibur ke Selat Sunda.',
                'option_e' => 'Paman bekerja di kementerian keuangan.',
                'correct_answer' => 'd',
                'order' => 19
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Kata berimbuhan yang salah dalam kalimat berikut adalah...',
                'option_a' => 'Dia sedang mensukseskan acara itu.',
                'option_b' => 'Pemerintah memprogramkan bantuan desa.',
                'option_c' => 'Siswa sedang mengonsumsi vitamin.',
                'option_d' => 'Ibu memercayai kejujuran anaknya.',
                'option_e' => 'Mereka memengaruhi keputusan rapat.',
                'correct_answer' => 'a',
                'order' => 20
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Kalimat yang mengandung subjek, predikat, objek, dan keterangan adalah...',
                'option_a' => 'Budi makan di kantin.',
                'option_b' => 'Adik menangis tersedu-sedu.',
                'option_c' => 'Ibu membeli sayuran di pasar pagi.',
                'option_d' => 'Ayah membaca koran.',
                'option_e' => 'Mereka berlari kencang sekali.',
                'correct_answer' => 'c',
                'order' => 21
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Manakah yang merupakan kelompok kata baku?',
                'option_a' => 'Nasehat, Apotik, Ijin',
                'option_b' => 'Saksama, Objektif, Hierarki',
                'option_c' => 'Analisa, Kualitas, Tekhnik',
                'option_d' => 'Standarisasi, Resiko, Kwitansi',
                'option_e' => 'Aktifitas, Jadwal, Praktik',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Penggunaan tanda titik dua (:) yang tepat adalah...',
                'option_a' => 'Bahan yang diperlukan: tepung, gula, dan telur.',
                'option_b' => 'Ibu membeli: sabun, odol, dan sikat gigi.',
                'option_c' => 'Ayah berkata: "Ayo kita berangkat!"',
                'option_d' => 'Nama: Ahmad, Alamat: Jakarta.',
                'option_e' => 'Kita memerlukan kursi, meja, dan: lemari.',
                'correct_answer' => 'a',
                'order' => 23
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Kata serapan yang tepat terdapat pada kalimat...',
                'option_a' => 'Ayah sedang mengecek kwalitas mesin.',
                'option_b' => 'Kita harus menjaga sistim keamanan.',
                'option_c' => 'Rapat itu membahas masalah manajemen.',
                'option_d' => 'Prosentase kenaikan harga sangat tinggi.',
                'option_e' => 'Aktivitas gunung berapi terpantau aktif.',
                'correct_answer' => 'e',
                'order' => 24
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Konjungsi antarkalimat yang menyatakan pertentangan adalah...',
                'option_a' => 'Oleh karena itu',
                'option_b' => 'Namun',
                'option_c' => 'Selain itu',
                'option_d' => 'Kemudian',
                'option_e' => 'Lalu',
                'correct_answer' => 'b',
                'order' => 25
            ],
            [
                'topic' => 'Memahami Bacaan & Menulis',
                'question_text' => 'Kalimat yang mengandung majas personifikasi adalah...',
                'option_a' => 'Raja siang menyapa bumi di pagi hari.',
                'option_b' => 'Wajahnya seputih kapas.',
                'option_c' => 'Nyiur melambai di tepi pantai.',
                'option_d' => 'Suaranya menggelegar membelah angkasa.',
                'option_e' => 'Sampah menumpuk seperti gunung.',
                'correct_answer' => 'c',
                'order' => 26
            ],

            // PENGETAHUAN KUANTITATIF (27-34)
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Berapakah nilai dari 120% dari 50?',
                'option_a' => '50',
                'option_b' => '55',
                'option_c' => '60',
                'option_d' => '65',
                'option_e' => '70',
                'correct_answer' => 'c',
                'order' => 27
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika a = 5 dan b = -2, maka nilai dari a^2 - 2ab + b^2 adalah...',
                'option_a' => '9',
                'option_b' => '21',
                'option_c' => '49',
                'option_d' => '53',
                'option_e' => '81',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Luas sebuah lingkaran adalah 154 cm2. Berapakah jari-jarinya? (pi = 22/7)',
                'option_a' => '5 cm',
                'option_b' => '7 cm',
                'option_c' => '10 cm',
                'option_d' => '14 cm',
                'option_e' => '21 cm',
                'correct_answer' => 'b',
                'order' => 29
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Berapakah hasil dari 2^5 - 2^3?',
                'option_a' => '24',
                'option_b' => '26',
                'option_c' => '28',
                'option_d' => '30',
                'option_e' => '32',
                'correct_answer' => 'a',
                'order' => 30
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Sebuah mobil menempuh jarak 120 km dalam waktu 2 jam. Berapa kecepatannya dalam m/s?',
                'option_a' => '10.5 m/s',
                'option_b' => '16.67 m/s',
                'option_c' => '20.33 m/s',
                'option_d' => '25.0 m/s',
                'option_e' => '30.0 m/s',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika log 2 = a dan log 3 = b, maka log 6 adalah...',
                'option_a' => 'a * b',
                'option_b' => 'a + b',
                'option_c' => 'a / b',
                'option_d' => 'b - a',
                'option_e' => '2a + b',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Peluang munculnya angka genap pada pelemparan sebuah dadu adalah...',
                'option_a' => '1/6',
                'option_b' => '1/3',
                'option_c' => '1/2',
                'option_d' => '2/3',
                'option_e' => '5/6',
                'correct_answer' => 'c',
                'order' => 33
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Berapakah nilai x yang memenuhi 2x/3 + 4 = 10?',
                'option_a' => '6',
                'option_b' => '9',
                'option_c' => '12',
                'option_d' => '15',
                'option_e' => '18',
                'correct_answer' => 'b',
                'order' => 34
            ],

            // LITERASI BAHASA INDONESIA (35-42)
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Gagasan utama sebuah paragraf sering disebut juga dengan...',
                'option_a' => 'Kalimat penjelas',
                'option_b' => 'Pokok pikiran',
                'option_c' => 'Tema bacaan',
                'option_d' => 'Kesimpulan sementara',
                'option_e' => 'Judul teks',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Manakah yang merupakan ciri teks narasi?',
                'option_a' => 'Menjelaskan fakta ilmiah',
                'option_b' => 'Berisi urutan peristiwa/kejadian',
                'option_c' => 'Mengajak pembaca melakukan sesuatu',
                'option_d' => 'Memberikan petunjuk penggunaan alat',
                'option_e' => 'Menggambarkan objek secara mendalam',
                'correct_answer' => 'b',
                'order' => 36
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Apa perbedaan utama antara fakta dan opini?',
                'option_a' => 'Fakta sulit dipercaya, opini mudah dipercaya.',
                'option_b' => 'Fakta bersifat objektif, opini bersifat subjektif.',
                'option_c' => 'Fakta berasal dari khayalan, opini dari kenyataan.',
                'option_d' => 'Fakta menggunakan kata "mungkin", opini menggunakan angka.',
                'option_e' => 'Fakta selalu pendek, opini selalu panjang.',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Tujuan dari teks persuasi adalah untuk...',
                'option_a' => 'Menghibur pembaca',
                'option_b' => 'Memberikan informasi tambahan',
                'option_c' => 'Memengaruhi atau mengajak pembaca',
                'option_d' => 'Menyampaikan berita terbaru',
                'option_e' => 'Mengkritik suatu karya',
                'correct_answer' => 'c',
                'order' => 38
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Dalam membaca cepat, teknik "Skimming" digunakan untuk...',
                'option_a' => 'Mencari informasi spesifik seperti angka',
                'option_b' => 'Mendapatkan gambaran umum isi teks',
                'option_c' => 'Menghafal seluruh kata dalam teks',
                'option_d' => 'Mengkritik gaya penulisan penulis',
                'option_e' => 'Memperbaiki kesalahan ketik',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Apa yang dimaksud dengan teks biografi?',
                'option_a' => 'Teks yang menceritakan imajinasi penulis',
                'option_b' => 'Teks yang menceritakan riwayat hidup seseorang',
                'option_c' => 'Teks yang berisi kumpulan doa',
                'option_d' => 'Teks yang menjelaskan cara memasak',
                'option_e' => 'Teks yang berisi jadwal perjalanan',
                'correct_answer' => 'b',
                'order' => 40
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kalimat tanya retoris adalah kalimat tanya yang...',
                'option_a' => 'Membutuhkan jawaban segera',
                'option_b' => 'Tidak membutuhkan jawaban',
                'option_c' => 'Hanya dijawab oleh ya atau tidak',
                'option_d' => 'Berisi teka-teki sulit',
                'option_e' => 'Diajukan kepada banyak orang',
                'correct_answer' => 'b',
                'order' => 41
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Unsur intrinsik dalam sebuah cerpen meliputi...',
                'option_a' => 'Latar belakang penulis',
                'option_b' => 'Tema, alur, dan penokohan',
                'option_c' => 'Kondisi sosial masyarakat',
                'option_d' => 'Tahun penerbitan buku',
                'option_e' => 'Harga buku di toko',
                'correct_answer' => 'b',
                'order' => 42
            ],

            // LITERASI BAHASA INGGRIS (43-50)
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'What is the purpose of a "Descriptive" text?',
                'option_a' => 'To tell a story about the past',
                'option_b' => 'To describe a specific person, place, or thing',
                'option_c' => 'To argue about a controversial issue',
                'option_d' => 'To give instructions to make something',
                'option_e' => 'To report daily news',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The word "Fragile" is most similar in meaning to...',
                'option_a' => 'Strong',
                'option_b' => 'Breakable',
                'option_c' => 'Expensive',
                'option_d' => 'Heavy',
                'option_e' => 'Old',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Choose the correct preposition: He is interested ... learning Japanese.',
                'option_a' => 'On',
                'option_b' => 'In',
                'option_c' => 'At',
                'option_d' => 'For',
                'option_e' => 'With',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Identify the tense: "They have been playing football for two hours."',
                'option_a' => 'Simple Present',
                'option_b' => 'Present Continuous',
                'option_c' => 'Present Perfect Continuous',
                'option_d' => 'Past Perfect',
                'option_e' => 'Future Tense',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'What does a "Conclusion" in an essay do?',
                'option_a' => 'Introduce new ideas',
                'option_b' => 'Restate the main points and provide a final thought',
                'option_c' => 'List the bibliography',
                'option_d' => 'Give the author biography',
                'option_e' => 'Ask questions to the reader',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The antonym of "Generous" is...',
                'option_a' => 'Kind',
                'option_b' => 'Selfish',
                'option_c' => 'Happy',
                'option_d' => 'Poor',
                'option_e' => 'Rich',
                'correct_answer' => 'b',
                'order' => 48
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Which word is a synonym for "Attempt"?',
                'option_a' => 'Succeed',
                'option_b' => 'Try',
                'option_c' => 'Fail',
                'option_d' => 'Stop',
                'option_e' => 'Start',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Complete the sentence: If I ... enough money, I would buy a new car.',
                'option_a' => 'Have',
                'option_b' => 'Had',
                'option_c' => 'Has',
                'option_d' => 'Having',
                'option_e' => 'Will have',
                'correct_answer' => 'b',
                'order' => 50
            ],
        ];

        foreach ($questions as $q) {
            $tryout->questions()->create($q);
        }

        $tryout->update(['question_count' => 50]);
    }
}
