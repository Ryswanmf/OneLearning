<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmaTryout;
use App\Models\Question;

class SmaPhysicsQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmaTryout::where('name', 'Simulasi Fisika Dasar SMA')->first();
        
        if (!$tryout) {
            $tryout = SmaTryout::create([
                'name' => 'Simulasi Fisika Dasar SMA',
                'subject' => 'Fisika',
                'question_count' => 50,
                'duration_minutes' => 90,
                'price' => 0,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // BESARAN, SATUAN, VEKTOR (1-5)
            [
                'topic' => 'Besaran & Satuan',
                'question_text' => 'Dimensi dari gaya adalah...',
                'option_a' => '[M][L][T]^-1',
                'option_b' => '[M][L][T]^-2',
                'option_c' => '[M][L]^-1[T]^-2',
                'option_d' => '[M][L]^2[T]^-2',
                'option_e' => '[M][L]^-2[T]^-2',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Vektor',
                'question_text' => 'Dua vektor masing-masing 3 N dan 4 N tegak lurus satu sama lain. Resultan kedua vektor adalah...',
                'option_a' => '1 N',
                'option_b' => '5 N',
                'option_c' => '7 N',
                'option_d' => '12 N',
                'option_e' => '25 N',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Pengukuran',
                'question_text' => 'Alat ukur yang memiliki ketelitian 0,01 mm adalah...',
                'option_a' => 'Mistar',
                'option_b' => 'Jangka Sorong',
                'option_c' => 'Mikrometer Sekrup',
                'option_d' => 'Meteran Gulung',
                'option_e' => 'Neraca Ohaus',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Vektor',
                'question_text' => 'Komponen sumbu X dari vektor 10 N yang membentuk sudut 60 derajat terhadap sumbu X adalah...',
                'option_a' => '5 N',
                'option_b' => '5√2 N',
                'option_c' => '5√3 N',
                'option_d' => '10 N',
                'option_e' => '10√3 N',
                'correct_answer' => 'a',
                'order' => 4
            ],
            [
                'topic' => 'Besaran & Satuan',
                'question_text' => 'Satuan SI untuk intensitas cahaya adalah...',
                'option_a' => 'Watt',
                'option_b' => 'Lux',
                'option_c' => 'Candela',
                'option_d' => 'Mole',
                'option_e' => 'Ampere',
                'correct_answer' => 'c',
                'order' => 5
            ],

            // KINEMATIKA (6-15)
            [
                'topic' => 'Gerak Lurus',
                'question_text' => 'Sebuah mobil bergerak dengan kecepatan tetap 72 km/jam. Jarak yang ditempuh dalam 10 detik adalah...',
                'option_a' => '72 m',
                'option_b' => '200 m',
                'option_c' => '720 m',
                'option_d' => '20 m',
                'option_e' => '360 m',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'GLBB',
                'question_text' => 'Benda jatuh bebas dari ketinggian 20 m. Jika g = 10 m/s², waktu yang diperlukan untuk sampai di tanah adalah...',
                'option_a' => '1 detik',
                'option_b' => '2 detik',
                'option_c' => '4 detik',
                'option_d' => '√2 detik',
                'option_e' => '10 detik',
                'correct_answer' => 'b',
                'order' => 7
            ],
            [
                'topic' => 'Gerak Melingkar',
                'question_text' => 'Sebuah roda berputar 120 rpm. Kecepatan sudut roda tersebut adalah...',
                'option_a' => '2π rad/s',
                'option_b' => '4π rad/s',
                'option_c' => '6π rad/s',
                'option_d' => '120π rad/s',
                'option_e' => 'π rad/s',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'Gerak Parabola',
                'question_text' => 'Pada gerak parabola, benda mencapai tinggi maksimum saat kecepatan arah vertikalnya (Vy) bernilai...',
                'option_a' => 'Maksimum',
                'option_b' => 'Minimum',
                'option_c' => 'Nol',
                'option_d' => 'Sama dengan Vx',
                'option_e' => 'Tetap',
                'correct_answer' => 'c',
                'order' => 9
            ],
            [
                'topic' => 'GLBB',
                'question_text' => 'Grafik v-t pada Gerak Lurus Berubah Beraturan (GLBB) berbentuk...',
                'option_a' => 'Garis lurus mendatar',
                'option_b' => 'Garis lurus miring',
                'option_c' => 'Parabola',
                'option_d' => 'Lingkaran',
                'option_e' => 'Hiperbola',
                'correct_answer' => 'b',
                'order' => 10
            ],
            [
                'topic' => 'Gerak Vertikal',
                'question_text' => 'Bola dilempar ke atas dengan kecepatan 20 m/s. Tinggi maksimum yang dicapai (g=10 m/s²) adalah...',
                'option_a' => '10 m',
                'option_b' => '20 m',
                'option_c' => '40 m',
                'option_d' => '5 m',
                'option_e' => '15 m',
                'correct_answer' => 'b',
                'order' => 11
            ],
            [
                'topic' => 'Percepatan Sentripetal',
                'question_text' => 'Gaya yang arahnya selalu menuju pusat lingkaran pada gerak melingkar disebut...',
                'option_a' => 'Gaya Gesek',
                'option_b' => 'Gaya Berat',
                'option_c' => 'Gaya Sentripetal',
                'option_d' => 'Gaya Sentrifugal',
                'option_e' => 'Gaya Normal',
                'correct_answer' => 'c',
                'order' => 12
            ],
            [
                'topic' => 'Gerak Lurus',
                'question_text' => 'Perpindahan adalah besaran...',
                'option_a' => 'Skalar',
                'option_b' => 'Vektor',
                'option_c' => 'Pokok',
                'option_d' => 'Turunan skalar',
                'option_e' => 'Tanpa dimensi',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'Kecepatan Rata-rata',
                'question_text' => 'Budi berjalan 4 m ke Timur lalu 3 m ke Utara. Jarak dan perpindahan Budi adalah...',
                'option_a' => '7 m dan 7 m',
                'option_b' => '7 m dan 5 m',
                'option_c' => '5 m dan 7 m',
                'option_d' => '1 m dan 5 m',
                'option_e' => '7 m dan 1 m',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'GLB',
                'question_text' => 'Dua benda A dan B terpisah 100 m. A bergerak ke kanan 4 m/s dan B ke kiri 6 m/s. Kapan mereka bertemu?',
                'option_a' => '10 s',
                'option_b' => '20 s',
                'option_c' => '25 s',
                'option_d' => '50 s',
                'option_e' => '100 s',
                'correct_answer' => 'a',
                'order' => 15
            ],

            // DINAMIKA, USAHA, ENERGI (16-25)
            [
                'topic' => 'Hukum Newton',
                'question_text' => 'Jika resultan gaya pada benda nol, maka benda yang diam akan tetap diam. Ini adalah bunyi Hukum...',
                'option_a' => 'Newton I',
                'option_b' => 'Newton II',
                'option_c' => 'Newton III',
                'option_d' => 'Kepler I',
                'option_e' => 'Pascal',
                'correct_answer' => 'a',
                'order' => 16
            ],
            [
                'topic' => 'Hukum Newton II',
                'question_text' => 'Benda bermassa 2 kg didorong dengan gaya 10 N. Percepatan benda adalah...',
                'option_a' => '5 m/s²',
                'option_b' => '20 m/s²',
                'option_c' => '0,2 m/s²',
                'option_d' => '12 m/s²',
                'option_e' => '8 m/s²',
                'correct_answer' => 'a',
                'order' => 17
            ],
            [
                'topic' => 'Usaha',
                'question_text' => 'Usaha yang dilakukan gaya 20 N untuk memindahkan benda sejauh 5 m searah gaya adalah...',
                'option_a' => '4 Joule',
                'option_b' => '100 Joule',
                'option_c' => '25 Joule',
                'option_d' => '15 Joule',
                'option_e' => '100 Watt',
                'correct_answer' => 'b',
                'order' => 18
            ],
            [
                'topic' => 'Energi Kinetik',
                'question_text' => 'Benda 1 kg bergerak dengan kecepatan 4 m/s. Energi kinetiknya adalah...',
                'option_a' => '2 Joule',
                'option_b' => '4 Joule',
                'option_c' => '8 Joule',
                'option_d' => '16 Joule',
                'option_e' => '1 Joule',
                'correct_answer' => 'c',
                'order' => 19
            ],
            [
                'topic' => 'Momentum',
                'question_text' => 'Besaran yang merupakan hasil kali massa dan kecepatan disebut...',
                'option_a' => 'Gaya',
                'option_b' => 'Usaha',
                'option_c' => 'Energi',
                'option_d' => 'Momentum',
                'option_e' => 'Impuls',
                'correct_answer' => 'd',
                'order' => 20
            ],
            [
                'topic' => 'Hukum Kekekalan Energi',
                'question_text' => 'Energi mekanik adalah jumlah dari...',
                'option_a' => 'Energi potensial dan energi kinetik',
                'option_b' => 'Energi panas dan energi bunyi',
                'option_c' => 'Energi listrik dan energi magnet',
                'option_d' => 'Usaha dan daya',
                'option_e' => 'Momentum dan impuls',
                'correct_answer' => 'a',
                'order' => 21
            ],
            [
                'topic' => 'Daya',
                'question_text' => 'Daya 100 Watt selama 1 menit menghasilkan usaha sebesar...',
                'option_a' => '100 Joule',
                'option_b' => '600 Joule',
                'option_c' => '6000 Joule',
                'option_d' => '1,6 Joule',
                'option_e' => '60 Joule',
                'correct_answer' => 'c',
                'order' => 22
            ],
            [
                'topic' => 'Gaya Gesek',
                'question_text' => 'Gaya gesek yang bekerja saat benda tepat akan bergerak disebut gaya gesek...',
                'option_a' => 'Kinetis',
                'option_b' => 'Statis maksimum',
                'option_c' => 'Normal',
                'option_d' => 'Sentripetal',
                'option_e' => 'Luncur',
                'correct_answer' => 'b',
                'order' => 23
            ],
            [
                'topic' => 'Tumbukan',
                'question_text' => 'Pada tumbukan lenting sempurna, berlaku hukum kekekalan...',
                'option_a' => 'Momentum saja',
                'option_b' => 'Energi kinetik saja',
                'option_c' => 'Momentum dan energi kinetik',
                'option_d' => 'Massa saja',
                'option_e' => 'Gaya saja',
                'correct_answer' => 'c',
                'order' => 24
            ],
            [
                'topic' => 'Impuls',
                'question_text' => 'Perubahan momentum sebuah benda sama dengan...',
                'option_a' => 'Usaha',
                'option_b' => 'Daya',
                'option_c' => 'Impuls',
                'option_d' => 'Energi',
                'option_e' => 'Gaya',
                'correct_answer' => 'c',
                'order' => 25
            ],

            // FLUIDA & TERMODINAMIKA (26-35)
            [
                'topic' => 'Fluida Statis',
                'question_text' => 'Tekanan hidrostatis dipengaruhi oleh faktor berikut, kecuali...',
                'option_a' => 'Massa jenis zat cair',
                'option_b' => 'Percepatan gravitasi',
                'option_c' => 'Kedalaman',
                'option_d' => 'Luas penampang wadah',
                'option_e' => 'Tekanan udara luar',
                'correct_answer' => 'd',
                'order' => 26
            ],
            [
                'topic' => 'Hukum Archimedes',
                'question_text' => 'Benda terapung dalam air jika...',
                'option_a' => 'Rho benda > Rho air',
                'option_b' => 'Rho benda = Rho air',
                'option_c' => 'Rho benda < Rho air',
                'option_d' => 'Berat benda > Gaya angkat',
                'option_e' => 'Volume benda < Volume air',
                'correct_answer' => 'c',
                'order' => 27
            ],
            [
                'topic' => 'Fluida Dinamis',
                'question_text' => 'Debit air yang mengalir dalam pipa 2 m/s dengan luas penampang 0,1 m² adalah...',
                'option_a' => '0,2 m³/s',
                'option_b' => '20 m³/s',
                'option_c' => '0,05 m³/s',
                'option_d' => '1,9 m³/s',
                'option_e' => '2,1 m³/s',
                'correct_answer' => 'a',
                'order' => 28
            ],
            [
                'topic' => 'Suhu & Kalor',
                'question_text' => 'Suhu 40 derajat Celsius setara dengan ... derajat Fahrenheit.',
                'option_a' => '72',
                'option_b' => '104',
                'option_c' => '100',
                'option_d' => '120',
                'option_e' => '80',
                'correct_answer' => 'b',
                'order' => 29
            ],
            [
                'topic' => 'Kalor',
                'question_text' => 'Banyaknya kalor yang diperlukan untuk menaikkan suhu 1 kg zat sebesar 1 K disebut...',
                'option_a' => 'Kalor jenis',
                'option_b' => 'Kapasitas kalor',
                'option_c' => 'Kalor laten',
                'option_d' => 'Kalor lebur',
                'option_e' => 'Konduktivitas',
                'correct_answer' => 'a',
                'order' => 30
            ],
            [
                'topic' => 'Termodinamika',
                'question_text' => 'Hukum I Termodinamika menyatakan kekekalan...',
                'option_a' => 'Massa',
                'option_b' => 'Energi',
                'option_c' => 'Entropi',
                'option_d' => 'Suhu',
                'option_e' => 'Tekanan',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Gas Ideal',
                'question_text' => 'Pada suhu tetap, tekanan gas berbanding terbalik dengan volumenya. Ini adalah hukum...',
                'option_a' => 'Boyle',
                'option_b' => 'Charles',
                'option_c' => 'Gay-Lussac',
                'option_d' => 'Avogadro',
                'option_e' => 'Newton',
                'correct_answer' => 'a',
                'order' => 32
            ],
            [
                'topic' => 'Asas Black',
                'question_text' => 'Bunyi Asas Black adalah Q lepas = ...',
                'option_a' => 'Q terima',
                'option_b' => 'W (usaha)',
                'option_c' => 'Delta U',
                'option_d' => 'Q buang',
                'option_e' => 'P (daya)',
                'correct_answer' => 'a',
                'order' => 33
            ],
            [
                'topic' => 'Perpindahan Kalor',
                'question_text' => 'Perpindahan kalor yang disertai perpindahan partikel zatnya disebut...',
                'option_a' => 'Konduksi',
                'option_b' => 'Konveksi',
                'option_c' => 'Radiasi',
                'option_d' => 'Emisi',
                'option_e' => 'Absorpsi',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'Mesin Carnot',
                'question_text' => 'Efisiensi mesin kalor tidak mungkin mencapai 100% karena melanggar Hukum...',
                'option_a' => 'Termodinamika 0',
                'option_b' => 'Termodinamika I',
                'option_c' => 'Termodinamika II',
                'option_d' => 'Termodinamika III',
                'option_e' => 'Newton',
                'correct_answer' => 'c',
                'order' => 35
            ],

            // OPTIK, LISTRIK, MAGNET (36-45)
            [
                'topic' => 'Cermin & Lensa',
                'question_text' => 'Sebuah benda berada 10 cm di depan cermin cekung fokus 6 cm. Jarak bayangan adalah...',
                'option_a' => '15 cm',
                'option_b' => '12 cm',
                'option_c' => '30 cm',
                'option_d' => '10 cm',
                'option_e' => '20 cm',
                'correct_answer' => 'a',
                'order' => 36
            ],
            [
                'topic' => 'Alat Optik',
                'question_text' => 'Cacat mata yang tidak dapat melihat benda jauh dengan jelas disebut...',
                'option_a' => 'Miopi',
                'option_b' => 'Hipermetropi',
                'option_c' => 'Presbiopi',
                'option_d' => 'Astigmatisma',
                'option_e' => 'Katarak',
                'correct_answer' => 'a',
                'order' => 37
            ],
            [
                'topic' => 'Listrik Statis',
                'question_text' => 'Gaya Coulomb berbanding terbalik dengan...',
                'option_a' => 'Besar muatan',
                'option_b' => 'Kuadrat jarak antar muatan',
                'option_c' => 'Konstanta dielektrik',
                'option_d' => 'Permitivitas udara',
                'option_e' => 'Massa muatan',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Listrik Dinamis',
                'question_text' => 'Tiga buah hambatan 6 Ohm disusun paralel. Hambatan penggantinya adalah...',
                'option_a' => '18 Ohm',
                'option_b' => '2 Ohm',
                'option_c' => '3 Ohm',
                'option_d' => '0,5 Ohm',
                'option_e' => '6 Ohm',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Hukum Ohm',
                'question_text' => 'Hubungan V, I, dan R adalah...',
                'option_a' => 'V = I / R',
                'option_b' => 'V = I x R',
                'option_c' => 'I = V x R',
                'option_d' => 'R = I / V',
                'option_e' => 'V = I + R',
                'correct_answer' => 'b',
                'order' => 40
            ],
            [
                'topic' => 'Magnet',
                'question_text' => 'Gaya Lorentz bekerja pada muatan listrik yang bergerak di dalam...',
                'option_a' => 'Medan listrik saja',
                'option_b' => 'Medan magnet',
                'option_c' => 'Ruang hampa',
                'option_d' => 'Isolator',
                'option_e' => 'Konduktor diam',
                'correct_answer' => 'b',
                'order' => 41
            ],
            [
                'topic' => 'GGL Induksi',
                'question_text' => 'Hukum yang menyatakan bahwa arah arus induksi melawan perubahan fluks adalah Hukum...',
                'option_a' => 'Faraday',
                'option_b' => 'Lenz',
                'option_c' => 'Ampere',
                'option_d' => 'Oersted',
                'option_e' => 'Coulomb',
                'correct_answer' => 'b',
                'order' => 42
            ],
            [
                'topic' => 'Listrik AC',
                'question_text' => 'Nilai tegangan yang terbaca pada voltmeter AC adalah nilai...',
                'option_a' => 'Maksimum',
                'option_b' => 'Efektif (RMS)',
                'option_c' => 'Rata-rata',
                'option_d' => 'Seketika',
                'option_e' => 'Puncak ke puncak',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Lensa',
                'question_text' => 'Lensa cembung bersifat ... sinar.',
                'option_a' => 'Konvergen (mengumpulkan)',
                'option_b' => 'Divergen (menyebarkan)',
                'option_c' => 'Refraktif total',
                'option_d' => 'Polarisasi',
                'option_e' => 'Absorpsi',
                'correct_answer' => 'a',
                'order' => 44
            ],
            [
                'topic' => 'Kapasitor',
                'question_text' => 'Satuan kapasitas kapasitor adalah...',
                'option_a' => 'Coulomb',
                'option_b' => 'Farad',
                'option_c' => 'Volt',
                'option_d' => 'Ohm',
                'option_e' => 'Henry',
                'correct_answer' => 'b',
                'order' => 45
            ],

            // FISIKA MODERN & RADIASI (46-50)
            [
                'topic' => 'Efek Fotolistrik',
                'question_text' => 'Efek fotolistrik membuktikan cahaya bersifat sebagai...',
                'option_a' => 'Gelombang',
                'option_b' => 'Partikel (Foton)',
                'option_c' => 'Medan magnet',
                'option_d' => 'Energi potensial',
                'option_e' => 'Massa diam',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Relativitas',
                'question_text' => 'Menurut Einstein, massa benda yang bergerak mendekati kecepatan cahaya akan...',
                'option_a' => 'Berkurang',
                'option_b' => 'Bertambah (Relativistik)',
                'option_c' => 'Tetap',
                'option_d' => 'Menjadi nol',
                'option_e' => 'Berubah menjadi energi bunyi',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Fisika Atom',
                'question_text' => 'Model atom yang menyatakan elektron mengelilingi inti pada lintasan tertentu (tingkat energi) adalah...',
                'option_a' => 'Dalton',
                'option_b' => 'Thomson',
                'option_c' => 'Rutherford',
                'option_d' => 'Bohr',
                'option_e' => 'Mekanika Kuantum',
                'correct_answer' => 'd',
                'order' => 48
            ],
            [
                'topic' => 'Radioaktivitas',
                'question_text' => 'Waktu yang diperlukan zat radioaktif untuk meluruh hingga tinggal setengahnya disebut...',
                'option_a' => 'Waktu peluruhan',
                'option_b' => 'Waktu paruh',
                'option_c' => 'Konstanta peluruhan',
                'option_d' => 'Aktivitas radiasi',
                'option_e' => 'Umur rata-rata',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Fisika Inti',
                'question_text' => 'Reaksi penggabungan dua inti ringan menjadi inti yang lebih berat disebut...',
                'option_a' => 'Fisi',
                'option_b' => 'Fusi',
                'option_c' => 'Peluruhan Alpha',
                'option_d' => 'Ionisasi',
                'option_e' => 'Eksitasi',
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
