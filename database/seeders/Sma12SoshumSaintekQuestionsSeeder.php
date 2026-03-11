<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmaUtbkTryout;
use App\Models\Question;

class Sma12SoshumSaintekQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmaUtbkTryout::where('name', 'Tryout Soshum/Saintek SMA 12')->first();
        
        if (!$tryout) {
            $tryout = SmaUtbkTryout::create([
                'name' => 'Tryout Soshum/Saintek SMA 12',
                'subject' => 'Soshum/Saintek',
                'question_count' => 50,
                'duration_minutes' => 120,
                'price' => 20000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // SAINTEK - MATEMATIKA IPA (1-7)
            [
                'topic' => 'Saintek - Matematika',
                'question_text' => 'Nilai x yang memenuhi persamaan 2^(2x+1) = 32 adalah...',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => '5',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Saintek - Matematika',
                'question_text' => 'Turunan pertama dari f(x) = sin(2x) adalah...',
                'option_a' => 'cos(2x)',
                'option_b' => '2 cos(2x)',
                'option_c' => '-2 cos(2x)',
                'option_d' => '1/2 cos(2x)',
                'option_e' => 'sin(x) cos(x)',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Saintek - Matematika',
                'question_text' => 'Hasil dari ∫ x^2 dx dengan batas 0 sampai 3 adalah...',
                'option_a' => '3',
                'option_b' => '6',
                'option_c' => '9',
                'option_d' => '27',
                'option_e' => '1',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Saintek - Matematika',
                'question_text' => 'Persamaan lingkaran yang berpusat di (0,0) dan berjari-jari 5 adalah...',
                'option_a' => 'x^2 + y^2 = 5',
                'option_b' => 'x^2 + y^2 = 10',
                'option_c' => 'x^2 + y^2 = 25',
                'option_d' => 'x + y = 5',
                'option_e' => 'x^2 - y^2 = 25',
                'correct_answer' => 'c',
                'order' => 4
            ],
            [
                'topic' => 'Saintek - Matematika',
                'question_text' => 'Nilai dari limit x mendekati tak hingga dari (2x + 1) / (x - 3) adalah...',
                'option_a' => '0',
                'option_b' => '1',
                'option_c' => '2',
                'option_d' => 'tak hingga',
                'option_e' => ' -1/3',
                'correct_answer' => 'c',
                'order' => 5
            ],
            [
                'topic' => 'Saintek - Matematika',
                'question_text' => 'Banyaknya cara memilih 2 orang dari 5 orang untuk menjadi ketua dan wakil adalah...',
                'option_a' => '10',
                'option_b' => '20',
                'option_c' => '25',
                'option_d' => '5',
                'option_e' => '120',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Saintek - Matematika',
                'question_text' => 'Jika f(x) = x + 2 dan g(x) = x^2, maka (g o f)(1) adalah...',
                'option_a' => '3',
                'option_b' => '5',
                'option_c' => '9',
                'option_d' => '1',
                'option_e' => '0',
                'correct_answer' => 'c',
                'order' => 7
            ],

            // SAINTEK - FISIKA (8-13)
            [
                'topic' => 'Saintek - Fisika',
                'question_text' => 'Besar gaya gravitasi antara dua benda berbanding terbalik dengan...',
                'option_a' => 'Massa benda pertama',
                'option_b' => 'Massa benda kedua',
                'option_c' => 'Kuadrat jarak kedua benda',
                'option_d' => 'Kecepatan benda',
                'option_e' => 'Waktu tempuh',
                'correct_answer' => 'c',
                'order' => 8
            ],
            [
                'topic' => 'Saintek - Fisika',
                'question_text' => 'Cahaya merupakan gelombang...',
                'option_a' => 'Longitudinal',
                'option_b' => 'Mekanik saja',
                'option_c' => 'Elektromagnetik',
                'option_d' => 'Bunyi',
                'option_e' => 'Stasioner',
                'correct_answer' => 'c',
                'order' => 9
            ],
            [
                'topic' => 'Saintek - Fisika',
                'question_text' => 'Hukum kekekalan momentum berlaku pada peristiwa...',
                'option_a' => 'Benda jatuh',
                'option_b' => 'Tumbukan',
                'option_c' => 'Pemuaian',
                'option_d' => 'Radiasi',
                'option_e' => 'Konduksi',
                'correct_answer' => 'b',
                'order' => 10
            ],
            [
                'topic' => 'Saintek - Fisika',
                'question_text' => 'Satuan dari hambatan listrik adalah...',
                'option_a' => 'Volt',
                'option_b' => 'Ampere',
                'option_c' => 'Ohm',
                'option_d' => 'Watt',
                'option_e' => 'Joule',
                'correct_answer' => 'c',
                'order' => 11
            ],
            [
                'topic' => 'Saintek - Fisika',
                'question_text' => 'Proses perubahan gas menjadi cair disebut...',
                'option_a' => 'Menguap',
                'option_b' => 'Mengembun',
                'option_c' => 'Mencair',
                'option_d' => 'Membeku',
                'option_e' => 'Menyublim',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'Saintek - Fisika',
                'question_text' => 'Besarnya energi kinetik benda sebanding dengan...',
                'option_a' => 'Ketinggian',
                'option_b' => 'Massa dan kuadrat kecepatan',
                'option_c' => 'Waktu',
                'option_d' => 'Gaya tarik',
                'option_e' => 'Percepatan gravitasi',
                'correct_answer' => 'b',
                'order' => 13
            ],

            // SAINTEK - KIMIA (14-19)
            [
                'topic' => 'Saintek - Kimia',
                'question_text' => 'Nomor atom menunjukkan jumlah...',
                'option_a' => 'Neutron',
                'option_b' => 'Proton',
                'option_c' => 'Proton + Neutron',
                'option_d' => 'Proton + Elektron',
                'option_e' => 'Kulit atom',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'Saintek - Kimia',
                'question_text' => 'Unsur yang paling elektronegatif adalah...',
                'option_a' => 'Oksigen',
                'option_b' => 'Fluorin',
                'option_c' => 'Klorin',
                'option_d' => 'Nitrogen',
                'option_e' => 'Karbon',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'Saintek - Kimia',
                'question_text' => 'Senyawa dengan rumus CH4 disebut...',
                'option_a' => 'Metana',
                'option_b' => 'Etana',
                'option_c' => 'Propana',
                'option_d' => 'Butana',
                'option_e' => 'Pentana',
                'correct_answer' => 'a',
                'order' => 16
            ],
            [
                'topic' => 'Saintek - Kimia',
                'question_text' => 'Larutan yang dapat mempertahankan pH disebut larutan...',
                'option_a' => 'Elektrolit',
                'option_b' => 'Penyangga (Buffer)',
                'option_c' => 'Koloid',
                'option_d' => 'Jenuh',
                'option_e' => 'Asam kuat',
                'correct_answer' => 'b',
                'order' => 17
            ],
            [
                'topic' => 'Saintek - Kimia',
                'question_text' => 'Ikatan pada molekul air (H2O) adalah ikatan...',
                'option_a' => 'Ion',
                'option_b' => 'Kovalen polar',
                'option_c' => 'Logam',
                'option_d' => 'Van der Waals',
                'option_e' => 'Hidrogen antar molekul',
                'correct_answer' => 'b',
                'order' => 18
            ],
            [
                'topic' => 'Saintek - Kimia',
                'question_text' => 'Zat yang mempercepat reaksi tanpa ikut bereaksi permanen disebut...',
                'option_a' => 'Reaktan',
                'option_b' => 'Katalis',
                'option_c' => 'Produk',
                'option_d' => 'Inhibitor',
                'option_e' => 'Pelarut',
                'correct_answer' => 'b',
                'order' => 19
            ],

            // SAINTEK - BIOLOGI (20-25)
            [
                'topic' => 'Saintek - Biologi',
                'question_text' => 'Organel sel yang hanya terdapat pada sel tumbuhan adalah...',
                'option_a' => 'Mitokondria',
                'option_b' => 'Ribosom',
                'option_c' => 'Kloroplas',
                'option_d' => 'Lisosom',
                'option_e' => 'Badan Golgi',
                'correct_answer' => 'c',
                'order' => 20
            ],
            [
                'topic' => 'Saintek - Biologi',
                'question_text' => 'Proses pembentukan energi di dalam sel disebut...',
                'option_a' => 'Fotosintesis',
                'option_b' => 'Respirasi sel',
                'option_c' => 'Ekskresi',
                'option_d' => 'Reproduksi',
                'option_e' => 'Adaptasi',
                'correct_answer' => 'b',
                'order' => 21
            ],
            [
                'topic' => 'Saintek - Biologi',
                'question_text' => 'Hormon yang memicu pematangan buah adalah...',
                'option_a' => 'Auksin',
                'option_b' => 'Sitokinin',
                'option_c' => 'Etilen',
                'option_d' => 'Giberelin',
                'option_e' => 'Asam Absisat',
                'correct_answer' => 'c',
                'order' => 22
            ],
            [
                'topic' => 'Saintek - Biologi',
                'question_text' => 'Penulisan nama ilmiah kucing yang benar adalah...',
                'option_a' => 'Felis Catus',
                'option_b' => 'felis catus',
                'option_c' => 'Felis catus (miring)',
                'option_d' => 'FELIS CATUS',
                'option_e' => 'Felis-catus',
                'correct_answer' => 'c',
                'order' => 23
            ],
            [
                'topic' => 'Saintek - Biologi',
                'question_text' => 'Bagian otak yang berfungsi sebagai pusat penglihatan adalah...',
                'option_a' => 'Lobus Frontalis',
                'option_b' => 'Lobus Parietalis',
                'option_c' => 'Lobus Oksipitalis',
                'option_d' => 'Lobus Temporalis',
                'option_e' => 'Cerebellum',
                'correct_answer' => 'c',
                'order' => 24
            ],
            [
                'topic' => 'Saintek - Biologi',
                'question_text' => 'Simbiosis antara jamur dan akar tanaman tingkat tinggi disebut...',
                'option_a' => 'Lichenes',
                'option_b' => 'Mikoriza',
                'option_c' => 'Hifa',
                'option_d' => 'Miselium',
                'option_e' => 'Saprofit',
                'correct_answer' => 'b',
                'order' => 25
            ],

            // SOSHUM - SEJARAH (26-31)
            [
                'topic' => 'Soshum - Sejarah',
                'question_text' => 'Zaman prasejarah di mana manusia mulai bercocok tanam disebut zaman...',
                'option_a' => 'Paleolitikum',
                'option_b' => 'Mesolitikum',
                'option_c' => 'Neolitikum',
                'option_d' => 'Megalitikum',
                'option_e' => 'Perundagian',
                'correct_answer' => 'c',
                'order' => 26
            ],
            [
                'topic' => 'Soshum - Sejarah',
                'question_text' => 'Tujuan utama penjelajahan samudra bangsa Eropa (3G) adalah...',
                'option_a' => 'Gold, Glory, Gospel',
                'option_b' => 'Gold, Game, Gift',
                'option_c' => 'Good, Great, Grand',
                'option_d' => 'Give, Go, Get',
                'option_e' => 'God, Gold, Gun',
                'correct_answer' => 'a',
                'order' => 27
            ],
            [
                'topic' => 'Soshum - Sejarah',
                'question_text' => 'Sumpah Pemuda dibacakan pada tanggal...',
                'option_a' => '17 Agustus 1945',
                'option_b' => '28 Oktober 1928',
                'option_c' => '20 Mei 1908',
                'option_d' => '1 Juni 1945',
                'option_e' => '10 November 1945',
                'correct_answer' => 'b',
                'order' => 28
            ],
            [
                'topic' => 'Soshum - Sejarah',
                'question_text' => 'Kerajaan Majapahit mencapai puncak kejayaan pada masa pemerintahan...',
                'option_a' => 'Raden Wijaya',
                'option_b' => 'Hayam Wuruk',
                'option_c' => 'Gajah Mada',
                'option_d' => 'Tribhuwana Tunggadewi',
                'option_e' => 'Jayanegara',
                'correct_answer' => 'b',
                'order' => 29
            ],
            [
                'topic' => 'Soshum - Sejarah',
                'question_text' => 'Perang Dunia II di Asia Pasifik berakhir setelah Jepang menyerah tanpa syarat akibat pengeboman kota...',
                'option_a' => 'Tokyo dan Osaka',
                'option_b' => 'Hiroshima dan Nagasaki',
                'option_c' => 'Kyoto dan Nagoya',
                'option_d' => 'Yokohama dan Kobe',
                'option_e' => 'Okinawa dan Sapporo',
                'correct_answer' => 'b',
                'order' => 30
            ],
            [
                'topic' => 'Soshum - Sejarah',
                'question_text' => 'Organisasi pergerakan nasional yang pertama kali berdiri adalah...',
                'option_a' => 'Sarekat Islam',
                'option_b' => 'Budi Utomo',
                'option_c' => 'Indische Partij',
                'option_d' => 'Muhammadiyah',
                'option_e' => 'PNI',
                'correct_answer' => 'b',
                'order' => 31
            ],

            // SOSHUM - GEOGRAFI (32-37)
            [
                'topic' => 'Soshum - Geografi',
                'question_text' => 'Lapisan atmosfer tempat terjadinya fenomena cuaca adalah...',
                'option_a' => 'Stratosfer',
                'option_b' => 'Troposfer',
                'option_c' => 'Mesosfer',
                'option_d' => 'Termosfer',
                'option_e' => 'Eksosfer',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Soshum - Geografi',
                'question_text' => 'Garis yang membagi waktu di dunia disebut...',
                'option_a' => 'Ekuator',
                'option_b' => 'Garis Bujur 0 (Greenwich)',
                'option_c' => 'Garis Lintang',
                'option_d' => 'Garis Khatulistiwa',
                'option_e' => 'Isoterm',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'Soshum - Geografi',
                'question_text' => 'Bencana alam yang disebabkan oleh pergerakan lempeng tektonik adalah...',
                'option_a' => 'Banjir',
                'option_b' => 'Gempa bumi',
                'option_c' => 'Kekeringan',
                'option_d' => 'Angin puting beliung',
                'option_e' => 'Erosi',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'Soshum - Geografi',
                'question_text' => 'Pertemuan antara arus panas dan arus dingin menghasilkan wilayah yang kaya akan...',
                'option_a' => 'Minyak bumi',
                'option_b' => 'Ikan',
                'option_c' => 'Terumbu karang',
                'option_d' => 'Garam',
                'option_e' => 'Pasir',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Soshum - Geografi',
                'question_text' => 'Proses penguapan air dari tumbuhan ke atmosfer disebut...',
                'option_a' => 'Evaporasi',
                'option_b' => 'Transpirasi',
                'option_c' => 'Kondensasi',
                'option_d' => 'Presipitasi',
                'option_e' => 'Infiltrasi',
                'correct_answer' => 'b',
                'order' => 36
            ],
            [
                'topic' => 'Soshum - Geografi',
                'question_text' => 'Jenis tanah yang subur akibat endapan sungai disebut tanah...',
                'option_a' => 'Vulkanik',
                'option_b' => 'Aluvial',
                'option_c' => 'Gambut',
                'option_d' => 'Laterit',
                'option_e' => 'Podsolik',
                'correct_answer' => 'b',
                'order' => 37
            ],

            // SOSHUM - EKONOMI (38-43)
            [
                'topic' => 'Soshum - Ekonomi',
                'question_text' => 'Hukum permintaan menyatakan bahwa jika harga naik, maka...',
                'option_a' => 'Permintaan naik',
                'option_b' => 'Permintaan turun',
                'option_c' => 'Penawaran turun',
                'option_d' => 'Harga tetap',
                'option_e' => 'Penghasilan naik',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'Soshum - Ekonomi',
                'question_text' => 'Bank yang memiliki tugas menjaga kestabilan nilai rupiah adalah...',
                'option_a' => 'Bank Mandiri',
                'option_b' => 'Bank Indonesia',
                'option_c' => 'Bank Rakyat Indonesia',
                'option_d' => 'Bank Tabungan Negara',
                'option_e' => 'Bank Dunia',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Soshum - Ekonomi',
                'question_text' => 'Masalah ekonomi mendasar bagi manusia adalah...',
                'option_a' => 'Kekurangan modal',
                'option_b' => 'Kelangkaan (Scarcity)',
                'option_c' => 'Kelebihan produksi',
                'option_d' => 'Harga yang mahal',
                'option_e' => 'Kurangnya tenaga kerja',
                'correct_answer' => 'b',
                'order' => 40
            ],
            [
                'topic' => 'Soshum - Ekonomi',
                'question_text' => 'Pasar di mana hanya terdapat satu penjual disebut pasar...',
                'option_a' => 'Persaingan Sempurna',
                'option_b' => 'Monopoli',
                'option_c' => 'Oligopoli',
                'option_d' => 'Monopsoni',
                'option_e' => 'Duopoli',
                'correct_answer' => 'b',
                'order' => 41
            ],
            [
                'topic' => 'Soshum - Ekonomi',
                'question_text' => 'Kebijakan pemerintah untuk mengatur pengeluaran dan pendapatan negara disebut kebijakan...',
                'option_a' => 'Moneter',
                'option_b' => 'Fiskal',
                'option_c' => 'Diskonto',
                'option_d' => 'Pasar terbuka',
                'option_e' => 'Kredit ketat',
                'correct_answer' => 'b',
                'order' => 42
            ],
            [
                'topic' => 'Soshum - Ekonomi',
                'question_text' => 'Nilai barang atau jasa yang dikorbankan untuk mendapatkan sesuatu disebut biaya...',
                'option_a' => 'Produksi',
                'option_b' => 'Peluang (Opportunity Cost)',
                'option_c' => 'Variabel',
                'option_d' => 'Tetap',
                'option_e' => 'Total',
                'correct_answer' => 'b',
                'order' => 43
            ],

            // SOSHUM - SOSIOLOGI (44-50)
            [
                'topic' => 'Soshum - Sosiologi',
                'question_text' => 'Hubungan timbal balik antara individu dengan individu, individu dengan kelompok disebut...',
                'option_a' => 'Tindakan sosial',
                'option_b' => 'Interaksi sosial',
                'option_c' => 'Kontak sosial',
                'option_d' => 'Komunikasi sosial',
                'option_e' => 'Fakta sosial',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Soshum - Sosiologi',
                'question_text' => 'Proses belajar seorang anak untuk mengenal norma dan nilai dalam masyarakat disebut...',
                'option_a' => 'Modernisasi',
                'option_b' => 'Sosialisasi',
                'option_c' => 'Globalisasi',
                'option_d' => 'Urbanisasi',
                'option_e' => 'Asimilasi',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Soshum - Sosiologi',
                'question_text' => 'Perilaku yang tidak sesuai dengan norma yang berlaku dalam masyarakat disebut...',
                'option_a' => 'Perilaku normal',
                'option_b' => 'Penyimpangan sosial',
                'option_c' => 'Tertib sosial',
                'option_d' => 'Integrasi sosial',
                'option_e' => 'Konflik sosial',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Soshum - Sosiologi',
                'question_text' => 'Faktor pendorong interaksi sosial yang berupa perasaan tertarik pada orang lain disebut...',
                'option_a' => 'Imitasi',
                'option_b' => 'Simpati',
                'option_c' => 'Identifikasi',
                'option_d' => 'Sugesti',
                'option_e' => 'Motivasi',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Soshum - Sosiologi',
                'question_text' => 'Bentuk kerja sama yang dilakukan untuk mencapai tujuan bersama disebut...',
                'option_a' => 'Akomodasi',
                'option_b' => 'Kooperasi',
                'option_c' => 'Asimilasi',
                'option_d' => 'Akulturasi',
                'option_e' => 'Kompetisi',
                'correct_answer' => 'b',
                'order' => 48
            ],
            [
                'topic' => 'Soshum - Sosiologi',
                'question_text' => 'Pengaruh kebudayaan asing yang diterima tanpa menghilangkan kebudayaan asli disebut...',
                'option_a' => 'Asimilasi',
                'option_b' => 'Akulturasi',
                'option_c' => 'Difusi',
                'option_d' => 'Inovasi',
                'option_e' => 'Globalisasi',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Soshum - Sosiologi',
                'question_text' => 'Perubahan sosial yang terjadi secara cepat dan mendasar disebut...',
                'option_a' => 'Evolusi',
                'option_b' => 'Revolusi',
                'option_c' => 'Progress',
                'option_d' => 'Regress',
                'option_e' => 'Inovasi',
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
