<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SdTryout;
use App\Models\Question;

class SdAnQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SdTryout::where('name', 'Paket Lengkap Asesmen Nasional SD')->first();
        
        if (!$tryout) {
            $tryout = SdTryout::create([
                'name' => 'Paket Lengkap Asesmen Nasional SD',
                'subject' => 'Semua Mapel',
                'question_count' => 50,
                'duration_minutes' => 120,
                'price' => 25000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // LITERASI MEMBACA (1-25)
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Bacaan: "Semut dan Belalang". Semut mengumpulkan makanan di musim panas, sementara belalang hanya bermain musik. Saat musim dingin tiba, belalang kelaparan. Apa pesan moral dari cerita ini?',
                'option_a' => 'Bermain musik itu dilarang.',
                'option_b' => 'Kita harus rajin bekerja untuk masa depan.',
                'option_c' => 'Semut itu pelit.',
                'option_d' => 'Musim dingin itu menyebalkan.',
                'option_e' => 'Belalang adalah pemusik yang hebat.',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Siapakah yang merasa kelaparan saat musim dingin tiba dalam cerita Semut dan Belalang?',
                'option_a' => 'Semut',
                'option_b' => 'Belalang',
                'option_c' => 'Keluarga Semut',
                'option_d' => 'Burung',
                'option_e' => 'Petani',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Apa yang dilakukan semut di musim panas?',
                'option_a' => 'Tidur siang',
                'option_b' => 'Bermain musik',
                'option_c' => 'Mengumpulkan makanan',
                'option_d' => 'Pergi berlibur',
                'option_e' => 'Membangun rumah baru',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Bacaan: "Menjaga Kebersihan Sekolah". Setiap hari Sabtu, siswa SD Harapan melakukan kerja bakti. Mereka membersihkan selokan, menyapu halaman, dan membuang sampah. Mengapa mereka melakukan kerja bakti?',
                'option_a' => 'Agar dapat nilai bagus.',
                'option_b' => 'Agar lingkungan sekolah bersih dan sehat.',
                'option_c' => 'Karena diperintah oleh kepala sekolah.',
                'option_d' => 'Agar cepat pulang.',
                'option_e' => 'Untuk mencari harta karun.',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Kapan siswa SD Harapan melakukan kerja bakti?',
                'option_a' => 'Senin',
                'option_b' => 'Jumat',
                'option_c' => 'Sabtu',
                'option_d' => 'Minggu',
                'option_e' => 'Setiap hari',
                'correct_answer' => 'c',
                'order' => 5
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Antonim dari kata "Bersih" dalam bacaan di atas adalah...',
                'option_a' => 'Rapi',
                'option_b' => 'Indah',
                'option_c' => 'Kotor',
                'option_d' => 'Wangi',
                'option_e' => 'Bening',
                'correct_answer' => 'c',
                'order' => 6
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Ide pokok dari bacaan "Menjaga Kebersihan Sekolah" adalah...',
                'option_a' => 'Cara menyapu halaman.',
                'option_b' => 'Kegiatan kerja bakti di sekolah.',
                'option_c' => 'Manfaat selokan yang bersih.',
                'option_d' => 'Hobi siswa SD Harapan.',
                'option_e' => 'Libur di hari Sabtu.',
                'correct_answer' => 'b',
                'order' => 7
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Ibu sedang (masak) di dapur. Imbuhan yang tepat untuk kata dalam kurung adalah...',
                'option_a' => 'Me-',
                'option_b' => 'Mem-',
                'option_c' => 'Men-',
                'option_d' => 'Meny-',
                'option_e' => 'Ber-',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Kata yang penulisannya baku adalah...',
                'option_a' => 'Apotek',
                'option_b' => 'Apotik',
                'option_c' => 'Ijin',
                'option_d' => 'Negri',
                'option_e' => 'Antri',
                'correct_answer' => 'a',
                'order' => 9
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Puisi: "Matahari bersinar terang, menyapa pagi dengan riang." Suasana yang digambarkan adalah...',
                'option_a' => 'Sedih',
                'option_b' => 'Marah',
                'option_c' => 'Ceria',
                'option_d' => 'Takut',
                'option_e' => 'Sepi',
                'correct_answer' => 'c',
                'order' => 10
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Majas yang menyamakan benda mati seolah hidup seperti pada kalimat "Matahari menyapa pagi" disebut...',
                'option_a' => 'Hiperbola',
                'option_b' => 'Metafora',
                'option_c' => 'Personifikasi',
                'option_d' => 'Litotes',
                'option_e' => 'Sinekdok',
                'correct_answer' => 'c',
                'order' => 11
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Manakah kalimat perintah di bawah ini?',
                'option_a' => 'Ibu pergi ke pasar.',
                'option_b' => 'Siapa namamu?',
                'option_c' => 'Tolong ambilkan buku itu!',
                'option_d' => 'Wah, indahnya pemandangan ini!',
                'option_e' => 'Saya sedang makan.',
                'correct_answer' => 'c',
                'order' => 12
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Tanda baca yang tepat untuk mengakhiri kalimat tanya adalah...',
                'option_a' => 'Titik (.)',
                'option_b' => 'Koma (,)',
                'option_c' => 'Tanda tanya (?)',
                'option_d' => 'Tanda seru (!)',
                'option_e' => 'Titik dua (:)',
                'correct_answer' => 'c',
                'order' => 13
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Sinonim dari kata "Senang" adalah...',
                'option_a' => 'Duka',
                'option_b' => 'Bahagia',
                'option_c' => 'Lelah',
                'option_d' => 'Pintar',
                'option_e' => 'Cemas',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Susunlah kata menjadi kalimat: "membaca - perpustakaan - di - Adi - buku".',
                'option_a' => 'Membaca Adi buku di perpustakaan.',
                'option_b' => 'Di perpustakaan Adi buku membaca.',
                'option_c' => 'Adi membaca buku di perpustakaan.',
                'option_d' => 'Buku Adi membaca di perpustakaan.',
                'option_e' => 'Perpustakaan di Adi membaca buku.',
                'correct_answer' => 'c',
                'order' => 15
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Tokoh utama dalam sebuah cerita biasanya memiliki watak...',
                'option_a' => 'Antagonis',
                'option_b' => 'Protagonis',
                'option_c' => 'Tritagonis',
                'option_d' => 'Sampingan',
                'option_e' => 'Latar',
                'correct_answer' => 'b',
                'order' => 16
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Kalimat yang mengandung opini adalah...',
                'option_a' => 'Indonesia adalah negara kepulauan.',
                'option_b' => 'Presiden pertama Indonesia adalah Soekarno.',
                'option_c' => 'Menurut saya, bakso itu sangat pedas.',
                'option_d' => 'Ibu kota Indonesia adalah Jakarta.',
                'option_e' => 'Satu minggu terdiri dari tujuh hari.',
                'correct_answer' => 'c',
                'order' => 17
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Alur cerita yang menceritakan masa lalu disebut alur...',
                'option_a' => 'Maju',
                'option_b' => 'Mundur',
                'option_c' => 'Campuran',
                'option_d' => 'Melingkar',
                'option_e' => 'Statis',
                'correct_answer' => 'b',
                'order' => 18
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Latar tempat dalam kalimat "Kancil mencuri timun di kebun pak tani" adalah...',
                'option_a' => 'Kancil',
                'option_b' => 'Mencuri',
                'option_c' => 'Timun',
                'option_d' => 'Kebun pak tani',
                'option_e' => 'Pak tani',
                'correct_answer' => 'd',
                'order' => 19
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Kalimat yang menggunakan huruf kapital dengan benar adalah...',
                'option_a' => 'andi tinggal di Jakarta.',
                'option_b' => 'Andi tinggal di jakarta.',
                'option_c' => 'Andi tinggal di Jakarta.',
                'option_d' => 'andi tinggal di jakarta.',
                'option_e' => 'Andi Tinggal Di Jakarta.',
                'correct_answer' => 'c',
                'order' => 20
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Ringkasan cerita harus dibuat berdasarkan...',
                'option_a' => 'Imajinasi pembaca',
                'option_b' => 'Judul saja',
                'option_c' => 'Urutan kejadian dalam cerita',
                'option_d' => 'Gambar sampul',
                'option_e' => 'Daftar isi',
                'correct_answer' => 'c',
                'order' => 21
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Kalimat sapaan yang sopan kepada guru adalah...',
                'option_a' => 'Halo teman!',
                'option_b' => 'Woi Pak Guru!',
                'option_c' => 'Selamat pagi, Bu Guru.',
                'option_d' => 'Mau ke mana, Pak?',
                'option_e' => 'Minta uang, Bu.',
                'correct_answer' => 'c',
                'order' => 22
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Penggunaan kata depan "di" yang menunjukkan tempat harus ditulis...',
                'option_a' => 'Digabung',
                'option_b' => 'Dipisah',
                'option_c' => 'Pakai tanda hubung',
                'option_d' => 'Huruf besar semua',
                'option_e' => 'Miring',
                'correct_answer' => 'b',
                'order' => 23
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Contoh kata ulang adalah...',
                'option_a' => 'Makan-makan',
                'option_b' => 'Memakan',
                'option_c' => 'Dimakan',
                'option_d' => 'Pemakan',
                'option_e' => 'Makanan',
                'correct_answer' => 'a',
                'order' => 24
            ],
            [
                'topic' => 'Literasi Membaca',
                'question_text' => 'Isi laporan pengamatan biasanya berupa...',
                'option_a' => 'Dongeng',
                'option_b' => 'Khayalan',
                'option_c' => 'Fakta yang dilihat',
                'option_d' => 'Puisi',
                'option_e' => 'Iklan',
                'correct_answer' => 'c',
                'order' => 25
            ],

            // NUMERASI (26-50)
            [
                'topic' => 'Numerasi',
                'question_text' => 'Andi memiliki 15 kelereng, lalu diberi ayah 10 kelereng. Jumlah kelereng Andi sekarang adalah...',
                'option_a' => '20',
                'option_b' => '25',
                'option_c' => '30',
                'option_d' => '35',
                'option_e' => '15',
                'correct_answer' => 'b',
                'order' => 26
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Hasil dari 12 x 5 adalah...',
                'option_a' => '50',
                'option_b' => '60',
                'option_c' => '70',
                'option_d' => '80',
                'option_e' => '45',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Berapakah hasil dari 100 : 4?',
                'option_a' => '20',
                'option_b' => '25',
                'option_c' => '30',
                'option_d' => '40',
                'option_e' => '50',
                'correct_answer' => 'b',
                'order' => 28
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Sebuah roti dipotong menjadi 4 bagian sama besar. Satu bagian bernilai...',
                'option_a' => '1/2',
                'option_b' => '1/3',
                'option_c' => '1/4',
                'option_d' => '1/5',
                'option_e' => '1/8',
                'correct_answer' => 'c',
                'order' => 29
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Manakah yang lebih besar, 1/2 atau 1/4?',
                'option_a' => '1/2',
                'option_b' => '1/4',
                'option_c' => 'Sama besar',
                'option_d' => 'Tidak bisa ditentukan',
                'option_e' => 'Keduanya nol',
                'correct_answer' => 'a',
                'order' => 30
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Bangun datar yang memiliki 3 sisi adalah...',
                'option_a' => 'Persegi',
                'option_b' => 'Lingkaran',
                'option_c' => 'Segitiga',
                'option_d' => 'Trapesium',
                'option_e' => 'Layang-layang',
                'correct_answer' => 'c',
                'order' => 31
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Keliling persegi dengan sisi 5 cm adalah...',
                'option_a' => '10 cm',
                'option_b' => '15 cm',
                'option_c' => '20 cm',
                'option_d' => '25 cm',
                'option_e' => '50 cm',
                'correct_answer' => 'c',
                'order' => 32
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Luas persegi panjang dengan p=6 cm dan l=4 cm adalah...',
                'option_a' => '10 cm²',
                'option_b' => '20 cm²',
                'option_c' => '24 cm²',
                'option_d' => '30 cm²',
                'option_e' => '12 cm²',
                'correct_answer' => 'c',
                'order' => 33
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Jam menunjukkan pukul 09.00. Dua jam kemudian adalah pukul...',
                'option_a' => '10.00',
                'option_b' => '11.00',
                'option_c' => '12.00',
                'option_d' => '07.00',
                'option_e' => '01.00',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Uang Rp 5.000 + Rp 2.000 + Rp 500 = ...',
                'option_a' => 'Rp 7.000',
                'option_b' => 'Rp 7.500',
                'option_c' => 'Rp 8.000',
                'option_d' => 'Rp 6.500',
                'option_e' => 'Rp 10.000',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Satu kuintal sama dengan berapa kilogram?',
                'option_a' => '10 kg',
                'option_b' => '50 kg',
                'option_c' => '100 kg',
                'option_d' => '1.000 kg',
                'option_e' => '1 kg',
                'correct_answer' => 'c',
                'order' => 36
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Pola bilangan: 2, 4, 6, 8, ... Angka selanjutnya adalah?',
                'option_a' => '9',
                'option_b' => '10',
                'option_c' => '11',
                'option_d' => '12',
                'option_e' => '14',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Nilai tempat angka 7 pada bilangan 7.425 adalah...',
                'option_a' => 'Satuan',
                'option_b' => 'Puluhan',
                'option_c' => 'Ratusan',
                'option_d' => 'Ribuan',
                'option_e' => 'Puluh ribuan',
                'correct_answer' => 'd',
                'order' => 38
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Bilangan 250 jika dibulatkan ke ratusan terdekat menjadi...',
                'option_a' => '200',
                'option_b' => '300',
                'option_c' => '250',
                'option_d' => '100',
                'option_e' => '400',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Banyaknya rusuk pada kubus adalah...',
                'option_a' => '6',
                'option_b' => '8',
                'option_c' => '10',
                'option_d' => '12',
                'option_e' => '4',
                'correct_answer' => 'd',
                'order' => 40
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Ibu membeli 2 kg gula seharga Rp 15.000 per kg. Total yang harus dibayar adalah...',
                'option_a' => 'Rp 15.000',
                'option_b' => 'Rp 20.000',
                'option_c' => 'Rp 30.000',
                'option_d' => 'Rp 45.000',
                'option_e' => 'Rp 60.000',
                'correct_answer' => 'c',
                'order' => 41
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Diagram batang menunjukkan tinggi badan Budi 140 cm. Jika rata-rata tinggi kelas 135 cm, maka Budi...',
                'option_a' => 'Lebih pendek dari rata-rata',
                'option_b' => 'Sama dengan rata-rata',
                'option_c' => 'Lebih tinggi dari rata-rata',
                'option_d' => 'Paling pendek',
                'option_e' => 'Paling tinggi',
                'correct_answer' => 'c',
                'order' => 42
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Peluang munculnya angka ganjil pada sebuah dadu adalah...',
                'option_a' => '1/6',
                'option_b' => '2/6',
                'option_c' => '3/6',
                'option_d' => '4/6',
                'option_e' => '5/6',
                'correct_answer' => 'c',
                'order' => 43
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Hasil dari 50% dari 1.000 adalah...',
                'option_a' => '100',
                'option_b' => '250',
                'option_c' => '500',
                'option_d' => '750',
                'option_e' => '50',
                'correct_answer' => 'c',
                'order' => 44
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Sudut siku-siku besarnya...',
                'option_a' => '45 derajat',
                'option_b' => '90 derajat',
                'option_c' => '180 derajat',
                'option_d' => '360 derajat',
                'option_e' => '0 derajat',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Berapakah jumlah titik sudut pada segitiga?',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => '5',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Jika x + 5 = 12, maka x adalah...',
                'option_a' => '5',
                'option_b' => '7',
                'option_c' => '10',
                'option_d' => '12',
                'option_e' => '17',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Satu jam terdiri dari berapa detik?',
                'option_a' => '60',
                'option_b' => '1.200',
                'option_c' => '3.600',
                'option_d' => '24',
                'option_e' => '360',
                'correct_answer' => 'c',
                'order' => 48
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Luas lingkaran dengan jari-jari 7 cm adalah... (π = 22/7)',
                'option_a' => '44 cm²',
                'option_b' => '154 cm²',
                'option_c' => '22 cm²',
                'option_d' => '49 cm²',
                'option_e' => '100 cm²',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Numerasi',
                'question_text' => 'Median dari data: 2, 4, 6, 8, 10 adalah...',
                'option_a' => '4',
                'option_b' => '6',
                'option_c' => '8',
                'option_d' => '5',
                'option_e' => '2',
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
