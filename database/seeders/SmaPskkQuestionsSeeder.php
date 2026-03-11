<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmaTryout;
use App\Models\Question;

class SmaPskkQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmaTryout::where('name', 'Paket Sukses Kenaikan Kelas SMA')->first();
        
        if (!$tryout) {
            $tryout = SmaTryout::create([
                'name' => 'Paket Sukses Kenaikan Kelas SMA',
                'subject' => 'Semua Mapel',
                'question_count' => 50,
                'duration_minutes' => 120,
                'price' => 35000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // MATEMATIKA (1-10)
            [
                'topic' => 'Matematika - Eksponen',
                'question_text' => 'Nilai dari (2^4 * 3^2 * 5^3) / (8 * 27 * 125) adalah...',
                'option_a' => '1/6',
                'option_b' => '2/3',
                'option_c' => '1',
                'option_d' => '2',
                'option_e' => '6',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Matematika - Logaritma',
                'question_text' => 'Jika ^2log 3 = a, maka ^8log 27 adalah...',
                'option_a' => 'a',
                'option_b' => '2a',
                'option_c' => '3a',
                'option_d' => '1/3 a',
                'option_e' => '2/3 a',
                'correct_answer' => 'a',
                'order' => 2
            ],
            [
                'topic' => 'Matematika - Matriks',
                'question_text' => 'Determinan dari matriks A = [2 3; 1 4] adalah...',
                'option_a' => '5',
                'option_b' => '11',
                'option_c' => '2',
                'option_d' => ' -5',
                'option_e' => '8',
                'correct_answer' => 'a',
                'order' => 3
            ],
            [
                'topic' => 'Matematika - Turunan',
                'question_text' => 'Turunan pertama dari f(x) = 3x^2 - 5x + 2 adalah...',
                'option_a' => '6x - 5',
                'option_b' => '3x - 5',
                'option_c' => '6x + 2',
                'option_d' => 'x^2 - 5',
                'option_e' => '6x^2 - 5',
                'correct_answer' => 'a',
                'order' => 4
            ],
            [
                'topic' => 'Matematika - Integral',
                'question_text' => 'Hasil dari ∫ (2x + 3) dx adalah...',
                'option_a' => 'x^2 + 3x + C',
                'option_b' => '2x^2 + 3x + C',
                'option_c' => 'x^2 + C',
                'option_d' => '2x + C',
                'option_e' => 'x^2 + 3 + C',
                'correct_answer' => 'a',
                'order' => 5
            ],
            [
                'topic' => 'Matematika - Peluang',
                'question_text' => 'Banyaknya susunan huruf yang dapat dibentuk dari kata "KATAK" adalah...',
                'option_a' => '30',
                'option_b' => '60',
                'option_c' => '120',
                'option_d' => '20',
                'option_e' => '10',
                'correct_answer' => 'a',
                'order' => 6
            ],
            [
                'topic' => 'Matematika - Trigonometri',
                'question_text' => 'Nilai dari cos 120° adalah...',
                'option_a' => '1/2',
                'option_b' => '1/2 √3',
                'option_c' => ' -1/2',
                'option_d' => ' -1/2 √3',
                'option_e' => '0',
                'correct_answer' => 'c',
                'order' => 7
            ],
            [
                'topic' => 'Matematika - Barisan & Deret',
                'question_text' => 'Suku ke-n barisan aritmetika adalah Un = 4n - 1. Beda barisan tersebut adalah...',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => '5',
                'correct_answer' => 'd',
                'order' => 8
            ],
            [
                'topic' => 'Matematika - Limit',
                'question_text' => 'Limit x mendekati 2 dari (x^2 - 4) / (x - 2) adalah...',
                'option_a' => '0',
                'option_b' => '2',
                'option_c' => '4',
                'option_d' => 'tak hingga',
                'option_e' => '1',
                'correct_answer' => 'c',
                'order' => 9
            ],
            [
                'topic' => 'Matematika - Vektor',
                'question_text' => 'Jika vektor a = 2i + 3j dan b = i - j, maka a . b (dot product) adalah...',
                'option_a' => ' -1',
                'option_b' => '1',
                'option_c' => '5',
                'option_d' => '2',
                'option_e' => ' -5',
                'correct_answer' => 'a',
                'order' => 10
            ],

            // FISIKA (11-18)
            [
                'topic' => 'Fisika - Kinematika',
                'question_text' => 'Sebuah benda dilempar vertikal ke atas. Pada titik tertinggi, kecepatannya adalah...',
                'option_a' => 'Maksimum',
                'option_b' => 'Nol',
                'option_c' => 'Sama dengan kecepatan awal',
                'option_d' => 'Tetap',
                'option_e' => 'Berubah-ubah',
                'correct_answer' => 'b',
                'order' => 11
            ],
            [
                'topic' => 'Fisika - Hukum Newton',
                'question_text' => 'Gaya tarik-menarik antara dua muatan listrik dijelaskan oleh Hukum...',
                'option_a' => 'Newton',
                'option_b' => 'Pascal',
                'option_c' => 'Coulomb',
                'option_d' => 'Ohm',
                'option_e' => 'Faraday',
                'correct_answer' => 'c',
                'order' => 12
            ],
            [
                'topic' => 'Fisika - Termodinamika',
                'question_text' => 'Proses termodinamika pada suhu konstan disebut proses...',
                'option_a' => 'Isokhorik',
                'option_b' => 'Isobarik',
                'option_c' => 'Isotermik',
                'option_d' => 'Adiabatik',
                'option_e' => 'Eksoterm',
                'correct_answer' => 'c',
                'order' => 13
            ],
            [
                'topic' => 'Fisika - Optik',
                'question_text' => 'Cermin yang bersifat menyebarkan sinar (divergen) adalah...',
                'option_a' => 'Cermin Cekung',
                'option_b' => 'Cermin Cembung',
                'option_c' => 'Cermin Datar',
                'option_d' => 'Lensa Cembung',
                'option_e' => 'Prisma',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'Fisika - Listrik Dinamis',
                'question_text' => 'Satuan hambatan jenis kawat adalah...',
                'option_a' => 'Ohm',
                'option_b' => 'Ohm meter',
                'option_c' => 'Volt',
                'option_d' => 'Ampere',
                'option_e' => 'Watt',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'Fisika - Bunyi',
                'question_text' => 'Efek perubahan frekuensi bunyi akibat gerak relatif sumber atau pendengar disebut...',
                'option_a' => 'Efek Tyndall',
                'option_b' => 'Efek Doppler',
                'option_c' => 'Efek Fotolistrik',
                'option_d' => 'Efek Rumah Kaca',
                'option_e' => 'Efek Joule',
                'correct_answer' => 'b',
                'order' => 16
            ],
            [
                'topic' => 'Fisika - Radioaktivitas',
                'question_text' => 'Sinar radioaktif yang tidak bermuatan listrik adalah...',
                'option_a' => 'Sinar Alpha',
                'option_b' => 'Sinar Beta',
                'option_c' => 'Sinar Gamma',
                'option_d' => 'Sinar Katode',
                'option_e' => 'Sinar Anode',
                'correct_answer' => 'c',
                'order' => 17
            ],
            [
                'topic' => 'Fisika - Energi',
                'question_text' => 'Energi yang tersimpan dalam bahan bakar fosil adalah energi...',
                'option_a' => 'Kinetik',
                'option_b' => 'Potensial Gravitasi',
                'option_c' => 'Kimia',
                'option_d' => 'Nuklir',
                'option_e' => 'Listrik',
                'correct_answer' => 'c',
                'order' => 18
            ],

            // BIOLOGI (19-26)
            [
                'topic' => 'Biologi - Sel',
                'question_text' => 'Sintesis protein di dalam sel terjadi pada organel...',
                'option_a' => 'Mitokondria',
                'option_b' => 'Ribosom',
                'option_c' => 'Lisosom',
                'option_d' => 'Kloroplas',
                'option_e' => 'Vakuola',
                'correct_answer' => 'b',
                'order' => 19
            ],
            [
                'topic' => 'Biologi - Ekosistem',
                'question_text' => 'Organisme yang mampu membuat makanan sendiri disebut...',
                'option_a' => 'Heterotrof',
                'option_b' => 'Autotrof',
                'option_c' => 'Saprofit',
                'option_d' => 'Parasit',
                'option_e' => 'Detritivor',
                'correct_answer' => 'b',
                'order' => 20
            ],
            [
                'topic' => 'Biologi - Jaringan Hewan',
                'question_text' => 'Jaringan yang berfungsi mengirimkan impuls/rangsang adalah...',
                'option_a' => 'Jaringan Otot',
                'option_b' => 'Jaringan Saraf',
                'option_c' => 'Jaringan Epitel',
                'option_d' => 'Jaringan Ikat',
                'option_e' => 'Jaringan Tulang',
                'correct_answer' => 'b',
                'order' => 21
            ],
            [
                'topic' => 'Biologi - Genetika',
                'question_text' => 'Basa nitrogen yang tidak ditemukan pada RNA adalah...',
                'option_a' => 'Adenin',
                'option_b' => 'Guanin',
                'option_c' => 'Sitosin',
                'option_d' => 'Timin',
                'option_e' => 'Urasil',
                'correct_answer' => 'd',
                'order' => 22
            ],
            [
                'topic' => 'Biologi - Sistem Imun',
                'question_text' => 'Pemberian antigen yang dilemahkan ke dalam tubuh untuk memicu antibodi disebut...',
                'option_a' => 'Infeksi',
                'option_b' => 'Vaksinasi',
                'option_c' => 'Inflamasi',
                'option_d' => 'Transplantasi',
                'option_e' => 'Dialisis',
                'correct_answer' => 'b',
                'order' => 23
            ],
            [
                'topic' => 'Biologi - Klasifikasi',
                'question_text' => 'Sistem klasifikasi 5 kingdom pertama kali diusulkan oleh...',
                'option_a' => 'Carolus Linnaeus',
                'option_b' => 'Robert H. Whittaker',
                'option_c' => 'Charles Darwin',
                'option_d' => 'Gregor Mendel',
                'option_e' => 'Aristoteles',
                'correct_answer' => 'b',
                'order' => 24
            ],
            [
                'topic' => 'Biologi - Hormon',
                'question_text' => 'Hormon yang mengatur kadar gula darah adalah...',
                'option_a' => 'Adrenalin',
                'option_b' => 'Insulin',
                'option_c' => 'Tiroksin',
                'option_d' => 'Estrogen',
                'option_e' => 'Testosteron',
                'correct_answer' => 'b',
                'order' => 25
            ],
            [
                'topic' => 'Biologi - Evolusi',
                'question_text' => 'Burung finch di Kepulauan Galapagos memiliki bentuk paruh berbeda karena adaptasi...',
                'option_a' => 'Suhu',
                'option_b' => 'Makanan',
                'option_c' => 'Predator',
                'option_d' => 'Ketinggian',
                'option_e' => 'Cahaya matahari',
                'correct_answer' => 'b',
                'order' => 26
            ],

            // KIMIA (27-34)
            [
                'topic' => 'Kimia - Ikatan Kimia',
                'question_text' => 'Senyawa NaCl memiliki jenis ikatan...',
                'option_a' => 'Kovalen',
                'option_b' => 'Logam',
                'option_c' => 'Ion',
                'option_d' => 'Hidrogen',
                'option_e' => 'Koordinasi',
                'correct_answer' => 'c',
                'order' => 27
            ],
            [
                'topic' => 'Kimia - Laju Reaksi',
                'question_text' => 'Peningkatan suhu akan mempercepat laju reaksi karena...',
                'option_a' => 'Menurunkan energi aktivasi',
                'option_b' => 'Meningkatkan energi kinetik partikel',
                'option_c' => 'Memperbesar konsentrasi',
                'option_d' => 'Memperkecil luas permukaan',
                'option_e' => 'Mengubah entalpi',
                'correct_answer' => 'b',
                'order' => 28
            ],
            [
                'topic' => 'Kimia - Hidrokarbon',
                'question_text' => 'Alkana dengan jumlah atom karbon 3 disebut...',
                'option_a' => 'Metana',
                'option_b' => 'Etana',
                'option_c' => 'Propana',
                'option_d' => 'Butana',
                'option_e' => 'Pentana',
                'correct_answer' => 'c',
                'order' => 29
            ],
            [
                'topic' => 'Kimia - Asam Basa',
                'question_text' => 'Warna lakmus merah akan menjadi biru jika dimasukkan ke dalam larutan...',
                'option_a' => 'Asam',
                'option_b' => 'Basa',
                'option_c' => 'Netral',
                'option_d' => 'Garam asam',
                'option_e' => 'Air murni',
                'correct_answer' => 'b',
                'order' => 30
            ],
            [
                'topic' => 'Kimia - Konfigurasi Elektron',
                'question_text' => 'Jumlah elektron maksimal pada kulit L (n=2) adalah...',
                'option_a' => '2',
                'option_b' => '8',
                'option_c' => '18',
                'option_d' => '32',
                'option_e' => '10',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Kimia - Stoikiometri',
                'question_text' => 'Massa 1 mol gas oksigen (O2) adalah... (Ar O=16)',
                'option_a' => '16 gram',
                'option_b' => '32 gram',
                'option_c' => '8 gram',
                'option_d' => '48 gram',
                'option_e' => '64 gram',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Kimia - Redoks',
                'question_text' => 'Bilangan oksidasi atom S dalam senyawa H2SO4 adalah...',
                'option_a' => '+2',
                'option_b' => '+4',
                'option_c' => '+6',
                'option_d' => '+8',
                'option_e' => '0',
                'correct_answer' => 'c',
                'order' => 33
            ],
            [
                'topic' => 'Kimia - Koloid',
                'question_text' => 'Susu merupakan sistem koloid jenis...',
                'option_a' => 'Sol',
                'option_b' => 'Emulsi',
                'option_c' => 'Buih',
                'option_d' => 'Aerosol',
                'option_e' => 'Gel',
                'correct_answer' => 'b',
                'order' => 34
            ],

            // BAHASA INDONESIA (35-42)
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Penulisan kata serapan yang benar adalah...',
                'option_a' => 'Analisa',
                'option_b' => 'Praktek',
                'option_c' => 'Kualitas',
                'option_d' => 'Ijin',
                'option_e' => 'Resiko',
                'correct_answer' => 'c',
                'order' => 35
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Ide pokok yang terletak di awal paragraf disebut...',
                'option_a' => 'Deduktif',
                'option_b' => 'Induktif',
                'option_c' => 'Campuran',
                'option_d' => 'Deskriptif',
                'option_e' => 'Naratif',
                'correct_answer' => 'a',
                'order' => 36
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Kalimat sapaan resmi dalam surat dinas adalah...',
                'option_a' => 'Halo teman-teman,',
                'option_b' => 'Dengan hormat,',
                'option_c' => 'Apa kabar bro?',
                'option_d' => 'Selamat siang semua,',
                'option_e' => 'Hai Bapak/Ibu,',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Tujuan utama teks ulasan (resensi) adalah...',
                'option_a' => 'Menghibur pembaca',
                'option_b' => 'Memberikan penilaian terhadap suatu karya',
                'option_c' => 'Mempromosikan produk',
                'option_d' => 'Menceritakan sejarah',
                'option_e' => 'Memberikan instruksi',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Sinonim dari kata "Eskalasi" adalah...',
                'option_a' => 'Penurunan',
                'option_b' => 'Peningkatan',
                'option_c' => 'Perataan',
                'option_d' => 'Penghapusan',
                'option_e' => 'Perbaikan',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Antonim dari kata "Fana" adalah...',
                'option_a' => 'Sementara',
                'option_b' => 'Abadi',
                'option_c' => 'Rusak',
                'option_d' => 'Indah',
                'option_e' => 'Hilang',
                'correct_answer' => 'b',
                'order' => 40
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Bagian struktur teks berita yang berisi inti berita secara singkat disebut...',
                'option_a' => 'Judul',
                'option_b' => 'Kepala berita (Lead)',
                'option_c' => 'Tubuh berita',
                'option_d' => 'Ekor berita',
                'option_e' => 'Sumber berita',
                'correct_answer' => 'b',
                'order' => 41
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Kata penghubung "meskipun" menyatakan hubungan...',
                'option_a' => 'Sebab-akibat',
                'option_b' => 'Pertentangan',
                'option_c' => 'Tujuan',
                'option_d' => 'Waktu',
                'option_e' => 'Pilihan',
                'correct_answer' => 'b',
                'order' => 42
            ],

            // BAHASA INGGRIS (43-50)
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'She ... to school by bike every morning.',
                'option_a' => 'go',
                'option_b' => 'goes',
                'option_c' => 'going',
                'option_d' => 'gone',
                'option_e' => 'went',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'If I ... wings, I would fly around the world.',
                'option_a' => 'have',
                'option_b' => 'has',
                'option_c' => 'had',
                'option_d' => 'having',
                'option_e' => 'am having',
                'correct_answer' => 'c',
                'order' => 44
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'The passive voice of "They are playing football" is...',
                'option_a' => 'Football is played by them.',
                'option_b' => 'Football is being played by them.',
                'option_c' => 'Football was played by them.',
                'option_d' => 'Football has been played by them.',
                'option_e' => 'Football will be played by them.',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'A person who studies the stars and planets is an...',
                'option_a' => 'Astrologer',
                'option_b' => 'Astronomer',
                'option_c' => 'Astronaut',
                'option_d' => 'Architect',
                'option_e' => 'Archaeologist',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Which one is an expression of sympathy?',
                'option_a' => 'Congratulations!',
                'option_b' => 'I am sorry to hear that.',
                'option_c' => 'Happy birthday!',
                'option_d' => 'Good job!',
                'option_e' => 'Nice to meet you.',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'The synonym of "Huge" is...',
                'option_a' => 'Tiny',
                'option_b' => 'Small',
                'option_c' => 'Enormous',
                'option_d' => 'Thin',
                'option_e' => 'Narrow',
                'correct_answer' => 'c',
                'order' => 48
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'I am looking forward to ... you soon.',
                'option_a' => 'meet',
                'option_b' => 'meets',
                'option_c' => 'meeting',
                'option_d' => 'met',
                'option_e' => 'be meet',
                'correct_answer' => 'c',
                'order' => 49
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'He didn\'t come to the party because he ... busy.',
                'option_a' => 'is',
                'option_b' => 'are',
                'option_c' => 'was',
                'option_d' => 'were',
                'option_e' => 'am',
                'correct_answer' => 'c',
                'order' => 50
            ],
        ];

        foreach ($questions as $q) {
            $tryout->questions()->create($q);
        }

        $tryout->update(['question_count' => count($questions)]);
    }
}
