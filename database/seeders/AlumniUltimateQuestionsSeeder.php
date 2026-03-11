<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlumniTryout;
use App\Models\Question;

class AlumniUltimateQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = AlumniTryout::where('name', 'Ultimate Alumni Strategy Pack')->first();
        
        if (!$tryout) {
            $tryout = AlumniTryout::create([
                'name' => 'Ultimate Alumni Strategy Pack',
                'subject' => 'Full SNBT',
                'question_count' => 50,
                'duration_minutes' => 195,
                'price' => 60000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // STRATEGIC LOGIC - ANALYTICAL (1-10)
            [
                'topic' => 'Logic - Analytical',
                'question_text' => 'Tujuh orang (A, B, C, D, E, F, G) sedang mengantre. A di depan B. C di antara D dan E. F tepat di belakang B. G di ujung barisan. Jika D di urutan kedua, di mana posisi C?',
                'option_a' => 'Pertama',
                'option_b' => 'Kedua',
                'option_c' => 'Ketiga',
                'option_d' => 'Keempat',
                'option_e' => 'Kelima',
                'correct_answer' => 'c',
                'order' => 1
            ],
            [
                'topic' => 'Logic - Syllogism',
                'question_text' => 'Semua ilmuwan adalah pemikir. Sebagian pemikir adalah penulis. Tidak ada penulis yang malas. Kesimpulan yang pasti benar adalah...',
                'option_a' => 'Semua ilmuwan adalah penulis.',
                'option_b' => 'Sebagian pemikir tidak malas.',
                'option_c' => 'Semua pemikir adalah ilmuwan.',
                'option_d' => 'Ilmuwan pasti tidak malas.',
                'option_e' => 'Sebagian ilmuwan adalah penulis.',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Logic - Patterns',
                'question_text' => 'Pola bilangan: 1, 2, 6, 24, 120, ... Angka selanjutnya adalah...',
                'option_a' => '240',
                'option_b' => '480',
                'option_c' => '600',
                'option_d' => '720',
                'option_e' => '840',
                'correct_answer' => 'd',
                'order' => 3
            ],
            [
                'topic' => 'Logic - Conditionals',
                'question_text' => 'Jika x lulus ujian, maka ia mendapat beasiswa. Jika x mendapat beasiswa, maka biaya hidupnya terjamin. Ternyata biaya hidup x tidak terjamin. Kesimpulan:',
                'option_a' => 'x tidak lulus ujian.',
                'option_b' => 'x lulus ujian tetapi tidak dapat beasiswa.',
                'option_c' => 'x tidak mau beasiswa.',
                'option_d' => 'Ujiannya sangat sulit.',
                'option_e' => 'x mencari pekerjaan sampingan.',
                'correct_answer' => 'a',
                'order' => 4
            ],
            [
                'topic' => 'Logic - Analysis',
                'question_text' => 'Dalam sebuah grup, hobi membaca lebih banyak daripada menulis. Hobi menulis sama banyaknya dengan melukis. Hobi menyanyi paling sedikit. Manakah yang benar?',
                'option_a' => 'Membaca > Melukis',
                'option_b' => 'Menyanyi > Menulis',
                'option_c' => 'Melukis > Membaca',
                'option_d' => 'Menulis > Membaca',
                'option_e' => 'Menyanyi = Melukis',
                'correct_answer' => 'a',
                'order' => 5
            ],
            [
                'topic' => 'Logic - Patterns',
                'question_text' => 'Pola huruf: Z, X, V, T, ... Huruf selanjutnya adalah...',
                'option_a' => 'S',
                'option_b' => 'R',
                'option_c' => 'Q',
                'option_d' => 'P',
                'option_e' => 'O',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Logic - Quantitative Reasoning',
                'question_text' => 'Sebuah mesin dapat memproduksi 100 unit dalam 4 jam. Jika ada 3 mesin yang sama bekerja bersamaan, berapa lama waktu untuk memproduksi 600 unit?',
                'option_a' => '4 jam',
                'option_b' => '6 jam',
                'option_c' => '8 jam',
                'option_d' => '12 jam',
                'option_e' => '2 jam',
                'correct_answer' => 'c',
                'order' => 7
            ],
            [
                'topic' => 'Logic - Syllogism',
                'question_text' => 'Semua plastik adalah sintetis. Beberapa barang sintetis tidak ramah lingkungan. Kesimpulan:',
                'option_a' => 'Semua plastik tidak ramah lingkungan.',
                'option_b' => 'Beberapa plastik tidak ramah lingkungan.',
                'option_c' => 'Barang ramah lingkungan bukan sintetis.',
                'option_d' => 'Sintetis pasti plastik.',
                'option_e' => 'Tidak dapat disimpulkan hubungan plastik dengan ramah lingkungan.',
                'correct_answer' => 'e',
                'order' => 8
            ],
            [
                'topic' => 'Logic - Data Interpretation',
                'question_text' => 'Jika populasi kota A meningkat 10% setiap tahun, dan populasi saat ini 100.000, berapa populasi 2 tahun lagi?',
                'option_a' => '120.000',
                'option_b' => '121.000',
                'option_c' => '110.000',
                'option_d' => '111.000',
                'option_e' => '122.000',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Logic - Spatial',
                'question_text' => 'Jika sebuah kubus dipotong menjadi dua bagian yang sama besar secara horizontal, maka jumlah titik sudut pada kedua potongan tersebut adalah...',
                'option_a' => '8',
                'option_b' => '12',
                'option_c' => '16',
                'option_d' => '10',
                'option_e' => '14',
                'correct_answer' => 'c',
                'order' => 10
            ],

            // ADVANCED QUANTITATIVE (11-25)
            [
                'topic' => 'PK - Algebra',
                'question_text' => 'Jika (x+y)^2 = 100 dan xy = 20, maka x^2 + y^2 adalah...',
                'option_a' => '80',
                'option_b' => '60',
                'option_c' => '40',
                'option_d' => '120',
                'option_e' => '140',
                'correct_answer' => 'b',
                'order' => 11
            ],
            [
                'topic' => 'PK - Geometry',
                'question_text' => 'Sebuah silinder memiliki jari-jari r dan tinggi h. Jika jari-jarinya digandakan dan tingginya tetap, volumenya menjadi...',
                'option_a' => '2 kali semula',
                'option_b' => '4 kali semula',
                'option_c' => '8 kali semula',
                'option_d' => 'Tetap',
                'option_e' => 'Setengahnya',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'PK - Number Theory',
                'question_text' => 'Berapakah bilangan bulat positif terkecil yang habis dibagi 4, 5, dan 6?',
                'option_a' => '20',
                'option_b' => '30',
                'option_c' => '60',
                'option_d' => '120',
                'option_e' => '40',
                'correct_answer' => 'c',
                'order' => 13
            ],
            [
                'topic' => 'PK - Statistics',
                'question_text' => 'Rata-rata 5 bilangan adalah 15. Jika satu bilangan diganti dengan angka 20, rata-ratanya menjadi 16. Berapa nilai bilangan yang diganti?',
                'option_a' => '10',
                'option_b' => '15',
                'option_c' => '12',
                'option_d' => '18',
                'option_e' => '14',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'PK - Calculus',
                'question_text' => 'Turunan dari f(x) = (2x + 1)^3 adalah...',
                'option_a' => '3(2x + 1)^2',
                'option_b' => '6(2x + 1)^2',
                'option_c' => '2(2x + 1)^2',
                'option_d' => '6x(2x + 1)^2',
                'option_e' => '12x',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'PK - Trigonometry',
                'question_text' => 'Jika tan x = 3/4, maka sin x adalah... (x sudut lancip)',
                'option_a' => '3/5',
                'option_b' => '4/5',
                'option_c' => '3/7',
                'option_d' => '4/7',
                'option_e' => '1',
                'correct_answer' => 'a',
                'order' => 16
            ],
            [
                'topic' => 'PK - Logarithms',
                'question_text' => 'Jika ^2log 8 = x, maka x adalah...',
                'option_a' => '2',
                'option_b' => '3',
                'option_c' => '4',
                'option_d' => '1',
                'option_e' => '0',
                'correct_answer' => 'b',
                'order' => 17
            ],
            [
                'topic' => 'PK - Probability',
                'question_text' => 'Dua buah dadu dilempar. Peluang jumlah mata dadu kurang dari 4 adalah...',
                'option_a' => '1/36',
                'option_b' => '2/36',
                'option_c' => '3/36',
                'option_d' => '4/36',
                'option_e' => '1/6',
                'correct_answer' => 'c',
                'order' => 18
            ],
            [
                'topic' => 'PK - Matrices',
                'question_text' => 'Invers dari matriks [1 2; 3 4] adalah...',
                'option_a' => '[ -2 1; 1.5 -0.5]',
                'option_b' => '[4 -2; -3 1]',
                'option_c' => '[ -2 1; -1.5 0.5]',
                'option_d' => '[1 3; 2 4]',
                'option_e' => '[0 0; 0 0]',
                'correct_answer' => 'a',
                'order' => 19
            ],
            [
                'topic' => 'PK - Sequences',
                'question_text' => 'Jumlah 10 suku pertama dari deret aritmetika 2, 5, 8, ... adalah...',
                'option_a' => '155',
                'option_b' => '145',
                'option_c' => '165',
                'option_d' => '175',
                'option_e' => '135',
                'correct_answer' => 'a',
                'order' => 20
            ],
            [
                'topic' => 'PK - Exponents',
                'question_text' => 'Bentuk sederhana dari (a^2 b^3)^2 / a^3 adalah...',
                'option_a' => 'a b^6',
                'option_b' => 'a^7 b^6',
                'option_c' => 'a b^5',
                'option_d' => 'a^4 b^6',
                'option_e' => 'b^6',
                'correct_answer' => 'a',
                'order' => 21
            ],
            [
                'topic' => 'PK - Sets',
                'question_text' => 'Dari 40 orang, 25 suka kopi, 20 suka teh, dan 10 suka keduanya. Berapa yang tidak suka keduanya?',
                'option_a' => '5',
                'option_b' => '10',
                'option_c' => '15',
                'option_d' => '0',
                'option_e' => '20',
                'correct_answer' => 'a',
                'order' => 22
            ],
            [
                'topic' => 'PK - Linear Equations',
                'question_text' => 'Selesaikan sistem: x + y = 10, 2x - y = 2. Nilai x adalah...',
                'option_a' => '4',
                'option_b' => '6',
                'option_c' => '5',
                'option_d' => '3',
                'option_e' => '7',
                'correct_answer' => 'a',
                'order' => 23
            ],
            [
                'topic' => 'PK - Geometry',
                'question_text' => 'Panjang diagonal ruang sebuah kubus dengan rusuk s adalah...',
                'option_a' => 's√2',
                'option_b' => 's√3',
                'option_c' => '2s',
                'option_d' => 's',
                'option_e' => '3s',
                'correct_answer' => 'b',
                'order' => 24
            ],
            [
                'topic' => 'PK - Functions',
                'question_text' => 'Jika f(x) = x^2 - 4, maka f(x+1) adalah...',
                'option_a' => 'x^2 - 3',
                'option_b' => 'x^2 + 2x - 3',
                'option_c' => 'x^2 + 2x + 1',
                'option_d' => 'x^2 - 5',
                'option_e' => 'x^2 + 1',
                'correct_answer' => 'b',
                'order' => 25
            ],

            // STRATEGIC LITERACY (26-50)
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Teks: "Indonesia memiliki potensi energi terbarukan yang melimpah, namun pemanfaatannya masih di bawah 10%." Masalah utama menurut teks tersebut adalah...',
                'option_a' => 'Indonesia tidak punya energi.',
                'option_b' => 'Energi terbarukan sangat mahal.',
                'option_c' => 'Rendahnya pemanfaatan energi terbarukan.',
                'option_d' => 'Indonesia hanya pakai minyak bumi.',
                'option_e' => 'Pemerintah tidak peduli.',
                'correct_answer' => 'c',
                'order' => 26
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Kata "Signifikan" dalam konteks ilmiah berarti...',
                'option_a' => 'Sedikit',
                'option_b' => 'Berarti atau penting',
                'option_c' => 'Sangat banyak',
                'option_d' => 'Tidak terlihat',
                'option_e' => 'Berubah-ubah',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Manakah penulisan kalimat yang menggunakan ejaan yang benar?',
                'option_a' => 'Ibu membeli pisang ambon di pasar.',
                'option_b' => 'Ibu membeli Pisang Ambon di Pasar.',
                'option_c' => 'Ibu membeli pisang Ambon di pasar.',
                'option_d' => 'Ibu membeli pisang ambon di Pasar.',
                'option_e' => 'Ibu Membeli Pisang Ambon Di Pasar.',
                'correct_answer' => 'a',
                'order' => 28
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Konjungsi yang tepat untuk kalimat: "Dia sangat pintar ... dia tidak sombong."',
                'option_a' => 'Karena',
                'option_b' => 'Sehingga',
                'option_c' => 'Tetapi',
                'option_d' => 'Maka',
                'option_e' => 'Atau',
                'correct_answer' => 'c',
                'order' => 29
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Gaya bahasa "Suaranya menggelegar membelah angkasa" adalah...',
                'option_a' => 'Litotes',
                'option_b' => 'Personifikasi',
                'option_c' => 'Hiperbola',
                'option_d' => 'Metafora',
                'option_e' => 'Sinekdok',
                'correct_answer' => 'c',
                'order' => 30
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Ringkasan teks harus mempertahankan...',
                'option_a' => 'Gaya bahasa penulis',
                'option_b' => 'Urutan isi dan sudut pandang penulis',
                'option_c' => 'Panjang kalimat',
                'option_d' => 'Jumlah paragraf',
                'option_e' => 'Semua ilustrasi',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Kata "Ekuivalen" bersinonim dengan...',
                'option_a' => 'Berbeda',
                'option_b' => 'Sederajat/Sama',
                'option_c' => 'Lebih tinggi',
                'option_d' => 'Lebih rendah',
                'option_e' => 'Bertentangan',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Kalimat efektif di bawah ini adalah...',
                'option_a' => 'Bagi para hadirin dimohon berdiri.',
                'option_b' => 'Hadirin dimohon berdiri.',
                'option_c' => 'Kepada hadirin dimohon untuk berdiri.',
                'option_d' => 'Hadirin semuanya dimohon berdiri.',
                'option_e' => 'Para hadirin-hadirin dimohon berdiri.',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Antonim dari "Sekuler" adalah...',
                'option_a' => 'Duniawi',
                'option_b' => 'Agamis',
                'option_c' => 'Modern',
                'option_d' => 'Tradisional',
                'option_e' => 'Bebas',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'Literacy - Indo',
                'question_text' => 'Tujuan teks deskripsi adalah...',
                'option_a' => 'Menceritakan sejarah',
                'option_b' => 'Menggambarkan objek sejelas mungkin',
                'option_c' => 'Membujuk pembaca',
                'option_d' => 'Menjelaskan proses ilmiah',
                'option_e' => 'Menghibur pembaca',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'Choose the correct word: "The manager ... the staff about the new policy tomorrow."',
                'option_a' => 'inform',
                'option_b' => 'will inform',
                'option_c' => 'informed',
                'option_d' => 'has informed',
                'option_e' => 'is informing',
                'correct_answer' => 'b',
                'order' => 36
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'What is the synonym of "Vibrant"?',
                'option_a' => 'Dull',
                'option_b' => 'Energetic/Lively',
                'option_c' => 'Quiet',
                'option_d' => 'Pale',
                'option_e' => 'Small',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'Which sentence is in the passive voice?',
                'option_a' => 'The chef cooked a delicious meal.',
                'option_b' => 'The meal was cooked by the chef.',
                'option_c' => 'The chef is cooking now.',
                'option_d' => 'The chef will cook later.',
                'option_e' => 'The chef has many knives.',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => '"Despite the rain, they played the match." The word "Despite" shows...',
                'option_a' => 'Reason',
                'option_b' => 'Contrast',
                'option_c' => 'Time',
                'option_d' => 'Result',
                'option_e' => 'Addition',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'What is the antonym of "Mandatory"?',
                'option_a' => 'Required',
                'option_b' => 'Optional',
                'option_c' => 'Necessary',
                'option_d' => 'Forced',
                'option_e' => 'Crucial',
                'correct_answer' => 'b',
                'order' => 40
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'Identify the error: "He don\'t (A) have (B) any (C) money (D) left (E)."',
                'option_a' => 'A',
                'option_b' => 'B',
                'option_c' => 'C',
                'option_d' => 'D',
                'option_e' => 'E',
                'correct_answer' => 'a',
                'order' => 41
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => '"I have been working here since 2010." This means...',
                'option_a' => 'I worked here only in 2010.',
                'option_b' => 'I still work here now.',
                'option_c' => 'I will start working in 2010.',
                'option_d' => 'I stopped working in 2010.',
                'option_e' => 'I never worked here.',
                'correct_answer' => 'b',
                'order' => 42
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'What does "to cut corners" mean?',
                'option_a' => 'To be precise',
                'option_b' => 'To do something poorly to save time or money',
                'option_c' => 'To build a house',
                'option_d' => 'To run fast',
                'option_e' => 'To be very angry',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'Choose the best completion: "Hardly had I arrived ... it started to rain."',
                'option_a' => 'than',
                'option_b' => 'when',
                'option_c' => 'then',
                'option_d' => 'after',
                'option_e' => 'before',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'What is the synonym of "Abundant"?',
                'option_a' => 'Scarce',
                'option_b' => 'Plentiful',
                'option_c' => 'Rare',
                'option_d' => 'Hidden',
                'option_e' => 'Expensive',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'If I ... the answer, I would tell you.',
                'option_a' => 'know',
                'option_b' => 'knew',
                'option_c' => 'known',
                'option_d' => 'knowing',
                'option_e' => 'had known',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'The word "Fragile" is often seen on packages containing...',
                'option_a' => 'Clothes',
                'option_b' => 'Glass or electronics',
                'option_c' => 'Books',
                'option_d' => 'Food',
                'option_e' => 'Stone',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'A person who studies the environment is an...',
                'option_a' => 'Ecologist',
                'option_b' => 'Economist',
                'option_c' => 'Archeologist',
                'option_d' => 'Astrologer',
                'option_e' => 'Psychologist',
                'correct_answer' => 'a',
                'order' => 48
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => '"It is vital to stay hydrated." Vital means...',
                'option_a' => 'Optional',
                'option_b' => 'Essential/Very important',
                'option_c' => 'Useless',
                'option_d' => 'Cheap',
                'option_e' => 'Fast',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Literacy - Eng',
                'question_text' => 'The antonym of "Permanent" is...',
                'option_a' => 'Constant',
                'option_b' => 'Temporary',
                'option_c' => 'Lasting',
                'option_d' => 'Hard',
                'option_e' => 'Long',
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
