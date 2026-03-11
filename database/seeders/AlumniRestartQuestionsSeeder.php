<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlumniTryout;
use App\Models\Question;

class AlumniRestartQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = AlumniTryout::where('name', 'Simulasi Re-start UTBK Alumni')->first();
        
        if (!$tryout) {
            $tryout = AlumniTryout::create([
                'name' => 'Simulasi Re-start UTBK Alumni',
                'subject' => 'TPS & Literasi',
                'question_count' => 50,
                'duration_minutes' => 100,
                'price' => 0,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // PENALARAN UMUM (1-12)
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua atlet adalah orang yang disiplin. Sebagian orang yang disiplin memiliki pola makan teratur. Kesimpulan yang paling tepat adalah...',
                'option_a' => 'Semua atlet memiliki pola makan teratur.',
                'option_b' => 'Sebagian atlet memiliki pola makan teratur.',
                'option_c' => 'Orang yang memiliki pola makan teratur pasti atlet.',
                'option_d' => 'Atlet yang tidak disiplin tidak memiliki pola makan teratur.',
                'option_e' => 'Tidak dapat ditarik kesimpulan yang pasti tentang atlet dan pola makan.',
                'correct_answer' => 'e',
                'order' => 1
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola: 3, 6, 12, 21, 33, ... Angka selanjutnya adalah...',
                'option_a' => '45',
                'option_b' => '48',
                'option_c' => '51',
                'option_d' => '54',
                'option_e' => '60',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika tingkat inflasi naik, maka daya beli masyarakat menurun. Jika daya beli masyarakat menurun, maka pertumbuhan ekonomi terhambat. Saat ini pertumbuhan ekonomi tidak terhambat. Kesimpulan yang tepat adalah...',
                'option_a' => 'Tingkat inflasi naik.',
                'option_b' => 'Daya beli masyarakat menurun.',
                'option_c' => 'Tingkat inflasi tidak naik.',
                'option_d' => 'Masyarakat menjadi kaya.',
                'option_e' => 'Pemerintah berhasil menjaga ekonomi.',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola: G, I, L, P, ... Huruf selanjutnya adalah...',
                'option_a' => 'S',
                'option_b' => 'T',
                'option_c' => 'U',
                'option_d' => 'V',
                'option_e' => 'W',
                'correct_answer' => 'c',
                'order' => 4
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua mamalia bernapas dengan paru-paru. Ikan paus bernapas dengan paru-paru. Kesimpulan yang tepat adalah...',
                'option_a' => 'Ikan paus adalah mamalia.',
                'option_b' => 'Sebagian mamalia adalah ikan paus.',
                'option_c' => 'Ikan paus bukan termasuk ikan.',
                'option_d' => 'Semua yang bernapas dengan paru-paru adalah mamalia.',
                'option_e' => 'Ikan paus hidup di darat.',
                'correct_answer' => 'a',
                'order' => 5
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika A > B dan C < B, maka pernyataan yang benar adalah...',
                'option_a' => 'A < C',
                'option_b' => 'A = C',
                'option_c' => 'A > C',
                'option_d' => 'B > A',
                'option_e' => 'C > A',
                'correct_answer' => 'c',
                'order' => 6
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola: 100, 95, 85, 70, 50, ... Angka selanjutnya adalah...',
                'option_a' => '35',
                'option_b' => '30',
                'option_c' => '25',
                'option_d' => '20',
                'option_e' => '15',
                'correct_answer' => 'c',
                'order' => 7
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Andi makan nasi jika ada sayur. Hari ini tidak ada sayur. Kesimpulan:',
                'option_a' => 'Andi lapar.',
                'option_b' => 'Andi makan roti.',
                'option_c' => 'Andi tidak makan nasi.',
                'option_d' => 'Andi tetap makan nasi.',
                'option_e' => 'Sayur sedang mahal.',
                'correct_answer' => 'c',
                'order' => 8
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Jika "ALUMNI" = 123456, maka "MULIA" = ...',
                'option_a' => '43215',
                'option_b' => '43251',
                'option_c' => '43521',
                'option_d' => '45321',
                'option_e' => '43512',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Semua mahasiswa baru mengikuti ospek. Budi tidak mengikuti ospek. Kesimpulan:',
                'option_a' => 'Budi sakit.',
                'option_b' => 'Budi mahasiswa lama.',
                'option_c' => 'Budi bukan mahasiswa baru.',
                'option_d' => 'Budi tidak lulus ospek.',
                'option_e' => 'Budi malas.',
                'correct_answer' => 'c',
                'order' => 10
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Pola: 1, 1, 2, 3, 5, 8, ... Angka selanjutnya adalah...',
                'option_a' => '10',
                'option_b' => '11',
                'option_c' => '13',
                'option_d' => '15',
                'option_e' => '21',
                'correct_answer' => 'c',
                'order' => 11
            ],
            [
                'topic' => 'Penalaran Umum',
                'question_text' => 'Tiga buah lampu menyala tiap 2, 3, dan 4 detik. Kapan mereka menyala bersamaan kedua kalinya?',
                'option_a' => '12 detik',
                'option_b' => '24 detik',
                'option_c' => '36 detik',
                'option_d' => '48 detik',
                'option_e' => '6 detik',
                'correct_answer' => 'b',
                'order' => 12
            ],

            // PENGETAHUAN & PEMAHAMAN UMUM (13-25)
            [
                'topic' => 'PPU',
                'question_text' => 'Sinonim dari kata "Resesi" adalah...',
                'option_a' => 'Kemajuan',
                'option_b' => 'Kemunduran',
                'option_c' => 'Kestabilan',
                'option_d' => 'Pertumbuhan',
                'option_e' => 'Pergerakan',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Antonim dari kata "Autentik" adalah...',
                'option_a' => 'Asli',
                'option_b' => 'Palsu',
                'option_c' => 'Kuno',
                'option_d' => 'Modern',
                'option_e' => 'Indah',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Analogi: Haus : Minum = Lapar : ...',
                'option_a' => 'Kenyang',
                'option_b' => 'Makan',
                'option_c' => 'Haus',
                'option_d' => 'Tidur',
                'option_e' => 'Lari',
                'correct_answer' => 'b',
                'order' => 15
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Istilah "Egosentris" merujuk pada sikap...',
                'option_a' => 'Peduli sesama',
                'option_b' => 'Berpusat pada diri sendiri',
                'option_c' => 'Rendah hati',
                'option_d' => 'Percaya diri tinggi',
                'option_e' => 'Mudah menyerah',
                'correct_answer' => 'b',
                'order' => 16
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Manakah penulisan gelar yang benar?',
                'option_a' => 'Dr Andi, S.H.',
                'option_b' => 'Dr. Andi S.H',
                'option_c' => 'Dr. Andi, S.H.',
                'option_d' => 'Dr. Andi SH.',
                'option_e' => 'Dr, Andi, S.H',
                'correct_answer' => 'c',
                'order' => 17
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Negara dengan julukan "Negeri Tirai Bambu" adalah...',
                'option_a' => 'Jepang',
                'option_b' => 'Korea Selatan',
                'option_c' => 'Tiongkok',
                'option_d' => 'Vietnam',
                'option_e' => 'Thailand',
                'correct_answer' => 'c',
                'order' => 18
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Kata "Paradoks" berarti...',
                'option_a' => 'Keadaan yang nyata',
                'option_b' => 'Pernyataan yang seolah bertentangan namun mengandung kebenaran',
                'option_c' => 'Kesimpulan akhir',
                'option_d' => 'Alasan yang dibuat-buat',
                'option_e' => 'Kebohongan publik',
                'correct_answer' => 'b',
                'order' => 19
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Mata uang negara Uni Eropa disebut...',
                'option_a' => 'Dollar',
                'option_b' => 'Poundsterling',
                'option_c' => 'Euro',
                'option_d' => 'Yen',
                'option_e' => 'Rupiah',
                'correct_answer' => 'c',
                'order' => 20
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Sinonim dari "Pragmatis" adalah...',
                'option_a' => 'Idealis',
                'option_b' => 'Praktis',
                'option_c' => 'Teoretis',
                'option_d' => 'Khayalan',
                'option_e' => 'Kaku',
                'correct_answer' => 'b',
                'order' => 21
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Siapakah penulis novel "Laskar Pelangi"?',
                'option_a' => 'Tere Liye',
                'option_b' => 'Andrea Hirata',
                'option_c' => 'Dewi Lestari',
                'option_d' => 'Habiburrahman El Shirazy',
                'option_e' => 'Pramoedya Ananta Toer',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Analogi: Bulan : Bumi = Bumi : ...',
                'option_a' => 'Bintang',
                'option_b' => 'Matahari',
                'option_c' => 'Mars',
                'option_d' => 'Langit',
                'option_e' => 'Orbit',
                'correct_answer' => 'b',
                'order' => 23
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Istilah "Vandalisme" berarti...',
                'option_a' => 'Perbuatan merusak karya seni atau fasilitas umum',
                'option_b' => 'Pencurian barang mewah',
                'option_c' => 'Penyebaran berita bohong',
                'option_d' => 'Perkelahian antar pelajar',
                'option_e' => 'Kecurangan saat ujian',
                'correct_answer' => 'a',
                'order' => 24
            ],
            [
                'topic' => 'PPU',
                'question_text' => 'Gunung tertinggi di dunia adalah...',
                'option_a' => 'Gunung Merapi',
                'option_b' => 'Gunung Kilimanjaro',
                'option_c' => 'Gunung Everest',
                'option_d' => 'Gunung Fuji',
                'option_e' => 'Gunung Jayawijaya',
                'correct_answer' => 'c',
                'order' => 25
            ],

            // LITERASI BAHASA INDONESIA (26-38)
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kalimat baku adalah...',
                'option_a' => 'Kami sudah sampaikan pesannya ke dia.',
                'option_b' => 'Pesannya sudah kami sampaikan kepadanya.',
                'option_c' => 'Kita sudah kasih tau dia tadi.',
                'option_d' => 'Udah dibilangin jangan kesana.',
                'option_e' => 'Pesan tersebut kami sudah berikan.',
                'correct_answer' => 'b',
                'order' => 26
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Ide pokok teks berita biasanya menjawab pertanyaan...',
                'option_a' => 'Mengapa',
                'option_b' => 'Siapa',
                'option_c' => 'Apa',
                'option_d' => 'Dimana',
                'option_e' => 'Semua benar (5W+1H)',
                'correct_answer' => 'e',
                'order' => 27
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Penulisan kata "di" yang menunjukkan tempat harus...',
                'option_a' => 'Digabung dengan kata selanjutnya',
                'option_b' => 'Dipisah dari kata selanjutnya',
                'option_c' => 'Menggunakan huruf kapital',
                'option_d' => 'Diberi tanda petik',
                'option_e' => 'Ditulis miring',
                'correct_answer' => 'b',
                'order' => 28
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Konjungsi "karena" menyatakan hubungan...',
                'option_a' => 'Tujuan',
                'option_b' => 'Pertentangan',
                'option_c' => 'Sebab-akibat',
                'option_d' => 'Waktu',
                'option_e' => 'Pilihan',
                'correct_answer' => 'c',
                'order' => 29
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Manakah yang termasuk kalimat opini?',
                'option_a' => 'Jakarta adalah ibukota Indonesia.',
                'option_b' => 'Presiden tinggal di istana negara.',
                'option_c' => 'Menurut saya, masakan ini sangat lezat.',
                'option_d' => 'Satu menit terdiri dari 60 detik.',
                'option_e' => 'Bendera Indonesia berwarna merah putih.',
                'correct_answer' => 'c',
                'order' => 30
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Struktur teks eksplanasi dimulai dengan...',
                'option_a' => 'Interpretasi',
                'option_b' => 'Deretan penjelas',
                'option_c' => 'Pernyataan umum',
                'option_d' => 'Kesimpulan',
                'option_e' => 'Saran',
                'correct_answer' => 'c',
                'order' => 31
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kata serapan yang benar adalah...',
                'option_a' => 'Sistim',
                'option_b' => 'Sistem',
                'option_c' => 'Sistematik',
                'option_d' => 'System',
                'option_e' => 'Sistimatis',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Tanda tanya (?) digunakan untuk...',
                'option_a' => 'Mengakhiri kalimat berita',
                'option_b' => 'Mengakhiri kalimat tanya',
                'option_c' => 'Menyatakan rasa kagum',
                'option_d' => 'Memberikan perintah',
                'option_e' => 'Memisahkan subjek dan predikat',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Sinonim dari "Efektif" adalah...',
                'option_a' => 'Tepat guna',
                'option_b' => 'Hemat biaya',
                'option_c' => 'Cepat selesai',
                'option_d' => 'Banyak hasil',
                'option_e' => 'Mudah dilakukan',
                'correct_answer' => 'a',
                'order' => 34
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Kalimat aktif adalah...',
                'option_a' => 'Buku dibaca Andi.',
                'option_b' => 'Andi membaca buku.',
                'option_c' => 'Sudah saya baca buku itu.',
                'option_d' => 'Dibacanya buku itu oleh Andi.',
                'option_e' => 'Buku itu bagus sekali.',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Antonim dari "Optimis" adalah...',
                'option_a' => 'Pesimis',
                'option_b' => 'Realistis',
                'option_c' => 'Antusias',
                'option_d' => 'Berani',
                'option_e' => 'Pintar',
                'correct_answer' => 'a',
                'order' => 36
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Judul yang tepat untuk teks tentang cara menabung adalah...',
                'option_a' => 'Boros itu Tidak Baik',
                'option_b' => 'Uang adalah Segalanya',
                'option_c' => 'Langkah-langkah Bijak dalam Menabung',
                'option_d' => 'Mari Belanja Sepuasnya',
                'option_e' => 'Dompet Kosong',
                'correct_answer' => 'c',
                'order' => 37
            ],
            [
                'topic' => 'Literasi Bahasa Indonesia',
                'question_text' => 'Bagian surat yang berisi harapan pengirim adalah...',
                'option_a' => 'Alamat surat',
                'option_b' => 'Salam pembuka',
                'option_c' => 'Isi surat',
                'option_d' => 'Paragraf penutup',
                'option_e' => 'Tanda tangan',
                'correct_answer' => 'd',
                'order' => 38
            ],

            // LITERASI BAHASA INGGRIS (39-50)
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => '"She has been living in Bali for five years." This sentence means...',
                'option_a' => 'She lived in Bali five years ago.',
                'option_b' => 'She will live in Bali for five years.',
                'option_c' => 'She started living in Bali five years ago and still lives there.',
                'option_d' => 'She wants to live in Bali for five years.',
                'option_e' => 'She never lived in Bali.',
                'correct_answer' => 'c',
                'order' => 39
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'What is the synonym of "Huge"?',
                'option_a' => 'Small',
                'option_b' => 'Tiny',
                'option_c' => 'Enormous',
                'option_d' => 'Thin',
                'option_e' => 'Short',
                'correct_answer' => 'c',
                'order' => 40
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => '"If I win the lottery, I ... travel the world."',
                'option_a' => 'will',
                'option_b' => 'would',
                'option_c' => 'am',
                'option_d' => 'have',
                'option_e' => 'was',
                'correct_answer' => 'a',
                'order' => 41
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The antonym of "Diligent" is...',
                'option_a' => 'Lazy',
                'option_b' => 'Hardworking',
                'option_c' => 'Smart',
                'option_d' => 'Brave',
                'option_e' => 'Kind',
                'correct_answer' => 'a',
                'order' => 42
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Choose the correct passive voice: "Someone stole my bike."',
                'option_a' => 'My bike is stolen.',
                'option_b' => 'My bike was stolen.',
                'option_c' => 'My bike has been stolen.',
                'option_d' => 'My bike is being stolen.',
                'option_e' => 'My bike was being stolen.',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Which one is a request?',
                'option_a' => 'I am a doctor.',
                'option_b' => 'Could you help me, please?',
                'option_c' => 'She is beautiful.',
                'option_d' => 'Go away!',
                'option_e' => 'What is your name?',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The synonym of "Reliable" is...',
                'option_a' => 'Doubtful',
                'option_b' => 'Trustworthy',
                'option_c' => 'Weak',
                'option_d' => 'False',
                'option_e' => 'Late',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => '"He ... play the piano very well when he was a child."',
                'option_a' => 'can',
                'option_b' => 'could',
                'option_c' => 'is',
                'option_d' => 'will',
                'option_e' => 'does',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'What does "ASAP" stand for?',
                'option_a' => 'Always Stay At Peace',
                'option_b' => 'As Soon As Possible',
                'option_c' => 'As Simple As Processing',
                'option_d' => 'All Students Are Powerful',
                'option_e' => 'After school At Park',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Choose the correct preposition: "The meeting starts ... 9 o\'clock."',
                'option_a' => 'in',
                'option_b' => 'on',
                'option_c' => 'at',
                'option_d' => 'by',
                'option_e' => 'for',
                'correct_answer' => 'c',
                'order' => 48
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'The synonym of "Essential" is...',
                'option_a' => 'Extra',
                'option_b' => 'Necessary',
                'option_c' => 'Minor',
                'option_d' => 'Cheap',
                'option_e' => 'Old',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Literasi Bahasa Inggris',
                'question_text' => 'Which one is an opinion?',
                'option_a' => 'Water boils at 100 degrees Celsius.',
                'option_b' => 'The earth revolves around the sun.',
                'option_c' => 'English is the most interesting subject.',
                'option_d' => 'Elephants are large mammals.',
                'option_e' => 'There are 12 months in a year.',
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
