<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmpTryout;
use App\Models\Question;

class SmpMathIpaQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmpTryout::where('name', 'Tryout Matematika & IPA SMP')->first();
        
        if (!$tryout) {
            $tryout = SmpTryout::create([
                'name' => 'Tryout Matematika & IPA SMP',
                'subject' => 'Math & Science',
                'question_count' => 50,
                'duration_minutes' => 90,
                'price' => 15000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // MATEMATIKA (1-25)
            [
                'topic' => 'Bilangan',
                'question_text' => 'Hasil dari -4 + 8 : (-2) x 2 + 5 adalah...',
                'option_a' => '-7',
                'option_b' => '-3',
                'option_c' => '5',
                'option_d' => '9',
                'option_e' => '1',
                'correct_answer' => 'a',
                'order' => 1
            ],
            [
                'topic' => 'Himpunan',
                'question_text' => 'Diketahui S = {bilangan asli kurang dari 10} dan A = {2, 4, 6, 8}. Komplemen dari A adalah...',
                'option_a' => '{1, 3, 5, 7, 9}',
                'option_b' => '{0, 1, 3, 5, 7, 9}',
                'option_c' => '{1, 3, 5, 7}',
                'option_d' => '{2, 4, 6, 8, 10}',
                'option_e' => '{1, 2, 3, 4, 5}',
                'correct_answer' => 'a',
                'order' => 2
            ],
            [
                'topic' => 'Aljabar',
                'question_text' => 'Bentuk sederhana dari 3(2x - 4y) - 5(x - 3y) adalah...',
                'option_a' => 'x - 3y',
                'option_b' => 'x + 3y',
                'option_c' => '11x - 27y',
                'option_d' => '11x + 3y',
                'option_e' => 'x - 7y',
                'correct_answer' => 'b',
                'order' => 3
            ],
            [
                'topic' => 'Persamaan Linear',
                'question_text' => 'Nilai x yang memenuhi persamaan 3x - 5 = 7x + 11 adalah...',
                'option_a' => '-4',
                'option_b' => '-3',
                'option_c' => '4',
                'option_d' => '3',
                'option_e' => '2',
                'correct_answer' => 'a',
                'order' => 4
            ],
            [
                'topic' => 'Pola Bilangan',
                'question_text' => 'Suku ke-20 dari barisan bilangan 3, 7, 11, 15, ... adalah...',
                'option_a' => '75',
                'option_b' => '79',
                'option_c' => '83',
                'option_d' => '87',
                'option_e' => '71',
                'correct_answer' => 'b',
                'order' => 5
            ],
            [
                'topic' => 'Aritmetika Sosial',
                'question_text' => 'Andi membeli baju seharga Rp 200.000 dan mendapat diskon 15%. Berapa Andi harus membayar?',
                'option_a' => 'Rp 170.000',
                'option_b' => 'Rp 180.000',
                'option_c' => 'Rp 185.000',
                'option_d' => 'Rp 190.000',
                'option_e' => 'Rp 175.000',
                'correct_answer' => 'a',
                'order' => 6
            ],
            [
                'topic' => 'Relasi & Fungsi',
                'question_text' => 'Diketahui f(x) = 3x - 5. Nilai f(4) adalah...',
                'option_a' => '7',
                'option_b' => '12',
                'option_c' => '17',
                'option_d' => ' -7',
                'option_e' => '1',
                'correct_answer' => 'a',
                'order' => 7
            ],
            [
                'topic' => 'Persamaan Garis',
                'question_text' => 'Gradien garis yang melalui titik (2, 3) dan (4, 7) adalah...',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => '0,5',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'SPLDV',
                'question_text' => 'Himpunan penyelesaian dari x + y = 5 dan x - y = 1 adalah...',
                'option_a' => '{(3, 2)}',
                'option_b' => '{(2, 3)}',
                'option_c' => '{(4, 1)}',
                'option_d' => '{(1, 4)}',
                'option_e' => '{(3, 1)}',
                'correct_answer' => 'a',
                'order' => 9
            ],
            [
                'topic' => 'Teorema Pythagoras',
                'question_text' => 'Sebuah segitiga siku-siku memiliki alas 6 cm dan tinggi 8 cm. Panjang sisi miringnya adalah...',
                'option_a' => '10 cm',
                'option_b' => '12 cm',
                'option_c' => '14 cm',
                'option_d' => '15 cm',
                'option_e' => '9 cm',
                'correct_answer' => 'a',
                'order' => 10
            ],
            [
                'topic' => 'Lingkaran',
                'question_text' => 'Luas lingkaran dengan diameter 14 cm adalah... (π = 22/7)',
                'option_a' => '154 cm²',
                'option_b' => '616 cm²',
                'option_c' => '44 cm²',
                'option_d' => '88 cm²',
                'option_e' => '77 cm²',
                'correct_answer' => 'a',
                'order' => 11
            ],
            [
                'topic' => 'Bangun Ruang',
                'question_text' => 'Volume balok dengan ukuran 10 cm x 8 cm x 5 cm adalah...',
                'option_a' => '400 cm³',
                'option_b' => '80 cm³',
                'option_c' => '100 cm³',
                'option_d' => '40 cm³',
                'option_e' => '200 cm³',
                'correct_answer' => 'a',
                'order' => 12
            ],
            [
                'topic' => 'Statistika',
                'question_text' => 'Rata-rata dari data 7, 8, 6, 9, 10 adalah...',
                'option_a' => '8',
                'option_b' => '7',
                'option_c' => '9',
                'option_d' => '8,5',
                'option_e' => '7,5',
                'correct_answer' => 'a',
                'order' => 13
            ],
            [
                'topic' => 'Peluang',
                'question_text' => 'Dua buah koin dilempar bersamaan. Peluang munculnya dua gambar adalah...',
                'option_a' => '1/2',
                'option_b' => '1/4',
                'option_c' => '3/4',
                'option_d' => '1/8',
                'option_e' => '1',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'Perbandingan',
                'question_text' => 'Jika 3 liter bensin dapat menempuh 45 km, maka 5 liter bensin dapat menempuh...',
                'option_a' => '60 km',
                'option_b' => '75 km',
                'option_c' => '90 km',
                'option_d' => '100 km',
                'option_e' => '65 km',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'Kesebangunan',
                'question_text' => 'Dua segitiga dikatakan sebangun jika...',
                'option_a' => 'Sisi yang bersesuaian sama panjang',
                'option_b' => 'Sudut yang bersesuaian sama besar',
                'option_c' => 'Luasnya sama',
                'option_d' => 'Kelilingnya sama',
                'option_e' => 'Warnanya sama',
                'correct_answer' => 'b',
                'order' => 16
            ],
            [
                'topic' => 'Bilangan Berpangkat',
                'question_text' => 'Hasil dari 2³ x 2² adalah...',
                'option_a' => '16',
                'option_b' => '32',
                'option_c' => '64',
                'option_d' => '128',
                'option_e' => '8',
                'correct_answer' => 'b',
                'order' => 17
            ],
            [
                'topic' => 'Bentuk Akar',
                'question_text' => 'Bentuk sederhana dari √72 adalah...',
                'option_a' => '6√2',
                'option_b' => '3√2',
                'option_c' => '4√3',
                'option_d' => '2√6',
                'option_e' => '12√2',
                'correct_answer' => 'a',
                'order' => 18
            ],
            [
                'topic' => 'Persamaan Kuadrat',
                'question_text' => 'Akar-akar dari x² - 5x + 6 = 0 adalah...',
                'option_a' => '2 dan 3',
                'option_b' => '-2 dan -3',
                'option_c' => '1 dan 6',
                'option_d' => '-1 dan -6',
                'option_e' => '2 dan -3',
                'correct_answer' => 'a',
                'order' => 19
            ],
            [
                'topic' => 'Fungsi Kuadrat',
                'question_text' => 'Titik puncak dari y = x² - 4x + 3 adalah...',
                'option_a' => '(2, -1)',
                'option_b' => '(-2, 1)',
                'option_c' => '(2, 1)',
                'option_d' => '(4, 3)',
                'option_e' => '(0, 3)',
                'correct_answer' => 'a',
                'order' => 20
            ],
            [
                'topic' => 'Transformasi',
                'question_text' => 'Titik A(3, 5) dicerminkan terhadap sumbu X menghasilkan bayangan...',
                'option_a' => '(3, -5)',
                'option_b' => '(-3, 5)',
                'option_c' => '(-3, -5)',
                'option_d' => '(5, 3)',
                'option_e' => '(3, 5)',
                'correct_answer' => 'a',
                'order' => 21
            ],
            [
                'topic' => 'Kombinatorika',
                'question_text' => 'Banyaknya cara menyusun angka 1, 2, 3 tanpa pengulangan adalah...',
                'option_a' => '3',
                'option_b' => '6',
                'option_c' => '9',
                'option_d' => '12',
                'option_e' => '5',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'Logika Matematika',
                'question_text' => 'Ingkaran dari "Semua siswa rajin" adalah...',
                'option_a' => 'Ada siswa tidak rajin',
                'option_b' => 'Semua siswa tidak rajin',
                'option_c' => 'Beberapa siswa rajin',
                'option_d' => 'Ada siswa rajin',
                'option_e' => 'Semua guru rajin',
                'correct_answer' => 'a',
                'order' => 23
            ],
            [
                'topic' => 'Matriks',
                'question_text' => 'Jika A = [1 2; 3 4], determinan A adalah...',
                'option_a' => '-2',
                'option_b' => '2',
                'option_c' => '10',
                'option_d' => '14',
                'option_e' => '0',
                'correct_answer' => 'a',
                'order' => 24
            ],
            [
                'topic' => 'Trigonometri Dasar',
                'question_text' => 'Pada segitiga siku-siku, sin 30° nilainya adalah...',
                'option_a' => '0',
                'option_b' => '1/2',
                'option_c' => '1/2 √2',
                'option_d' => '1/2 √3',
                'option_e' => '1',
                'correct_answer' => 'b',
                'order' => 25
            ],

            // IPA (26-50)
            [
                'topic' => 'Besaran & Satuan',
                'question_text' => 'Satuan SI untuk suhu adalah...',
                'option_a' => 'Celsius',
                'option_b' => 'Kelvin',
                'option_c' => 'Fahrenheit',
                'option_d' => 'Reamur',
                'option_e' => 'Joule',
                'correct_answer' => 'b',
                'order' => 26
            ],
            [
                'topic' => 'Wujud Zat',
                'question_text' => 'Proses perubahan wujud dari padat langsung menjadi gas disebut...',
                'option_a' => 'Menyublim',
                'option_b' => 'Mengkristal',
                'option_c' => 'Menguap',
                'option_d' => 'Mencair',
                'option_e' => 'Mengembun',
                'correct_answer' => 'a',
                'order' => 27
            ],
            [
                'topic' => 'Unsur, Senyawa, Campuran',
                'question_text' => 'Air laut merupakan contoh dari...',
                'option_a' => 'Unsur',
                'option_b' => 'Senyawa',
                'option_c' => 'Campuran homogen',
                'option_d' => 'Campuran heterogen',
                'option_e' => 'Molekul',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'Gerak Lurus',
                'question_text' => 'Sebuah benda bergerak dengan kecepatan tetap 10 m/s selama 5 detik. Jarak yang ditempuh adalah...',
                'option_a' => '2 m',
                'option_b' => '50 m',
                'option_c' => '15 m',
                'option_d' => '25 m',
                'option_e' => '100 m',
                'correct_answer' => 'b',
                'order' => 29
            ],
            [
                'topic' => 'Gaya & Hukum Newton',
                'question_text' => 'Hukum Newton yang menyatakan aksi = -reaksi adalah hukum ke...',
                'option_a' => 'I',
                'option_b' => 'II',
                'option_c' => 'III',
                'option_d' => 'IV',
                'option_e' => 'Gravitasi',
                'correct_answer' => 'c',
                'order' => 30
            ],
            [
                'topic' => 'Usaha & Energi',
                'question_text' => 'Energi yang dimiliki benda karena kedudukannya (ketinggian) disebut...',
                'option_a' => 'Energi Kinetik',
                'option_b' => 'Energi Potensial',
                'option_c' => 'Energi Kimia',
                'option_d' => 'Energi Kalor',
                'option_e' => 'Energi Mekanik',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Pesawat Sederhana',
                'question_text' => 'Pinset merupakan contoh tuas jenis ke...',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => 'Ganda',
                'correct_answer' => 'c',
                'order' => 32
            ],
            [
                'topic' => 'Tekanan',
                'question_text' => 'Satuan tekanan dalam SI adalah Pascal, yang setara dengan...',
                'option_a' => 'N/m',
                'option_b' => 'N/m²',
                'option_c' => 'N.m',
                'option_d' => 'kg.m/s',
                'option_e' => 'Joule',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'Getaran & Gelombang',
                'question_text' => 'Banyaknya getaran dalam satu detik disebut...',
                'option_a' => 'Periode',
                'option_b' => 'Frekuensi',
                'option_c' => 'Amplitudo',
                'option_d' => 'Panjang gelombang',
                'option_e' => 'Cepat rambat',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'Optik',
                'question_text' => 'Cermin yang digunakan pada spion kendaraan adalah cermin...',
                'option_a' => 'Datar',
                'option_b' => 'Cekung',
                'option_c' => 'Cembung',
                'option_d' => 'Rangkap',
                'option_e' => 'Lensa',
                'correct_answer' => 'c',
                'order' => 35
            ],
            [
                'topic' => 'Listrik Statis',
                'question_text' => 'Partikel atom yang bermuatan negatif adalah...',
                'option_a' => 'Proton',
                'option_b' => 'Neutron',
                'option_c' => 'Elektron',
                'option_d' => 'Positron',
                'option_e' => 'Nukleus',
                'correct_answer' => 'c',
                'order' => 36
            ],
            [
                'topic' => 'Listrik Dinamis',
                'question_text' => 'Jika hambatan 10 Ohm dihubungkan dengan tegangan 20 Volt, kuat arusnya adalah...',
                'option_a' => '2 Ampere',
                'option_b' => '200 Ampere',
                'option_c' => '0,5 Ampere',
                'option_d' => '30 Ampere',
                'option_e' => '10 Ampere',
                'correct_answer' => 'a',
                'order' => 37
            ],
            [
                'topic' => 'Kemagnetan',
                'question_text' => 'Daerah di sekitar magnet yang masih dipengaruhi gaya magnet disebut...',
                'option_a' => 'Kutub magnet',
                'option_b' => 'Garis gaya magnet',
                'option_c' => 'Medan magnet',
                'option_d' => 'Induksi magnet',
                'option_e' => 'Solenoida',
                'correct_answer' => 'c',
                'order' => 38
            ],
            [
                'topic' => 'Tata Surya',
                'question_text' => 'Planet yang dikenal sebagai "Kembaran Bumi" adalah...',
                'option_a' => 'Mars',
                'option_b' => 'Venus',
                'option_c' => 'Merkurius',
                'option_d' => 'Yupiter',
                'option_e' => 'Saturnus',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Biologi - Sel',
                'question_text' => 'Bagian sel yang berfungsi sebagai pengatur seluruh kegiatan sel adalah...',
                'option_a' => 'Sitoplasma',
                'option_b' => 'Membran sel',
                'option_c' => 'Nukleus (Inti sel)',
                'option_d' => 'Mitokondria',
                'option_e' => 'Ribosom',
                'correct_answer' => 'c',
                'order' => 40
            ],
            [
                'topic' => 'Biologi - Organisasi Kehidupan',
                'question_text' => 'Kumpulan beberapa jaringan yang bekerja sama menjalankan fungsi tertentu disebut...',
                'option_a' => 'Sel',
                'option_b' => 'Organ',
                'option_c' => 'Sistem organ',
                'option_d' => 'Organisme',
                'option_e' => 'Ekosistem',
                'correct_answer' => 'b',
                'order' => 41
            ],
            [
                'topic' => 'Biologi - Ekosistem',
                'question_text' => 'Komponen abiotik dalam ekosistem meliputi...',
                'option_a' => 'Tumbuhan dan hewan',
                'option_b' => 'Air, udara, dan tanah',
                'option_c' => 'Bakteri dan jamur',
                'option_d' => 'Manusia dan mikroba',
                'option_e' => 'Produsen dan konsumen',
                'correct_answer' => 'b',
                'order' => 42
            ],
            [
                'topic' => 'Biologi - Pencemaran',
                'question_text' => 'Pemanasan global disebabkan oleh meningkatnya gas...',
                'option_a' => 'Oksigen',
                'option_b' => 'Nitrogen',
                'option_c' => 'Karbon dioksida',
                'option_d' => 'Hidrogen',
                'option_e' => 'Helium',
                'correct_answer' => 'c',
                'order' => 43
            ],
            [
                'topic' => 'Biologi - Gerak',
                'question_text' => 'Gerak tumbuhan yang dipengaruhi oleh arah datangnya cahaya disebut...',
                'option_a' => 'Fotonasti',
                'option_b' => 'Fototropisme',
                'option_c' => 'Hidrotropisme',
                'option_d' => 'Seismonasti',
                'option_e' => 'Niktinasti',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Biologi - Pencernaan',
                'question_text' => 'Enzim pepsin di lambung berfungsi untuk mengubah...',
                'option_a' => 'Amilum menjadi gula',
                'option_b' => 'Lemak menjadi asam lemak',
                'option_c' => 'Protein menjadi pepton',
                'option_d' => 'Susu menjadi kasein',
                'option_e' => 'Glukosa menjadi energi',
                'correct_answer' => 'c',
                'order' => 45
            ],
            [
                'topic' => 'Biologi - Pernapasan',
                'question_text' => 'Pertukaran gas O2 dan CO2 terjadi di bagian paru-paru yang disebut...',
                'option_a' => 'Bronkus',
                'option_b' => 'Trakea',
                'option_c' => 'Alveolus',
                'option_d' => 'Pleura',
                'option_e' => 'Laring',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Biologi - Ekskresi',
                'question_text' => 'Organ ekskresi yang mengeluarkan zat sisa berupa urea, air, dan garam melalui urine adalah...',
                'option_a' => 'Hati',
                'option_b' => 'Paru-paru',
                'option_c' => 'Kulit',
                'option_d' => 'Ginjal',
                'option_e' => 'Jantung',
                'correct_answer' => 'd',
                'order' => 47
            ],
            [
                'topic' => 'Biologi - Reproduksi',
                'question_text' => 'Proses peleburan sel sperma dan sel telur disebut...',
                'option_a' => 'Menstruasi',
                'option_b' => 'Ovulasi',
                'option_c' => 'Fertilisasi',
                'option_d' => 'Implantasi',
                'option_e' => 'Kopulasi',
                'correct_answer' => 'c',
                'order' => 48
            ],
            [
                'topic' => 'Biologi - Pewarisan Sifat',
                'question_text' => 'Bapak genetika dunia adalah...',
                'option_a' => 'Charles Darwin',
                'option_b' => 'Gregor Mendel',
                'option_c' => 'Louis Pasteur',
                'option_d' => 'Robert Hooke',
                'option_e' => 'Thomas Edison',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Biologi - Bioteknologi',
                'question_text' => 'Mikroorganisme yang digunakan dalam pembuatan tempe adalah...',
                'option_a' => 'Saccharomyces cerevisiae',
                'option_b' => 'Rhizopus oryzae',
                'option_c' => 'Lactobacillus bulgaricus',
                'option_d' => 'Acetobacter aceti',
                'option_e' => 'Aspergillus niger',
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
