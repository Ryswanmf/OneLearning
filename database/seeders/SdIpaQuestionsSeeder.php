<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SdTryout;
use App\Models\Question;

class SdIpaQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SdTryout::where('name', 'Tryout IPA Terpadu SD')->first();
        
        if (!$tryout) {
            $tryout = SdTryout::create([
                'name' => 'Tryout IPA Terpadu SD',
                'subject' => 'IPA',
                'question_count' => 50,
                'duration_minutes' => 60,
                'price' => 10000,
                'status' => 'published'
            ]);
        }

        // Hapus soal lama jika ada untuk menghindari duplikasi saat seeding ulang
        $tryout->questions()->delete();

        $questions = [
            // Makhluk Hidup & Lingkungannya (1-10)
            [
                'topic' => 'Makhluk Hidup',
                'question_text' => 'Ciri makhluk hidup yang bertujuan untuk mempertahankan jenisnya adalah...',
                'option_a' => 'Bernapas',
                'option_b' => 'Berkembang biak',
                'option_c' => 'Bergerak',
                'option_d' => 'Tumbuh',
                'option_e' => 'Makan',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Hubungan Makhluk Hidup',
                'question_text' => 'Simbiosis antara kerbau dan burung jalak termasuk jenis...',
                'option_a' => 'Mutualisme',
                'option_b' => 'Parasitisme',
                'option_c' => 'Komensalisme',
                'option_d' => 'Amensalisme',
                'option_e' => 'Predasi',
                'correct_answer' => 'a',
                'order' => 2
            ],
            [
                'topic' => 'Rantai Makanan',
                'question_text' => 'Dalam sebuah rantai makanan di sawah, ular berperan sebagai...',
                'option_a' => 'Produsen',
                'option_b' => 'Konsumen I',
                'option_c' => 'Konsumen II/III',
                'option_d' => 'Pengurai',
                'option_e' => 'Pemangsa utama',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Adaptasi Hewan',
                'question_text' => 'Cicak melindungi diri dari musuh dengan cara memutuskan ekornya yang disebut...',
                'option_a' => 'Mimikri',
                'option_b' => 'Autotomi',
                'option_c' => 'Ekolokasi',
                'option_d' => 'Hibernasi',
                'option_e' => 'Kamuflase',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'Adaptasi Tumbuhan',
                'question_text' => 'Tumbuhan yang memiliki batang berongga untuk mengapung di air adalah...',
                'option_a' => 'Kaktus',
                'option_b' => 'Teratai',
                'option_c' => 'Eceng gondok',
                'option_d' => 'Pohon jati',
                'option_e' => 'Bakau',
                'correct_answer' => 'c',
                'order' => 5
            ],
            [
                'topic' => 'Ekosistem',
                'question_text' => 'Kumpulan beberapa rantai makanan yang saling berhubungan disebut...',
                'option_a' => 'Piramida makanan',
                'option_b' => 'Jaring-jaring makanan',
                'option_c' => 'Siklus hidup',
                'option_d' => 'Habitat',
                'option_e' => 'Komunitas',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Pelestarian Lingkungan',
                'question_text' => 'Penanaman kembali hutan yang gundul disebut...',
                'option_a' => 'Reboisasi',
                'option_b' => 'Erosi',
                'option_c' => 'Abrasi',
                'option_d' => 'Irigasi',
                'option_e' => 'Urbanisasi',
                'correct_answer' => 'a',
                'order' => 7
            ],
            [
                'topic' => 'Adaptasi Hewan',
                'question_text' => 'Kelelawar dapat mengetahui keadaan sekitar dengan bunyi pantul yang disebut...',
                'option_a' => 'Autotomi',
                'option_b' => 'Mimikri',
                'option_c' => 'Ekolokasi',
                'option_d' => 'Kamuflase',
                'option_e' => 'Regenerasi',
                'correct_answer' => 'c',
                'order' => 8
            ],
            [
                'topic' => 'Bagian Tumbuhan',
                'question_text' => 'Bagian tumbuhan yang berfungsi sebagai tempat berlangsungnya fotosintesis adalah...',
                'option_a' => 'Akar',
                'option_b' => 'Batang',
                'option_c' => 'Daun',
                'option_d' => 'Bunga',
                'option_e' => 'Biji',
                'correct_answer' => 'c',
                'order' => 9
            ],
            [
                'topic' => 'Perkembangbiakan Tumbuhan',
                'question_text' => 'Alat kelamin jantan pada bunga disebut...',
                'option_a' => 'Putik',
                'option_b' => 'Benang sari',
                'option_c' => 'Mahkota',
                'option_d' => 'Kelopak',
                'option_e' => 'Tangkai',
                'correct_answer' => 'b',
                'order' => 10
            ],

            // Anatomi & Fisiologi (11-25)
            [
                'topic' => 'Sistem Pernapasan',
                'question_text' => 'Tempat terjadinya pertukaran oksigen dan karbondioksida di paru-paru adalah...',
                'option_a' => 'Bronkus',
                'option_b' => 'Trakea',
                'option_c' => 'Alveolus',
                'option_d' => 'Laring',
                'option_e' => 'Faring',
                'correct_answer' => 'c',
                'order' => 11
            ],
            [
                'topic' => 'Sistem Pencernaan',
                'question_text' => 'Enzim ptialin yang berfungsi mengubah karbohidrat menjadi gula terdapat pada...',
                'option_a' => 'Lambung',
                'option_b' => 'Mulut',
                'option_c' => 'Usus halus',
                'option_d' => 'Pankreas',
                'option_e' => 'Empedu',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'Sistem Peredaran Darah',
                'question_text' => 'Bagian jantung yang berfungsi memompa darah ke seluruh tubuh adalah...',
                'option_a' => 'Serambi kanan',
                'option_b' => 'Serambi kiri',
                'option_c' => 'Bilik kanan',
                'option_d' => 'Bilik kiri',
                'option_e' => 'Katup aorta',
                'correct_answer' => 'd',
                'order' => 13
            ],
            [
                'topic' => 'Sistem Gerak',
                'question_text' => 'Sendi yang memungkinkan gerakan ke segala arah disebut sendi...',
                'option_a' => 'Engsel',
                'option_b' => 'Pelana',
                'option_c' => 'Peluru',
                'option_d' => 'Putar',
                'option_e' => 'Geser',
                'correct_answer' => 'c',
                'order' => 14
            ],
            [
                'topic' => 'Indra Manusia',
                'question_text' => 'Bagian mata yang berfungsi mengatur jumlah cahaya yang masuk adalah...',
                'option_a' => 'Retina',
                'option_b' => 'Pupil',
                'option_c' => 'Lensa',
                'option_d' => 'Saraf mata',
                'option_e' => 'Kornea',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'Sistem Pencernaan',
                'question_text' => 'Asam klorida (HCl) diproduksi di lambung untuk...',
                'option_a' => 'Menguraikan protein',
                'option_b' => 'Membunuh kuman penyakit',
                'option_c' => 'Menyerap air',
                'option_d' => 'Menghancurkan lemak',
                'option_e' => 'Mengubah gula',
                'correct_answer' => 'b',
                'order' => 16
            ],
            [
                'topic' => 'Pertumbuhan Manusia',
                'question_text' => 'Masa peralihan dari anak-anak menuju dewasa disebut...',
                'option_a' => 'Balita',
                'option_b' => 'Lansia',
                'option_c' => 'Pubertas',
                'option_d' => 'Prenatal',
                'option_e' => 'Batita',
                'correct_answer' => 'c',
                'order' => 17
            ],
            [
                'topic' => 'Sistem Pernapasan',
                'question_text' => 'Hewan yang bernapas menggunakan kulit yang lembap adalah...',
                'option_a' => 'Ikan',
                'option_b' => 'Belalang',
                'option_c' => 'Cacing tanah',
                'option_d' => 'Burung',
                'option_e' => 'Kadal',
                'correct_answer' => 'c',
                'order' => 18
            ],
            [
                'topic' => 'Daur Hidup Hewan',
                'question_text' => 'Tahapan metamorfosis sempurna pada kupu-kupu setelah telur adalah...',
                'option_a' => 'Pupa',
                'option_b' => 'Ulat (larva)',
                'option_c' => 'Kupu-kupu muda',
                'option_d' => 'Nimfa',
                'option_e' => 'Imago',
                'correct_answer' => 'b',
                'order' => 19
            ],
            [
                'topic' => 'Bagian Tubuh Hewan',
                'question_text' => 'Fungsi gurat sisi pada ikan adalah untuk...',
                'option_a' => 'Bernapas',
                'option_b' => 'Berenang',
                'option_c' => 'Mengetahui tekanan air',
                'option_d' => 'Berkembang biak',
                'option_e' => 'Mencari makan',
                'correct_answer' => 'c',
                'order' => 20
            ],
            [
                'topic' => 'Sistem Pencernaan',
                'question_text' => 'Usus halus terdiri dari tiga bagian, kecuali...',
                'option_a' => 'Duodenum',
                'option_b' => 'Jejunum',
                'option_c' => 'Ileum',
                'option_d' => 'Kolon',
                'option_e' => 'Usus dua belas jari',
                'correct_answer' => 'd',
                'order' => 21
            ],
            [
                'topic' => 'Sistem Peredaran Darah',
                'question_text' => 'Sel darah merah berfungsi untuk...',
                'option_a' => 'Membekukan darah',
                'option_b' => 'Melawan kuman',
                'option_c' => 'Mengangkut oksigen',
                'option_d' => 'Menghasilkan antibodi',
                'option_e' => 'Menyerap sari makanan',
                'correct_answer' => 'c',
                'order' => 22
            ],
            [
                'topic' => 'Sistem Gerak',
                'question_text' => 'Tulang paha termasuk ke dalam jenis tulang...',
                'option_a' => 'Pipih',
                'option_b' => 'Pendek',
                'option_c' => 'Pipa',
                'option_d' => 'Tak beraturan',
                'option_e' => 'Rawan',
                'correct_answer' => 'c',
                'order' => 23
            ],
            [
                'topic' => 'Sistem Ekskresi',
                'question_text' => 'Organ yang berfungsi menyaring darah dan mengeluarkan urine adalah...',
                'option_a' => 'Hati',
                'option_b' => 'Paru-paru',
                'option_c' => 'Kulit',
                'option_d' => 'Ginjal',
                'option_e' => 'Jantung',
                'correct_answer' => 'd',
                'order' => 24
            ],
            [
                'topic' => 'Kesehatan',
                'question_text' => 'Penyakit yang disebabkan oleh kekurangan vitamin C disebut...',
                'option_a' => 'Rakhitis',
                'option_b' => 'Sariawan (Skorbut)',
                'option_c' => 'Rabun senja',
                'option_d' => 'Anemia',
                'option_e' => 'Beri-beri',
                'correct_answer' => 'b',
                'order' => 25
            ],

            // Benda & Sifatnya, Energi (26-40)
            [
                'topic' => 'Wujud Benda',
                'question_text' => 'Perubahan wujud benda dari gas menjadi cair disebut...',
                'option_a' => 'Mencair',
                'option_b' => 'Membeku',
                'option_c' => 'Menguap',
                'option_d' => 'Mengembun',
                'option_e' => 'Menyublim',
                'correct_answer' => 'd',
                'order' => 26
            ],
            [
                'topic' => 'Sifat Bahan',
                'question_text' => 'Kabel listrik biasanya menggunakan bahan tembaga karena bersifat...',
                'option_a' => 'Isolator',
                'option_b' => 'Konduktor',
                'option_c' => 'Transparan',
                'option_d' => 'Elastis',
                'option_e' => 'Kedap air',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'Perpindahan Panas',
                'question_text' => 'Panas matahari sampai ke bumi melalui cara...',
                'option_a' => 'Konduksi',
                'option_b' => 'Konveksi',
                'option_c' => 'Radiasi',
                'option_d' => 'Asimilasi',
                'option_e' => 'Resonansi',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'Gaya',
                'question_text' => 'Buah kelapa jatuh dari pohonnya karena adanya gaya...',
                'option_a' => 'Magnet',
                'option_b' => 'Otot',
                'option_c' => 'Gravitasi',
                'option_d' => 'Gesek',
                'option_e' => 'Pegas',
                'correct_answer' => 'c',
                'order' => 29
            ],
            [
                'topic' => 'Pesawat Sederhana',
                'question_text' => 'Alat yang menggunakan prinsip tuas golongan pertama adalah...',
                'option_a' => 'Gunting',
                'option_b' => 'Pinset',
                'option_c' => 'Gerobak dorong',
                'option_d' => 'Pembuka botol',
                'option_e' => 'Stapler',
                'correct_answer' => 'a',
                'order' => 30
            ],
            [
                'topic' => 'Cahaya',
                'question_text' => 'Pensil terlihat patah di dalam gelas berisi air merupakan sifat cahaya yaitu...',
                'option_a' => 'Dapat dipantulkan',
                'option_b' => 'Dapat dibiaskan',
                'option_c' => 'Merambat lurus',
                'option_d' => 'Menembus benda bening',
                'option_e' => 'Dapat diuraikan',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'Energi Alternatif',
                'question_text' => 'Energi alternatif yang berasal dari kotoran hewan disebut...',
                'option_a' => 'Biodiesel',
                'option_b' => 'Bioetanol',
                'option_c' => 'Biogas',
                'option_d' => 'Geotermal',
                'option_e' => 'Solar',
                'correct_answer' => 'c',
                'order' => 32
            ],
            [
                'topic' => 'Bunyi',
                'question_text' => 'Bunyi tidak dapat merambat melalui...',
                'option_a' => 'Udara',
                'option_b' => 'Air',
                'option_c' => 'Besi',
                'option_d' => 'Ruang hampa',
                'option_e' => 'Tanah',
                'correct_answer' => 'd',
                'order' => 33
            ],
            [
                'topic' => 'Magnet',
                'question_text' => 'Kutub magnet yang senama jika didekatkan akan...',
                'option_a' => 'Tarik-menarik',
                'option_b' => 'Tolak-menolak',
                'option_c' => 'Diam saja',
                'option_d' => 'Melekat kuat',
                'option_e' => 'Hancur',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'Listrik',
                'question_text' => 'Rangkaian listrik yang jika satu lampu mati, lampu lain tetap menyala adalah...',
                'option_a' => 'Seri',
                'option_b' => 'Paralel',
                'option_c' => 'Campuran',
                'option_d' => 'Tertutup',
                'option_e' => 'Terbuka',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Perubahan Energi',
                'question_text' => 'Setrika listrik mengubah energi listrik menjadi energi...',
                'option_a' => 'Gerak',
                'option_b' => 'Bunyi',
                'option_c' => 'Panas',
                'option_d' => 'Cahaya',
                'option_e' => 'Kimia',
                'correct_answer' => 'c',
                'order' => 36
            ],
            [
                'topic' => 'Perpindahan Panas',
                'question_text' => 'Terjadinya angin darat dan angin laut merupakan contoh perpindahan panas secara...',
                'option_a' => 'Konduksi',
                'option_b' => 'Konveksi',
                'option_c' => 'Radiasi',
                'option_d' => 'Kondensasi',
                'option_e' => 'Sublimasi',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Sifat Benda',
                'question_text' => 'Benda yang dapat ditarik kuat oleh magnet disebut...',
                'option_a' => 'Paramagnetik',
                'option_b' => 'Feromagnetik',
                'option_c' => 'Diamagnetik',
                'option_d' => 'Non-magnetik',
                'option_e' => 'Isolator',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Energi',
                'question_text' => 'Makanan yang kita makan mengandung energi...',
                'option_a' => 'Kinetik',
                'option_b' => 'Potensial',
                'option_c' => 'Kimia',
                'option_d' => 'Listrik',
                'option_e' => 'Mekanik',
                'correct_answer' => 'c',
                'order' => 39
            ],
            [
                'topic' => 'Cahaya',
                'question_text' => 'Pelangi merupakan bukti bahwa cahaya dapat...',
                'option_a' => 'Dipantulkan',
                'option_b' => 'Dibiaskan',
                'option_c' => 'Diuraikan',
                'option_d' => 'Merambat lurus',
                'option_e' => 'Dihilangkan',
                'correct_answer' => 'c',
                'order' => 40
            ],

            // Bumi & Alam Semesta (41-50)
            [
                'topic' => 'Tata Surya',
                'question_text' => 'Planet yang mendapat julukan sebagai Planet Merah adalah...',
                'option_a' => 'Venus',
                'option_b' => 'Mars',
                'option_c' => 'Yupiter',
                'option_d' => 'Saturnus',
                'option_e' => 'Merkurius',
                'correct_answer' => 'b',
                'order' => 41
            ],
            [
                'topic' => 'Tata Surya',
                'question_text' => 'Pusat tata surya kita adalah...',
                'option_a' => 'Bumi',
                'option_b' => 'Bulan',
                'option_c' => 'Matahari',
                'option_d' => 'Yupiter',
                'option_e' => 'Bintang Utara',
                'correct_answer' => 'c',
                'order' => 42
            ],
            [
                'topic' => 'Gerakan Bumi',
                'question_text' => 'Perputaran bumi pada porosnya mengakibatkan terjadinya...',
                'option_a' => 'Pergantian musim',
                'option_b' => 'Siang dan malam',
                'option_c' => 'Gerhana matahari',
                'option_d' => 'Perubahan rasi bintang',
                'option_e' => 'Pasang surut air laut',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Gerakan Bumi',
                'question_text' => 'Waktu yang diperlukan bumi untuk mengelilingi matahari adalah...',
                'option_a' => '24 jam',
                'option_b' => '29,5 hari',
                'option_c' => '365 1/4 hari',
                'option_d' => '30 hari',
                'option_e' => '12 jam',
                'correct_answer' => 'c',
                'order' => 44
            ],
            [
                'topic' => 'Gerhana',
                'question_text' => 'Gerhana bulan terjadi ketika posisi bumi berada di antara...',
                'option_a' => 'Matahari dan bulan',
                'option_b' => 'Matahari dan merkurius',
                'option_c' => 'Bulan dan mars',
                'option_d' => 'Yupiter dan saturnus',
                'option_e' => 'Bumi dan matahari',
                'correct_answer' => 'a',
                'order' => 45
            ],
            [
                'topic' => 'Sumber Daya Alam',
                'question_text' => 'Sumber daya alam yang tidak dapat diperbarui adalah...',
                'option_a' => 'Air',
                'option_b' => 'Hutan',
                'option_c' => 'Minyak bumi',
                'option_d' => 'Sinar matahari',
                'option_e' => 'Tanah',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Tata Surya',
                'question_text' => 'Planet terbesar dalam tata surya kita adalah...',
                'option_a' => 'Saturnus',
                'option_b' => 'Neptunus',
                'option_c' => 'Yupiter',
                'option_d' => 'Uranus',
                'option_e' => 'Bumi',
                'correct_answer' => 'c',
                'order' => 47
            ],
            [
                'topic' => 'Bulan',
                'question_text' => 'Bulan tidak memiliki cahaya sendiri, cahaya bulan berasal dari pantulan...',
                'option_a' => 'Bintang',
                'option_b' => 'Bumi',
                'option_c' => 'Matahari',
                'option_d' => 'Atmosfer',
                'option_e' => 'Lampu kota',
                'correct_answer' => 'c',
                'order' => 48
            ],
            [
                'topic' => 'Atmosfer',
                'question_text' => 'Lapisan udara yang menyelimuti bumi disebut...',
                'option_a' => 'Litosfer',
                'option_b' => 'Hidrosfer',
                'option_c' => 'Atmosfer',
                'option_d' => 'Biosfer',
                'option_e' => 'Stratosfer',
                'correct_answer' => 'c',
                'order' => 49
            ],
            [
                'topic' => 'Tata Surya',
                'question_text' => 'Benda langit yang sering disebut bintang jatuh adalah...',
                'option_a' => 'Komet',
                'option_b' => 'Asteroid',
                'option_c' => 'Meteor',
                'option_d' => 'Satelit',
                'option_e' => 'Galaksi',
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
