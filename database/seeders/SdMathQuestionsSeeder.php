<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SdTryout;
use App\Models\Question;

class SdMathQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SdTryout::where('name', 'Simulasi Matematika Dasar SD')->first();
        
        if (!$tryout) {
            $tryout = SdTryout::create([
                'name' => 'Simulasi Matematika Dasar SD',
                'subject' => 'Matematika',
                'question_count' => 50,
                'duration_minutes' => 60,
                'price' => 0,
                'status' => 'published'
            ]);
        }

        // Hapus soal lama jika ada untuk menghindari duplikasi saat seeding ulang
        $tryout->questions()->delete();

        $questions = [
            // Bilangan Cacah & Operasi Hitung (1-10)
            [
                'topic' => 'Bilangan Cacah',
                'question_text' => 'Hasil dari 1.250 + 7.500 - 3.450 adalah...',
                'option_a' => '5.300',
                'option_b' => '4.300',
                'option_c' => '5.400',
                'option_d' => '4.400',
                'option_e' => '5.500',
                'correct_answer' => 'a',
                'order' => 1
            ],
            [
                'topic' => 'Operasi Hitung',
                'question_text' => 'Hasil dari 25 x (45 + 55) : 50 adalah...',
                'option_a' => '40',
                'option_b' => '50',
                'option_c' => '60',
                'option_d' => '70',
                'option_e' => '80',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Bilangan Bulat',
                'question_text' => 'Hasil dari -15 + (-12) - (-10) adalah...',
                'option_a' => '-17',
                'option_b' => '-37',
                'option_c' => '-13',
                'option_d' => '17',
                'option_e' => '7',
                'correct_answer' => 'a',
                'order' => 3
            ],
            [
                'topic' => 'Pangkat & Akar',
                'question_text' => 'Hasil dari 12² + √144 adalah...',
                'option_a' => '144',
                'option_b' => '156',
                'option_c' => '160',
                'option_d' => '164',
                'option_e' => '168',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'KPK & FPB',
                'question_text' => 'KPK dari 12, 18, dan 24 adalah...',
                'option_a' => '48',
                'option_b' => '60',
                'option_c' => '72',
                'option_d' => '84',
                'option_e' => '96',
                'correct_answer' => 'c',
                'order' => 5
            ],
            [
                'topic' => 'KPK & FPB',
                'question_text' => 'FPB dari 36, 48, dan 72 adalah...',
                'option_a' => '6',
                'option_b' => '8',
                'option_c' => '12',
                'option_d' => '18',
                'option_e' => '24',
                'correct_answer' => 'c',
                'order' => 6
            ],
            [
                'topic' => 'Bilangan Cacah',
                'question_text' => 'Ibu membeli 3 kg telur. Jika 1 kg berisi 16 butir, berapa jumlah seluruh telur Ibu?',
                'option_a' => '32',
                'option_b' => '40',
                'option_c' => '48',
                'option_d' => '54',
                'option_e' => '60',
                'correct_answer' => 'c',
                'order' => 7
            ],
            [
                'topic' => 'Operasi Hitung',
                'question_text' => 'Nilai dari 1.000 - 250 x 3 + 100 adalah...',
                'option_a' => '250',
                'option_b' => '350',
                'option_c' => '450',
                'option_d' => '550',
                'option_e' => '1.850',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'Pangkat & Akar',
                'question_text' => 'Akar pangkat tiga dari 2.744 adalah...',
                'option_a' => '12',
                'option_b' => '14',
                'option_c' => '16',
                'option_d' => '18',
                'option_e' => '24',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Operasi Hitung',
                'question_text' => 'Jika a = 5 dan b = 8, maka nilai dari 2a + 3b adalah...',
                'option_a' => '34',
                'option_b' => '30',
                'option_c' => '26',
                'option_d' => '40',
                'option_e' => '44',
                'correct_answer' => 'a',
                'order' => 10
            ],

            // Pecahan (11-20)
            [
                'topic' => 'Pecahan',
                'question_text' => 'Bentuk persen dari 4/5 adalah...',
                'option_a' => '40%',
                'option_b' => '60%',
                'option_c' => '75%',
                'option_d' => '80%',
                'option_e' => '85%',
                'correct_answer' => 'd',
                'order' => 11
            ],
            [
                'topic' => 'Pecahan',
                'question_text' => 'Hasil dari 1/2 + 3/4 adalah...',
                'option_a' => '1',
                'option_b' => '1 1/4',
                'option_c' => '1 1/2',
                'option_d' => '4/6',
                'option_e' => '1 3/4',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'Pecahan',
                'question_text' => 'Bentuk desimal dari 3/8 adalah...',
                'option_a' => '0,3',
                'option_b' => '0,375',
                'option_c' => '0,35',
                'option_d' => '0,125',
                'option_e' => '0,75',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'Pecahan',
                'question_text' => 'Hasil dari 0,5 x 0,25 adalah...',
                'option_a' => '0,125',
                'option_b' => '0,15',
                'option_c' => '1,25',
                'option_d' => '0,0125',
                'option_e' => '0,5',
                'correct_answer' => 'a',
                'order' => 14
            ],
            [
                'topic' => 'Pecahan',
                'question_text' => 'Urutan pecahan dari yang terkecil: 0,75; 1/2; 25%; 4/5 adalah...',
                'option_a' => '25%; 1/2; 0,75; 4/5',
                'option_b' => '1/2; 25%; 0,75; 4/5',
                'option_c' => '25%; 1/2; 4/5; 0,75',
                'option_d' => '4/5; 0,75; 1/2; 25%',
                'option_e' => '0,75; 4/5; 1/2; 25%',
                'correct_answer' => 'a',
                'order' => 15
            ],
            [
                'topic' => 'Perbandingan',
                'question_text' => 'Perbandingan uang Andi dan Budi adalah 2 : 3. Jika jumlah uang mereka Rp 50.000, berapa uang Andi?',
                'option_a' => 'Rp 10.000',
                'option_b' => 'Rp 20.000',
                'option_c' => 'Rp 30.000',
                'option_d' => 'Rp 40.000',
                'option_e' => 'Rp 15.000',
                'correct_answer' => 'b',
                'order' => 16
            ],
            [
                'topic' => 'Skala',
                'question_text' => 'Jarak pada peta 5 cm, skala 1 : 100.000. Jarak sebenarnya adalah...',
                'option_a' => '0,5 km',
                'option_b' => '5 km',
                'option_c' => '50 km',
                'option_d' => '500 km',
                'option_e' => '5.000 m',
                'correct_answer' => 'b',
                'order' => 17
            ],
            [
                'topic' => 'Pecahan',
                'question_text' => 'Hasil dari 2 1/2 + 1 3/4 adalah...',
                'option_a' => '3 1/4',
                'option_b' => '3 1/2',
                'option_c' => '4 1/4',
                'option_d' => '4 1/2',
                'option_e' => '3 3/4',
                'correct_answer' => 'c',
                'order' => 18
            ],
            [
                'topic' => 'Pecahan',
                'question_text' => '3/4 dari 120 adalah...',
                'option_a' => '60',
                'option_b' => '80',
                'option_c' => '90',
                'option_d' => '100',
                'option_e' => '75',
                'correct_answer' => 'c',
                'order' => 19
            ],
            [
                'topic' => 'Pecahan',
                'question_text' => 'Ibu memiliki 2,5 kg gula. Digunakan untuk kue 1 1/4 kg. Sisa gula Ibu adalah...',
                'option_a' => '1,25 kg',
                'option_b' => '1,5 kg',
                'option_c' => '0,75 kg',
                'option_d' => '1,75 kg',
                'option_e' => '2 kg',
                'correct_answer' => 'a',
                'order' => 20
            ],

            // Geometri & Pengukuran (21-40)
            [
                'topic' => 'Satuan Waktu',
                'question_text' => '2 jam + 30 menit + 120 detik = ... menit',
                'option_a' => '150',
                'option_b' => '152',
                'option_c' => '180',
                'option_d' => '122',
                'option_e' => '160',
                'correct_answer' => 'b',
                'order' => 21
            ],
            [
                'topic' => 'Satuan Panjang',
                'question_text' => '5 km + 250 m = ... m',
                'option_a' => '750',
                'option_b' => '2.550',
                'option_c' => '5.250',
                'option_d' => '5.025',
                'option_e' => '525',
                'correct_answer' => 'c',
                'order' => 22
            ],
            [
                'topic' => 'Satuan Berat',
                'question_text' => '2 ton + 5 kuintal = ... kg',
                'option_a' => '2.500',
                'option_b' => '700',
                'option_c' => '2.050',
                'option_d' => '2.500',
                'option_e' => '250',
                'correct_answer' => 'a',
                'order' => 23
            ],
            [
                'topic' => 'Bangun Datar',
                'question_text' => 'Luas persegi dengan sisi 15 cm adalah...',
                'option_a' => '60 cm²',
                'option_b' => '225 cm²',
                'option_c' => '125 cm²',
                'option_d' => '30 cm²',
                'option_e' => '150 cm²',
                'correct_answer' => 'b',
                'order' => 24
            ],
            [
                'topic' => 'Bangun Datar',
                'question_text' => 'Keliling lingkaran dengan jari-jari 7 cm adalah... (π = 22/7)',
                'option_a' => '22 cm',
                'option_b' => '44 cm',
                'option_c' => '154 cm',
                'option_d' => '88 cm',
                'option_e' => '14 cm',
                'correct_answer' => 'b',
                'order' => 25
            ],
            [
                'topic' => 'Bangun Ruang',
                'question_text' => 'Volume kubus dengan rusuk 10 cm adalah...',
                'option_a' => '100 cm³',
                'option_b' => '600 cm³',
                'option_c' => '1.000 cm³',
                'option_d' => '10.000 cm³',
                'option_e' => '400 cm³',
                'correct_answer' => 'c',
                'order' => 26
            ],
            [
                'topic' => 'Bangun Ruang',
                'question_text' => 'Luas permukaan balok dengan p=10, l=5, t=4 adalah...',
                'option_a' => '200',
                'option_b' => '220',
                'option_c' => '110',
                'option_d' => '190',
                'option_e' => '250',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'Bangun Datar',
                'question_text' => 'Sebuah segitiga memiliki alas 12 cm dan tinggi 10 cm. Luasnya adalah...',
                'option_a' => '120 cm²',
                'option_b' => '60 cm²',
                'option_c' => '22 cm²',
                'option_d' => '44 cm²',
                'option_e' => '100 cm²',
                'correct_answer' => 'b',
                'order' => 28
            ],
            [
                'topic' => 'Bangun Datar',
                'question_text' => 'Banyaknya simetri lipat pada persegi adalah...',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => 'tak terhingga',
                'correct_answer' => 'd',
                'order' => 29
            ],
            [
                'topic' => 'Bangun Datar',
                'question_text' => 'Sifat bangun datar: memiliki 4 sisi sama panjang, sudut berhadapan sama besar, tidak memiliki sudut siku-siku. Bangun tersebut adalah...',
                'option_a' => 'Persegi',
                'option_b' => 'Persegi panjang',
                'option_c' => 'Belah ketupat',
                'option_d' => 'Trapesium',
                'option_e' => 'Layang-layang',
                'correct_answer' => 'c',
                'order' => 30
            ],
            [
                'topic' => 'Satuan Luas',
                'question_text' => '2 hektar + 50 are = ... m²',
                'option_a' => '2.500',
                'option_b' => '25.000',
                'option_c' => '20.500',
                'option_d' => '2.050',
                'option_e' => '70.000',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Satuan Volume',
                'question_text' => '3 liter + 500 ml = ... cc',
                'option_a' => '3.500',
                'option_b' => '800',
                'option_c' => '3.050',
                'option_d' => '503',
                'option_e' => '35.000',
                'correct_answer' => 'a',
                'order' => 32
            ],
            [
                'topic' => 'Bangun Ruang',
                'question_text' => 'Banyaknya titik sudut pada prisma segitiga adalah...',
                'option_a' => '3',
                'option_b' => '4',
                'option_c' => '5',
                'option_d' => '6',
                'option_e' => '9',
                'correct_answer' => 'd',
                'order' => 33
            ],
            [
                'topic' => 'Bangun Ruang',
                'question_text' => 'Sebuah tabung memiliki jari-jari 10 cm dan tinggi 20 cm. Volumenya adalah... (π = 3,14)',
                'option_a' => '6.280 cm³',
                'option_b' => '3.140 cm³',
                'option_c' => '1.256 cm³',
                'option_d' => '628 cm³',
                'option_e' => '10.000 cm³',
                'correct_answer' => 'a',
                'order' => 34
            ],
            [
                'topic' => 'Kecepatan',
                'question_text' => 'Ayah mengendarai motor dengan kecepatan 60 km/jam selama 2 jam. Jarak yang ditempuh adalah...',
                'option_a' => '30 km',
                'option_b' => '120 km',
                'option_c' => '62 km',
                'option_d' => '180 km',
                'option_e' => '100 km',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Debit',
                'question_text' => 'Sebuah kran mengisi bak 60 liter dalam waktu 5 menit. Debit kran tersebut adalah...',
                'option_a' => '12 liter/menit',
                'option_b' => '300 liter/menit',
                'option_c' => '10 liter/menit',
                'option_d' => '15 liter/menit',
                'option_e' => '6 liter/menit',
                'correct_answer' => 'a',
                'order' => 36
            ],
            [
                'topic' => 'Bangun Datar',
                'question_text' => 'Keliling persegi panjang dengan panjang 12 cm dan lebar 8 cm adalah...',
                'option_a' => '20 cm',
                'option_b' => '40 cm',
                'option_c' => '96 cm',
                'option_d' => '24 cm',
                'option_e' => '100 cm',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Bangun Ruang',
                'question_text' => 'Banyaknya rusuk pada limas segiempat adalah...',
                'option_a' => '4',
                'option_b' => '5',
                'option_c' => '8',
                'option_d' => '12',
                'option_e' => '6',
                'correct_answer' => 'c',
                'order' => 38
            ],
            [
                'topic' => 'Sudut',
                'question_text' => 'Sudut yang besarnya antara 90° dan 180° disebut sudut...',
                'option_a' => 'Lancip',
                'option_b' => 'Siku-siku',
                'option_c' => 'Tumpul',
                'option_d' => 'Lurus',
                'option_e' => 'Refleks',
                'correct_answer' => 'c',
                'order' => 39
            ],
            [
                'topic' => 'Koordinat',
                'question_text' => 'Titik A berada pada koordinat (3, -2). Nilai absis titik A adalah...',
                'option_a' => '3',
                'option_b' => '-2',
                'option_c' => '1',
                'option_d' => '5',
                'option_e' => '0',
                'correct_answer' => 'a',
                'order' => 40
            ],

            // Statistika & Pengolahan Data (41-50)
            [
                'topic' => 'Statistika',
                'question_text' => 'Nilai ulangan Matematika: 7, 8, 6, 9, 7, 10, 8. Rata-rata nilainya adalah...',
                'option_a' => '7',
                'option_b' => '7,5',
                'option_c' => '8',
                'option_d' => '8,5',
                'option_e' => '7,8',
                'correct_answer' => 'e',
                'order' => 41
            ],
            [
                'topic' => 'Statistika',
                'question_text' => 'Data: 5, 7, 8, 6, 5, 9, 5, 8. Modus dari data tersebut adalah...',
                'option_a' => '5',
                'option_b' => '6',
                'option_c' => '7',
                'option_d' => '8',
                'option_e' => '9',
                'correct_answer' => 'a',
                'order' => 42
            ],
            [
                'topic' => 'Statistika',
                'question_text' => 'Median dari data: 4, 6, 8, 5, 7 adalah...',
                'option_a' => '4',
                'option_b' => '5',
                'option_c' => '6',
                'option_d' => '7',
                'option_e' => '8',
                'correct_answer' => 'c',
                'order' => 43
            ],
            [
                'topic' => 'Statistika',
                'question_text' => 'Nilai tertinggi 95, nilai terendah 60. Selisihnya adalah...',
                'option_a' => '25',
                'option_b' => '35',
                'option_c' => '45',
                'option_d' => '155',
                'option_e' => '30',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Pengolahan Data',
                'question_text' => 'Siswa kelas VI berjumlah 40 orang. 25% hobi sepak bola. Banyak siswa yang hobi sepak bola adalah...',
                'option_a' => '5 orang',
                'option_b' => '10 orang',
                'option_c' => '15 orang',
                'option_d' => '20 orang',
                'option_e' => '25 orang',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Statistika',
                'question_text' => 'Rata-rata 4 bilangan adalah 15. Jika satu bilangan lagi ditambah, rata-ratanya menjadi 16. Bilangan tersebut adalah...',
                'option_a' => '16',
                'option_b' => '18',
                'option_c' => '20',
                'option_d' => '22',
                'option_e' => '24',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Pengolahan Data',
                'question_text' => 'Dalam diagram lingkaran, hobi menari ditunjukkan oleh sudut 90°. Jika total siswa 120 orang, berapa yang hobi menari?',
                'option_a' => '30',
                'option_b' => '40',
                'option_c' => '60',
                'option_d' => '90',
                'option_e' => '20',
                'correct_answer' => 'a',
                'order' => 47
            ],
            [
                'topic' => 'Statistika',
                'question_text' => 'Median dari data: 12, 15, 11, 19, 17, 13 adalah...',
                'option_a' => '13',
                'option_b' => '14',
                'option_c' => '14,5',
                'option_d' => '15',
                'option_e' => '16',
                'correct_answer' => 'b',
                'order' => 48
            ],
            [
                'topic' => 'Pengolahan Data',
                'question_text' => 'Banyaknya data yang sering muncul disebut...',
                'option_a' => 'Mean',
                'option_b' => 'Median',
                'option_c' => 'Modus',
                'option_d' => 'Range',
                'option_e' => 'Frequensi',
                'correct_answer' => 'c',
                'order' => 49
            ],
            [
                'topic' => 'Statistika',
                'question_text' => 'Hasil panen padi (ton): 15, 18, 12, 20, 15. Total panen adalah...',
                'option_a' => '70 ton',
                'option_b' => '80 ton',
                'option_c' => '85 ton',
                'option_d' => '90 ton',
                'option_e' => '75 ton',
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
