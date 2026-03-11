<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmaUtbkTryout;
use App\Models\Question;

class Sma12MasteryQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmaUtbkTryout::where('name', 'Mastery Pack SMA 12 & UTBK')->first();
        
        if (!$tryout) {
            $tryout = SmaUtbkTryout::create([
                'name' => 'Mastery Pack SMA 12 & UTBK',
                'subject' => 'Full Simulasi',
                'question_count' => 50,
                'duration_minutes' => 195,
                'price' => 50000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // PENALARAN INDUKTIF (1-10)
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Beberapa toko di jalan Merdeka menjual sepatu. Semua toko yang menjual sepatu juga menjual kaos kaki. Kesimpulan yang tepat adalah...',
                'option_a' => 'Semua toko di jalan Merdeka menjual kaos kaki.',
                'option_b' => 'Beberapa toko di jalan Merdeka menjual kaos kaki.',
                'option_c' => 'Sebagian toko yang menjual kaos kaki tidak berada di jalan Merdeka.',
                'option_d' => 'Toko yang tidak menjual sepatu pasti tidak menjual kaos kaki.',
                'option_e' => 'Hanya toko di jalan Merdeka yang menjual kaos kaki.',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Jika hari ini cerah, maka Budi pergi ke pantai. Jika Budi pergi ke pantai, maka ia akan memakai kacamata hitam. Hari ini Budi tidak memakai kacamata hitam. Kesimpulan yang tepat adalah...',
                'option_a' => 'Hari ini mendung.',
                'option_b' => 'Hari ini cerah tetapi Budi lupa kacamata.',
                'option_c' => 'Hari ini tidak cerah.',
                'option_d' => 'Budi pergi ke pantai tanpa kacamata.',
                'option_e' => 'Budi tidak suka pantai.',
                'correct_answer' => 'c',
                'order' => 2
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Pola bilangan: 1, 4, 9, 16, 25, ... Angka selanjutnya adalah...',
                'option_a' => '30',
                'option_b' => '35',
                'option_c' => '36',
                'option_d' => '40',
                'option_e' => '49',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Semua mamalia menyusui anaknya. Paus adalah mamalia. Kesimpulan yang tepat adalah...',
                'option_a' => 'Paus hidup di air.',
                'option_b' => 'Paus menyusui anaknya.',
                'option_c' => 'Semua yang menyusui adalah paus.',
                'option_d' => 'Paus bukan ikan.',
                'option_e' => 'Mamalia pasti hidup di laut.',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Jika x > y dan y > z, maka manakah yang benar?',
                'option_a' => 'x < z',
                'option_b' => 'x = z',
                'option_c' => 'x > z',
                'option_d' => 'x + y = z',
                'option_e' => 'xz > y',
                'correct_answer' => 'c',
                'order' => 5
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Beberapa siswa menyukai olahraga. Semua siswa yang menyukai olahraga memiliki badan yang bugar. Kesimpulan yang tepat adalah...',
                'option_a' => 'Semua siswa memiliki badan yang bugar.',
                'option_b' => 'Beberapa siswa memiliki badan yang bugar.',
                'option_c' => 'Siswa yang tidak bugar menyukai olahraga.',
                'option_d' => 'Olahraga adalah satu-satunya cara bugar.',
                'option_e' => 'Tidak ada siswa yang bugar.',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Pola huruf: B, E, H, K, ... Huruf selanjutnya adalah...',
                'option_a' => 'M',
                'option_b' => 'N',
                'option_c' => 'O',
                'option_d' => 'P',
                'option_e' => 'Q',
                'correct_answer' => 'b',
                'order' => 7
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Jika p = q, maka r > s. Ternyata r <= s. Kesimpulan yang tepat adalah...',
                'option_a' => 'p = q',
                'option_b' => 'p != q',
                'option_c' => 'p > q',
                'option_d' => 'q > p',
                'option_e' => 'r = s',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Semua pohon di hutan A berdaun hijau. Sebagian pohon di hutan A menghasilkan buah. Kesimpulan yang tepat adalah...',
                'option_a' => 'Semua pohon berdaun hijau menghasilkan buah.',
                'option_b' => 'Sebagian pohon berdaun hijau menghasilkan buah.',
                'option_c' => 'Pohon yang tidak berdaun hijau ada di hutan A.',
                'option_d' => 'Hutan A hanya berisi pohon buah.',
                'option_e' => 'Pohon buah pasti berdaun hijau.',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Penalaran Induktif',
                'question_text' => 'Pola angka: 2, 3, 5, 8, 13, ... Angka selanjutnya adalah...',
                'option_a' => '18',
                'option_b' => '20',
                'option_c' => '21',
                'option_d' => '23',
                'option_e' => '25',
                'correct_answer' => 'c',
                'order' => 10
            ],

            // PENALARAN DEDUKTIF (11-20)
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Dalam sebuah kompetisi, A lebih cepat dari B. C lebih lambat dari D. B lebih cepat dari D. Urutan dari yang tercepat adalah...',
                'option_a' => 'A, B, D, C',
                'option_b' => 'A, D, B, C',
                'option_c' => 'B, A, D, C',
                'option_d' => 'A, B, C, D',
                'option_e' => 'D, B, A, C',
                'correct_answer' => 'a',
                'order' => 11
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Jika x adalah bilangan prima antara 10 dan 20, dan y adalah bilangan genap antara 10 dan 15, maka x + y tidak mungkin bernilai...',
                'option_a' => '23',
                'option_b' => '25',
                'option_c' => '27',
                'option_d' => '31',
                'option_e' => '33',
                'correct_answer' => 'e',
                'order' => 12
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Semua kota di negara M memiliki taman. Kota X adalah salah satu kota di negara M. Kesimpulan yang tepat adalah...',
                'option_a' => 'Kota X sangat indah.',
                'option_b' => 'Kota X memiliki taman.',
                'option_c' => 'Hanya kota X yang punya taman.',
                'option_d' => 'Negara M hanya punya satu kota.',
                'option_e' => 'Kota di luar negara M tidak punya taman.',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Jika lampu menyala, maka ruangan terang. Jika ruangan terang, maka saya bisa membaca. Kesimpulan: Jika lampu tidak menyala, maka...',
                'option_a' => 'Saya tidak bisa membaca.',
                'option_b' => 'Ruangan tidak terang.',
                'option_c' => 'Saya tetap bisa membaca.',
                'option_d' => 'Lampu rusak.',
                'option_e' => 'Tidak dapat disimpulkan.',
                'correct_answer' => 'e',
                'order' => 14
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Andi, Budi, dan Cici duduk berjajar. Andi tidak di samping Budi. Budi di ujung kanan. Di mana Cici duduk?',
                'option_a' => 'Di ujung kiri',
                'option_b' => 'Di tengah',
                'option_c' => 'Di samping Budi',
                'option_d' => 'Di ujung kanan juga',
                'option_e' => 'Di mana saja',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Semua burung bertelur. Kuda tidak bertelur. Kesimpulan yang tepat adalah...',
                'option_a' => 'Kuda bukan burung.',
                'option_b' => 'Burung lebih baik dari kuda.',
                'option_c' => 'Ada burung yang tidak bertelur.',
                'option_d' => 'Kuda adalah mamalia.',
                'option_e' => 'Semua yang bertelur adalah burung.',
                'correct_answer' => 'a',
                'order' => 16
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Jika nilai rapor bagus, maka ayah membelikan sepeda. Ayah tidak membelikan sepeda. Kesimpulan:',
                'option_a' => 'Nilai rapor jelek.',
                'option_b' => 'Nilai rapor tidak bagus.',
                'option_c' => 'Ayah tidak punya uang.',
                'option_d' => 'Sepeda sedang mahal.',
                'option_e' => 'Andi tidak mau sepeda.',
                'correct_answer' => 'b',
                'order' => 17
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Ada 5 kotak berwarna Merah, Kuning, Hijau, Biru, Ungu. Merah di antara Kuning dan Hijau. Biru di ujung. Ungu di samping Biru. Jika Biru di ujung kiri, urutan dari kiri ke kanan adalah...',
                'option_a' => 'Biru, Ungu, Kuning, Merah, Hijau',
                'option_b' => 'Biru, Ungu, Hijau, Merah, Kuning',
                'option_c' => 'Keduanya bisa benar',
                'option_d' => 'Biru, Kuning, Merah, Hijau, Ungu',
                'option_e' => 'Biru, Ungu, Merah, Kuning, Hijau',
                'correct_answer' => 'c',
                'order' => 18
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Beberapa dokter adalah penulis. Semua penulis suka membaca. Kesimpulan:',
                'option_a' => 'Semua dokter suka membaca.',
                'option_b' => 'Beberapa dokter suka membaca.',
                'option_c' => 'Hanya penulis yang suka membaca.',
                'option_d' => 'Beberapa yang suka membaca bukan dokter.',
                'option_e' => 'Dokter pasti penulis.',
                'correct_answer' => 'b',
                'order' => 19
            ],
            [
                'topic' => 'Penalaran Deduktif',
                'question_text' => 'Jika hari Minggu, sekolah libur. Hari ini sekolah tidak libur. Kesimpulan:',
                'option_a' => 'Hari ini hari Senin.',
                'option_b' => 'Hari ini bukan hari Minggu.',
                'option_c' => 'Besok hari Minggu.',
                'option_d' => 'Sekolah sedang ada acara.',
                'option_e' => 'Guru-guru sedang rajin.',
                'correct_answer' => 'b',
                'order' => 20
            ],

            // PENGETAHUAN KUANTITATIF (21-30)
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika x + 1/x = 3, maka x^2 + 1/x^2 adalah...',
                'option_a' => '7',
                'option_b' => '9',
                'option_c' => '11',
                'option_d' => '5',
                'option_e' => '10',
                'correct_answer' => 'a',
                'order' => 21
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Berapakah sisa pembagian 2^2024 oleh 3?',
                'option_a' => '0',
                'option_b' => '1',
                'option_c' => '2',
                'option_d' => '3',
                'option_e' => ' -1',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Sebuah lingkaran berada di dalam persegi sehingga menyinggung keempat sisinya. Jika luas persegi 100 cm², luas lingkaran adalah...',
                'option_a' => '25π cm²',
                'option_b' => '50π cm²',
                'option_c' => '100π cm²',
                'option_d' => '10π cm²',
                'option_e' => '20π cm²',
                'correct_answer' => 'a',
                'order' => 23
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika a, b adalah akar-akar x^2 - 5x + 6 = 0, maka a^2 + b^2 adalah...',
                'option_a' => '13',
                'option_b' => '25',
                'option_c' => '12',
                'option_d' => '19',
                'option_e' => '31',
                'correct_answer' => 'a',
                'order' => 24
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Sebuah tangki air dapat diisi penuh oleh pipa A dalam 2 jam, dan pipa B dalam 3 jam. Jika keduanya digunakan bersamaan, waktu yang dibutuhkan adalah...',
                'option_a' => '1 jam',
                'option_b' => '1,2 jam',
                'option_c' => '2,5 jam',
                'option_d' => '5 jam',
                'option_e' => '0,8 jam',
                'correct_answer' => 'b',
                'order' => 25
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Nilai rata-rata 10 siswa adalah 75. Jika nilai Andi dimasukkan, rata-ratanya menjadi 76. Nilai Andi adalah...',
                'option_a' => '80',
                'option_b' => '85',
                'option_c' => '86',
                'option_d' => '90',
                'option_e' => '76',
                'correct_answer' => 'c',
                'order' => 26
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika 3^x = 81, maka nilai dari 2^(x-1) adalah...',
                'option_a' => '4',
                'option_b' => '8',
                'option_c' => '16',
                'option_d' => '2',
                'option_e' => '1',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Banyaknya bilangan ganjil 3 angka yang dapat dibentuk dari angka 1, 2, 3, 4, 5 tanpa pengulangan adalah...',
                'option_a' => '36',
                'option_b' => '60',
                'option_c' => '24',
                'option_d' => '48',
                'option_e' => '12',
                'correct_answer' => 'a',
                'order' => 28
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Harga jual sebuah barang Rp 120.000 dengan keuntungan 20%. Harga belinya adalah...',
                'option_a' => 'Rp 100.000',
                'option_b' => 'Rp 96.000',
                'option_c' => 'Rp 110.000',
                'option_d' => 'Rp 90.000',
                'option_e' => 'Rp 105.000',
                'correct_answer' => 'a',
                'order' => 29
            ],
            [
                'topic' => 'Pengetahuan Kuantitatif',
                'question_text' => 'Jika f(x) = ax + b, f(1) = 3 dan f(2) = 5, maka f(10) adalah...',
                'option_a' => '19',
                'option_b' => '21',
                'option_c' => '23',
                'option_d' => '25',
                'option_e' => '17',
                'correct_answer' => 'b',
                'order' => 30
            ],

            // LITERASI BAHASA INDONESIA (31-40)
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Teks: "Pemanasan global berdampak buruk pada ekosistem kutub. Mencairnya es mengakibatkan beruang kutub kehilangan habitatnya." Inti dari teks tersebut adalah...',
                'option_a' => 'Beruang kutub sangat lucu.',
                'option_b' => 'Es di kutub sangat banyak.',
                'option_c' => 'Dampak pemanasan global bagi habitat kutub.',
                'option_d' => 'Cara mencegah pemanasan global.',
                'option_e' => 'Pentingnya menjaga es.',
                'correct_answer' => 'c',
                'order' => 31
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kata "Habitat" dalam teks di atas bermakna...',
                'option_a' => 'Makanan pokok',
                'option_b' => 'Tempat tinggal asli',
                'option_c' => 'Jenis keturunan',
                'option_d' => 'Cara berkembang biak',
                'option_e' => 'Kelompok sosial',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Penulisan kata yang benar adalah...',
                'option_a' => 'Silahkan',
                'option_b' => 'Silakan',
                'option_c' => 'Antri',
                'option_d' => 'Sekedar',
                'option_e' => 'Praktek',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kalimat sapaan yang santun adalah...',
                'option_a' => 'Apa kabar kalian semua?',
                'option_b' => 'Gimana kabarnya, Pak?',
                'option_c' => 'Selamat siang, Bapak/Ibu sekalian.',
                'option_d' => 'Halo bro, sehat?',
                'option_e' => 'Woi, dengerin ya!',
                'correct_answer' => 'c',
                'order' => 34
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Sinonim dari "Inovasi" adalah...',
                'option_a' => 'Penemuan baru',
                'option_b' => 'Kebiasaan lama',
                'option_c' => 'Kerusakan',
                'option_d' => 'Perbaikan alat',
                'option_e' => 'Penyusunan rencana',
                'correct_answer' => 'a',
                'order' => 35
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Majas yang melebih-lebihkan kenyataan disebut majas...',
                'option_a' => 'Litotes',
                'option_b' => 'Metafora',
                'option_c' => 'Hiperbola',
                'option_d' => 'Personifikasi',
                'option_e' => 'Ironi',
                'correct_answer' => 'c',
                'order' => 36
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Tanda baca yang digunakan untuk memisahkan unsur-unsur dalam suatu pemerincian adalah...',
                'option_a' => 'Titik',
                'option_b' => 'Koma',
                'option_c' => 'Titik dua',
                'option_d' => 'Titik koma',
                'option_e' => 'Tanda hubung',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Antonim dari kata "Konkaf" adalah...',
                'option_a' => 'Cekung',
                'option_b' => 'Cembung (Konveks)',
                'option_c' => 'Datar',
                'option_d' => 'Miring',
                'option_e' => 'Bulat',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Tujuan dari teks persuasi adalah...',
                'option_a' => 'Menceritakan kejadian',
                'option_b' => 'Menjelaskan proses',
                'option_c' => 'Mengajak atau membujuk pembaca',
                'option_d' => 'Memberikan informasi data',
                'option_e' => 'Menghibur pembaca',
                'correct_answer' => 'c',
                'order' => 39
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Penulisan singkatan "dan lain-lain" yang benar adalah...',
                'option_a' => 'dll.',
                'option_b' => 'd.l.l.',
                'option_c' => 'dll',
                'option_d' => 'DLL',
                'option_e' => 'd/l',
                'correct_answer' => 'a',
                'order' => 40
            ],

            // LITERASI BAHASA INGGRIS (41-50)
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Read the sentence: "Technology has evolved significantly over the last decade." The word "evolved" means...',
                'option_a' => 'Stayed the same',
                'option_b' => 'Developed or changed',
                'option_c' => 'Stopped working',
                'option_d' => 'Became cheaper',
                'option_e' => 'Was forgotten',
                'correct_answer' => 'b',
                'order' => 41
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Which one is a formal greeting?',
                'option_a' => 'What\'s up?',
                'option_b' => 'Hey there!',
                'option_c' => 'Good morning, Professor.',
                'option_d' => 'Hi guys.',
                'option_e' => 'See ya.',
                'correct_answer' => 'c',
                'order' => 42
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The synonym of "Accurate" is...',
                'option_a' => 'Fast',
                'option_b' => 'Wrong',
                'option_c' => 'Precise',
                'option_d' => 'Beautiful',
                'option_e' => 'Heavy',
                'correct_answer' => 'c',
                'order' => 43
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Choose the correct verb: "Every student ... to pass the exam."',
                'option_a' => 'want',
                'option_b' => 'wants',
                'option_c' => 'wanting',
                'option_d' => 'is want',
                'option_e' => 'are want',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'What is the opposite of "Generous"?',
                'option_a' => 'Kind',
                'option_b' => 'Mean/Stingy',
                'option_c' => 'Rich',
                'option_d' => 'Smart',
                'option_e' => 'Helpful',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Identify the tense: "I will have finished my homework by 8 PM."',
                'option_a' => 'Future Simple',
                'option_b' => 'Future Continuous',
                'option_c' => 'Future Perfect',
                'option_d' => 'Present Perfect',
                'option_e' => 'Past Perfect',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'If it rains tomorrow, we ... stay at home.',
                'option_a' => 'would',
                'option_b' => 'will',
                'option_c' => 'must have',
                'option_d' => 'are',
                'option_e' => 'does',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The book ... by many people around the world.',
                'option_a' => 'is read',
                'option_b' => 'reads',
                'option_c' => 'is reading',
                'option_d' => 'has read',
                'option_e' => 'was readed',
                'correct_answer' => 'a',
                'order' => 48
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Which word describes a place where airplanes land and take off?',
                'option_a' => 'Station',
                'option_b' => 'Harbor',
                'option_c' => 'Airport',
                'option_d' => 'Gym',
                'option_e' => 'Library',
                'correct_answer' => 'c',
                'order' => 49
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The synonym of "Large" is...',
                'option_a' => 'Tiny',
                'option_b' => 'Huge',
                'option_c' => 'Narrow',
                'option_d' => 'Thin',
                'option_e' => 'Short',
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
