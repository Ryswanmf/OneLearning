<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmaUtbkTryout;
use App\Models\Question;

class Sma12TpsQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmaUtbkTryout::where('name', 'Simulasi TPS Kilat SMA 12')->first();
        
        if (!$tryout) {
            $tryout = SmaUtbkTryout::create([
                'name' => 'Simulasi TPS Kilat SMA 12',
                'subject' => 'TPS',
                'question_count' => 50,
                'duration_minutes' => 90,
                'price' => 0,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // PENALARAN UMUM (1-12)
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua mahasiswa universitas X rajin. Sebagian orang yang rajin lulus tepat waktu. Kesimpulan yang tepat adalah...',
                'option_a' => 'Semua mahasiswa universitas X lulus tepat waktu.',
                'option_b' => 'Sebagian mahasiswa universitas X lulus tepat waktu.',
                'option_c' => 'Mahasiswa universitas X yang tidak rajin tidak lulus tepat waktu.',
                'option_d' => 'Orang yang lulus tepat waktu pasti mahasiswa universitas X.',
                'option_e' => 'Tidak dapat ditarik kesimpulan.',
                'correct_answer' => 'e',
                'order' => 1
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika x > 5 dan y < 3, maka manakah pernyataan yang pasti benar?',
                'option_a' => 'x + y > 8',
                'option_b' => 'x - y > 2',
                'option_c' => 'xy > 15',
                'option_d' => 'x/y > 1',
                'option_e' => 'x^2 > y^2',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola bilangan: 1, 3, 7, 15, 31, ... Angka selanjutnya adalah...',
                'option_a' => '45',
                'option_b' => '50',
                'option_c' => '63',
                'option_d' => '64',
                'option_e' => '72',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pernyataan: "Jika hujan turun, maka udara menjadi sejuk." Pernyataan yang setara dengan pernyataan tersebut adalah...',
                'option_a' => 'Jika udara sejuk, maka hujan turun.',
                'option_b' => 'Jika hujan tidak turun, maka udara tidak sejuk.',
                'option_c' => 'Jika udara tidak sejuk, maka hujan tidak turun.',
                'option_d' => 'Hujan turun dan udara tidak sejuk.',
                'option_e' => 'Udara sejuk meskipun hujan tidak turun.',
                'correct_answer' => 'c',
                'order' => 4
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Andi lebih tinggi dari Budi. Cici lebih pendek dari Budi. Dedi lebih tinggi dari Cici tetapi lebih pendek dari Budi. Urutan dari yang tertinggi adalah...',
                'option_a' => 'Andi, Budi, Dedi, Cici',
                'option_b' => 'Andi, Dedi, Budi, Cici',
                'option_c' => 'Budi, Andi, Dedi, Cici',
                'option_d' => 'Andi, Budi, Cici, Dedi',
                'option_e' => 'Dedi, Andi, Budi, Cici',
                'correct_answer' => 'a',
                'order' => 5
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola: A, C, F, J, ... Huruf selanjutnya adalah...',
                'option_a' => 'L',
                'option_b' => 'M',
                'option_c' => 'N',
                'option_d' => 'O',
                'option_e' => 'P',
                'correct_answer' => 'd',
                'order' => 6
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika p adalah bilangan genap dan q adalah bilangan ganjil, maka (p + q) x p adalah...',
                'option_a' => 'Selalu ganjil',
                'option_b' => 'Selalu genap',
                'option_c' => 'Bisa ganjil bisa genap',
                'option_d' => 'Bilangan prima',
                'option_e' => 'Kelipatan 5',
                'correct_answer' => 'b',
                'order' => 7
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Harga 3 buku dan 2 pensil adalah Rp 15.000. Jika harga 1 buku Rp 3.000, berapa harga 5 pensil?',
                'option_a' => 'Rp 10.000',
                'option_b' => 'Rp 15.000',
                'option_c' => 'Rp 20.000',
                'option_d' => 'Rp 25.000',
                'option_e' => 'Rp 12.000',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua guru adalah pendidik. Beberapa pendidik adalah seniman. Kesimpulan yang pasti benar adalah...',
                'option_a' => 'Semua guru adalah seniman.',
                'option_b' => 'Beberapa guru adalah seniman.',
                'option_c' => 'Beberapa seniman adalah pendidik.',
                'option_d' => 'Semua seniman adalah pendidik.',
                'option_e' => 'Guru bukan seniman.',
                'correct_answer' => 'c',
                'order' => 9
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola bilangan: 2, 6, 12, 20, 30, ... Angka selanjutnya adalah...',
                'option_a' => '38',
                'option_b' => '40',
                'option_c' => '42',
                'option_d' => '44',
                'option_e' => '46',
                'correct_answer' => 'c',
                'order' => 10
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika "KUCING" dikodekan sebagai "LVDJOH", maka "ANJING" dikodekan sebagai...',
                'option_a' => 'BOKJOH',
                'option_b' => 'BMKJOH',
                'option_c' => 'BOKKPH',
                'option_d' => 'BOJKOH',
                'option_e' => 'BMLKPH',
                'correct_answer' => 'a',
                'order' => 11
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Sebuah keluarga memiliki 5 anak. Rata-rata usia mereka 10 tahun. Jika anak tertua berusia 15 tahun dan anak termuda 5 tahun, rata-rata usia 3 anak lainnya adalah...',
                'option_a' => '8 tahun',
                'option_b' => '9 tahun',
                'option_c' => '10 tahun',
                'option_d' => '11 tahun',
                'option_e' => '12 tahun',
                'correct_answer' => 'c',
                'order' => 12
            ],

            // PENGETAHUAN & PEMAHAMAN UMUM (13-25)
            [
                'topic' => 'PPU',
                'question_text' => 'Sinonim dari kata "Iterasi" adalah...',
                'option_a' => 'Perubahan',
                'option_b' => 'Perulangan',
                'option_c' => 'Pengurangan',
                'option_d' => 'Perbaikan',
                'option_e' => 'Penyusunan',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Antonim dari kata "Epilog" adalah...',
                'option_a' => 'Prolog',
                'option_b' => 'Dialog',
                'option_c' => 'Monolog',
                'option_d' => 'Katalog',
                'option_e' => 'Analogi',
                'correct_answer' => 'a',
                'order' => 14
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Indonesia : Jakarta = Belanda : ...',
                'option_a' => 'Den Haag',
                'option_b' => 'Rotterdam',
                'option_c' => 'Amsterdam',
                'option_d' => 'Utrecht',
                'option_e' => 'Eindhoven',
                'correct_answer' => 'c',
                'order' => 15
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Kata "Filantropi" berhubungan dengan...',
                'option_a' => 'Kedermawanan',
                'option_b' => 'Kebencian',
                'option_c' => 'Kecerdasan',
                'option_d' => 'Kekayaan',
                'option_e' => 'Kemiskinan',
                'correct_answer' => 'a',
                'order' => 16
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Mata : Melihat = Telinga : ...',
                'option_a' => 'Mendengar',
                'option_b' => 'Meraba',
                'option_c' => 'Mencium',
                'option_d' => 'Bicara',
                'option_e' => 'Berpikir',
                'correct_answer' => 'a',
                'order' => 17
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Manakah penulisan kata serapan yang benar?',
                'option_a' => 'Standardisasi',
                'option_b' => 'Standarisasi',
                'option_c' => 'Standardisir',
                'option_d' => 'Standardisai',
                'option_e' => 'Standarsasi',
                'correct_answer' => 'a',
                'order' => 18
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Negara yang bukan anggota ASEAN adalah...',
                'option_a' => 'Laos',
                'option_b' => 'Kamboja',
                'option_c' => 'Timor Leste',
                'option_d' => 'Vietnam',
                'option_e' => 'Myanmar',
                'correct_answer' => 'c',
                'order' => 19
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Istilah "Stagflasi" dalam ekonomi merujuk pada...',
                'option_a' => 'Inflasi tinggi dan pertumbuhan ekonomi rendah',
                'option_b' => 'Inflasi rendah dan pertumbuhan ekonomi tinggi',
                'option_c' => 'Kenaikan harga barang pokok secara merata',
                'option_d' => 'Penurunan nilai mata uang asing',
                'option_e' => 'Kebijakan subsidi pemerintah',
                'correct_answer' => 'a',
                'order' => 20
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Siapakah penemu mesin uap?',
                'option_a' => 'James Watt',
                'option_b' => 'Thomas Edison',
                'option_c' => 'Isaac Newton',
                'option_d' => 'Albert Einstein',
                'option_e' => 'Alexander Graham Bell',
                'correct_answer' => 'a',
                'order' => 21
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Kata "Ambivalen" berarti...',
                'option_a' => 'Bercabang dua',
                'option_b' => 'Mempunyai dua perasaan yang bertentangan',
                'option_c' => 'Tidak peduli',
                'option_d' => 'Sangat yakin',
                'option_e' => 'Berubah-ubah',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Benua terkecil di dunia adalah...',
                'option_a' => 'Eropa',
                'option_b' => 'Australia',
                'option_c' => 'Antartika',
                'option_d' => 'Afrika',
                'option_e' => 'Amerika Selatan',
                'correct_answer' => 'b',
                'order' => 23
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Sinonim dari "Defisit" adalah...',
                'option_a' => 'Kekurangan',
                'option_b' => 'Kelebihan',
                'option_c' => 'Keseimbangan',
                'option_d' => 'Pertumbuhan',
                'option_e' => 'Keuntungan',
                'correct_answer' => 'a',
                'order' => 24
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Antonim dari "Sekuler" adalah...',
                'option_a' => 'Duniawi',
                'option_b' => 'Agamis',
                'option_c' => 'Modern',
                'option_d' => 'Tradisional',
                'option_e' => 'Bebas',
                'correct_answer' => 'b',
                'order' => 25
            ],

            // MEMAHAMI BACAAN & MENULIS (26-38)
            [
                'topic' => 'PBM',
                'question_text' => 'Kalimat yang efektif adalah...',
                'option_a' => 'Kepada para siswa diharapkan tenang.',
                'option_b' => 'Siswa diharapkan tenang.',
                'option_c' => 'Bagi para siswa-siswa harus tenang.',
                'option_d' => 'Untuk mempersingkat waktu, acara dimulai.',
                'option_e' => 'Pertemuan itu membicarakan tentang sampah.',
                'correct_answer' => 'b',
                'order' => 26
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Penulisan judul karangan yang tepat adalah...',
                'option_a' => 'Cara Merawat Tanaman Di Musim Hujan',
                'option_b' => 'Cara merawat tanaman di musim hujan',
                'option_c' => 'Cara Merawat Tanaman di Musim Hujan',
                'option_d' => 'Cara Merawat Tanaman Di musim Hujan',
                'option_e' => 'CARA MERAWAT TANAMAN DI MUSIM HUJAN',
                'correct_answer' => 'c',
                'order' => 27
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Kata yang tidak baku di bawah ini adalah...',
                'option_a' => 'Objektif',
                'option_b' => 'Subjektif',
                'option_c' => 'Apotik',
                'option_d' => 'Atlet',
                'option_e' => 'Saksama',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Penggunaan tanda koma yang benar adalah...',
                'option_a' => 'Ibu membeli sayur, ikan, dan buah.',
                'option_b' => 'Ibu membeli sayur, ikan dan buah.',
                'option_c' => 'Ibu membeli sayur ikan dan buah.',
                'option_d' => 'Ibu membeli sayur, ikan, dan, buah.',
                'option_e' => 'Ibu, membeli sayur, ikan, dan buah.',
                'correct_answer' => 'a',
                'order' => 29
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Konjungsi yang menyatakan hubungan tujuan adalah...',
                'option_a' => 'Sehingga',
                'option_b' => 'Karena',
                'option_c' => 'Supaya',
                'option_d' => 'Kemudian',
                'option_e' => 'Meskipun',
                'correct_answer' => 'c',
                'order' => 30
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Imbuhan me- yang bermakna "melakukan tindakan" terdapat pada...',
                'option_a' => 'Melaut',
                'option_b' => 'Menepi',
                'option_c' => 'Memukul',
                'option_d' => 'Menguning',
                'option_e' => 'Mendarat',
                'correct_answer' => 'c',
                'order' => 31
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Kalimat pasif yang benar adalah...',
                'option_a' => 'Buku itu saya sudah baca.',
                'option_b' => 'Buku itu sudah saya baca.',
                'option_c' => 'Saya sudah membaca buku itu.',
                'option_d' => 'Buku itu dibaca oleh saya.',
                'option_e' => 'Sudah saya baca buku itu.',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Kata serapan dari bahasa Inggris yang benar adalah...',
                'option_a' => 'Kwalitas',
                'option_b' => 'Kualitas',
                'option_c' => 'Quality',
                'option_d' => 'Kuwalitas',
                'option_e' => 'Qualitas',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Penggunaan huruf kapital yang benar adalah...',
                'option_a' => 'Saya pergi ke Danau Toba.',
                'option_b' => 'Saya pergi ke danau Toba.',
                'option_c' => 'Saya pergi ke Danau toba.',
                'option_d' => 'Saya pergi ke danau toba.',
                'option_e' => 'Saya Pergi Ke Danau Toba.',
                'correct_answer' => 'a',
                'order' => 34
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Manakah yang termasuk kalimat perintah?',
                'option_a' => 'Silakan duduk!',
                'option_b' => 'Apakah kamu sudah makan?',
                'option_c' => 'Dia sedang tidur.',
                'option_d' => 'Wah, indahnya bunga ini!',
                'option_e' => 'Saya ingin pergi.',
                'correct_answer' => 'a',
                'order' => 35
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Antonim dari "Promos" adalah...',
                'option_a' => 'Mutasi',
                'option_b' => 'Demosi',
                'option_c' => 'Rotasi',
                'option_d' => 'Eskalasi',
                'option_e' => 'Gradasi',
                'correct_answer' => 'b',
                'order' => 36
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Penulisan kata depan yang benar adalah...',
                'option_a' => 'Di sekolah',
                'option_b' => 'Disana',
                'option_c' => 'Kemana',
                'option_d' => 'Diambil',
                'option_e' => 'Di tulis',
                'correct_answer' => 'a',
                'order' => 37
            ],
            [
                'topic' => 'PBM',
                'question_text' => 'Ide pokok paragraf induktif terletak di...',
                'option_a' => 'Awal',
                'option_b' => 'Tengah',
                'option_c' => 'Akhir',
                'option_d' => 'Awal dan akhir',
                'option_e' => 'Seluruh paragraf',
                'correct_answer' => 'c',
                'order' => 38
            ],

            // PENGETAHUAN KUANTITATIF (39-50)
            [
                'topic' => 'PK',
                'question_text' => 'Jika x = 2 dan y = 3, maka nilai dari x^2 + 2xy + y^2 adalah...',
                'option_a' => '13',
                'option_b' => '25',
                'option_c' => '36',
                'option_d' => '49',
                'option_e' => '16',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Berapakah 20% dari 150?',
                'option_a' => '20',
                'option_b' => '25',
                'option_c' => '30',
                'option_d' => '35',
                'option_e' => '40',
                'correct_answer' => 'c',
                'order' => 40
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Sebuah segitiga memiliki alas 10 cm dan tinggi 12 cm. Luasnya adalah...',
                'option_a' => '60 cm²',
                'option_b' => '120 cm²',
                'option_c' => '50 cm²',
                'option_d' => '100 cm²',
                'option_e' => '30 cm²',
                'correct_answer' => 'a',
                'order' => 41
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Rata-rata dari 4 bilangan adalah 20. Jika ditambahkan bilangan x, rata-ratanya menjadi 22. Nilai x adalah...',
                'option_a' => '24',
                'option_b' => '26',
                'option_c' => '28',
                'option_d' => '30',
                'option_e' => '32',
                'correct_answer' => 'd',
                'order' => 42
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Jika f(x) = 2x + 5, maka f(f(1)) adalah...',
                'option_a' => '7',
                'option_b' => '9',
                'option_c' => '14',
                'option_d' => '19',
                'option_e' => '21',
                'correct_answer' => 'd',
                'order' => 43
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Berapakah nilai dari (3^3 * 3^2) / 3^4?',
                'option_a' => '1',
                'option_b' => '3',
                'option_c' => '9',
                'option_d' => '27',
                'option_e' => '81',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Dalam sebuah kotak terdapat 4 bola merah dan 6 bola biru. Peluang terambilnya bola merah secara acak adalah...',
                'option_a' => '2/5',
                'option_b' => '3/5',
                'option_c' => '1/2',
                'option_d' => '4/10',
                'option_e' => '6/10',
                'correct_answer' => 'a',
                'order' => 45
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Jika 3x + 2 = 11, maka nilai x adalah...',
                'option_a' => '2',
                'option_b' => '3',
                'option_c' => '4',
                'option_d' => '5',
                'option_e' => '6',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Sebuah persegi memiliki keliling 24 cm. Berapakah luasnya?',
                'option_a' => '24 cm²',
                'option_b' => '36 cm²',
                'option_c' => '48 cm²',
                'option_d' => '64 cm²',
                'option_e' => '16 cm²',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Jika x/y = 2/3, maka (3x + 2y) / (3x - 2y) adalah...',
                'option_a' => 'Tak terdefinisi',
                'option_b' => '0',
                'option_c' => '1',
                'option_d' => ' -1',
                'option_e' => '2',
                'correct_answer' => 'a',
                'order' => 48
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Berapakah jumlah sudut dalam sebuah segi lima beraturan?',
                'option_a' => '360 derajat',
                'option_b' => '540 derajat',
                'option_c' => '720 derajat',
                'option_d' => '180 derajat',
                'option_e' => '900 derajat',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'PK',
                'question_text' => 'Jika log 2 = 0,301 dan log 3 = 0,477, maka log 6 adalah...',
                'option_a' => '0,176',
                'option_b' => '0,778',
                'option_c' => '0,143',
                'option_d' => '1,431',
                'option_e' => '0,602',
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
