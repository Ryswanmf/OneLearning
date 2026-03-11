<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmpTryout;
use App\Models\Question;

class SmpUsQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmpTryout::where('name', 'Paket Intensif Ujian Sekolah SMP')->first();
        
        if (!$tryout) {
            $tryout = SmpTryout::create([
                'name' => 'Paket Intensif Ujian Sekolah SMP',
                'subject' => 'Semua Mapel',
                'question_count' => 50,
                'duration_minutes' => 120,
                'price' => 30000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // BAHASA INDONESIA (1-10)
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Makna kata "Evolusi" dalam teks biologi adalah...',
                'option_a' => 'Perubahan cepat',
                'option_b' => 'Perubahan secara perlahan',
                'option_c' => 'Keadaan statis',
                'option_d' => 'Kemunduran',
                'option_e' => 'Kepunahan',
                'correct_answer' => 'b',
                'order' => 1
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Ide pokok paragraf pertama biasanya disebut...',
                'option_a' => 'Gagasan pendukung',
                'option_b' => 'Gagasan utama',
                'option_c' => 'Kalimat penjelas',
                'option_d' => 'Kesimpulan',
                'option_e' => 'Ringkasan',
                'correct_answer' => 'b',
                'order' => 2
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Kalimat efektif di bawah ini adalah...',
                'option_a' => 'Para tamu-tamu sudah datang.',
                'option_b' => 'Tamu-tamu sudah datang.',
                'option_c' => 'Banyak tamu-tamu yang hadir.',
                'option_d' => 'Semua para tamu duduk rapi.',
                'option_e' => 'Tamu-tamu semuanya sudah pada datang.',
                'correct_answer' => 'b',
                'order' => 3
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Tujuan teks eksplanasi adalah...',
                'option_a' => 'Menceritakan khayalan',
                'option_b' => 'Menjelaskan proses terjadinya fenomena',
                'option_c' => 'Mempromosikan barang',
                'option_d' => 'Menghibur pembaca',
                'option_e' => 'Memberikan perintah',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Bagian penutup dalam sebuah pidato berisi...',
                'option_a' => 'Ucapan syukur',
                'option_b' => 'Salam pembuka',
                'option_c' => 'Harapan dan permohonan maaf',
                'option_d' => 'Isi materi',
                'option_e' => 'Data statistik',
                'correct_answer' => 'c',
                'order' => 5
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Ciri-ciri teks laporan hasil observasi adalah...',
                'option_a' => 'Subjektif',
                'option_b' => 'Berdasarkan fakta',
                'option_c' => 'Berisi opini penulis',
                'option_d' => 'Menggunakan bahasa kiasan',
                'option_e' => 'Ditulis sebagai dongeng',
                'correct_answer' => 'b',
                'order' => 6
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Konjungsi yang menyatakan hubungan pertentangan adalah...',
                'option_a' => 'Dan',
                'option_b' => 'Tetapi',
                'option_c' => 'Karena',
                'option_d' => 'Sehingga',
                'option_e' => 'Atau',
                'correct_answer' => 'b',
                'order' => 7
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Penulisan alamat surat yang benar adalah...',
                'option_a' => 'Yth. Bpk. Andi',
                'option_b' => 'Kepada Yth Bapak Andi',
                'option_c' => 'Yth Bapak Andi',
                'option_d' => 'Yth. Bapak Andi',
                'option_e' => 'Kepada Yth. Bapak Andi',
                'correct_answer' => 'd',
                'order' => 8
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Sinonim dari kata "Akurat" adalah...',
                'option_a' => 'Sesuai',
                'option_b' => 'Tepat',
                'option_c' => 'Indah',
                'option_d' => 'Banyak',
                'option_e' => 'Cepat',
                'correct_answer' => 'b',
                'order' => 9
            ],
            [
                'topic' => 'Bahasa Indonesia',
                'question_text' => 'Kalimat pasif adalah kalimat yang...',
                'option_a' => 'Subjeknya melakukan tindakan',
                'option_b' => 'Subjeknya dikenai tindakan',
                'option_c' => 'Menggunakan kata "jangan"',
                'option_d' => 'Berisi pertanyaan',
                'option_e' => 'Berakhir dengan tanda seru',
                'correct_answer' => 'b',
                'order' => 10
            ],

            // MATEMATIKA (11-20)
            [
                'topic' => 'Matematika',
                'question_text' => 'Himpunan penyelesaian dari 2x - 3 < 7 adalah...',
                'option_a' => 'x < 2',
                'option_b' => 'x < 5',
                'option_c' => 'x < 10',
                'option_d' => 'x > 5',
                'option_e' => 'x > 2',
                'correct_answer' => 'b',
                'order' => 11
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Persamaan garis yang melalui (0,0) dengan gradien 2 adalah...',
                'option_a' => 'y = x + 2',
                'option_b' => 'y = 2x',
                'option_c' => 'y = x/2',
                'option_d' => 'y = -2x',
                'option_e' => 'x = 2y',
                'correct_answer' => 'b',
                'order' => 12
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Luas permukaan bola dengan jari-jari 7 cm adalah... (π=22/7)',
                'option_a' => '154 cm²',
                'option_b' => '616 cm²',
                'option_c' => '308 cm²',
                'option_d' => '1.232 cm²',
                'option_e' => '77 cm²',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Median dari data: 5, 6, 7, 8, 9, 10 adalah...',
                'option_a' => '7',
                'option_b' => '7,5',
                'option_c' => '8',
                'option_d' => '8,5',
                'option_e' => '7,8',
                'correct_answer' => 'b',
                'order' => 14
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Hasil dari √32 + √18 - √50 adalah...',
                'option_a' => '2√2',
                'option_b' => '3√2',
                'option_c' => '4√2',
                'option_d' => '5√2',
                'option_e' => '7√2',
                'correct_answer' => 'a',
                'order' => 15
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Banyaknya anggota himpunan kuasa dari A = {a, b, c} adalah...',
                'option_a' => '3',
                'option_b' => '6',
                'option_c' => '8',
                'option_d' => '9',
                'option_e' => '4',
                'correct_answer' => 'c',
                'order' => 16
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Sebuah kerucut memiliki r=7 cm dan t=24 cm. Panjang garis pelukisnya (s) adalah...',
                'option_a' => '25 cm',
                'option_b' => '26 cm',
                'option_c' => '31 cm',
                'option_d' => '30 cm',
                'option_e' => '20 cm',
                'correct_answer' => 'a',
                'order' => 17
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Peluang munculnya mata dadu berjumlah 7 pada pelemparan dua dadu adalah...',
                'option_a' => '1/6',
                'option_b' => '1/12',
                'option_c' => '1/36',
                'option_d' => '7/36',
                'option_e' => '5/36',
                'correct_answer' => 'a',
                'order' => 18
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Besar sudut pelurus dari 120° adalah...',
                'option_a' => '30°',
                'option_b' => '60°',
                'option_c' => '90°',
                'option_d' => '180°',
                'option_e' => '240°',
                'correct_answer' => 'b',
                'order' => 19
            ],
            [
                'topic' => 'Matematika',
                'question_text' => 'Volume tabung dengan r=10 cm dan t=14 cm adalah...',
                'option_a' => '4.400 cm³',
                'option_b' => '440 cm³',
                'option_c' => '1.400 cm³',
                'option_d' => '2.200 cm³',
                'option_e' => '700 cm³',
                'correct_answer' => 'a',
                'order' => 20
            ],

            // IPA (21-30)
            [
                'topic' => 'IPA',
                'question_text' => 'Sifat bayangan pada cermin datar adalah...',
                'option_a' => 'Nyata, terbalik',
                'option_b' => 'Maya, tegak, sama besar',
                'option_c' => 'Nyata, diperkecil',
                'option_d' => 'Maya, terbalik',
                'option_e' => 'Nyata, tegak',
                'correct_answer' => 'b',
                'order' => 21
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Organ yang berfungsi sebagai tempat pembentukan sel darah merah pada orang dewasa adalah...',
                'option_a' => 'Hati',
                'option_b' => 'Sumsum tulang merah',
                'option_c' => 'Ginjal',
                'option_d' => 'Jantung',
                'option_e' => 'Paru-paru',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Zat warna hijau pada daun disebut...',
                'option_a' => 'Klorofil',
                'option_b' => 'Stomata',
                'option_c' => 'Floem',
                'option_d' => 'Xilem',
                'option_e' => 'Epidermis',
                'correct_answer' => 'a',
                'order' => 23
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Peristiwa meluruhnya dinding rahim pada wanita disebut...',
                'option_a' => 'Fertilisasi',
                'option_b' => 'Menstruasi',
                'option_c' => 'Ovulasi',
                'option_d' => 'Implantasi',
                'option_e' => 'Kopulasi',
                'correct_answer' => 'b',
                'order' => 24
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Contoh peristiwa pemuaian adalah...',
                'option_a' => 'Es mencair',
                'option_b' => 'Rel kereta api melengkung di siang hari',
                'option_c' => 'Air mendidih',
                'option_d' => 'Kapur barus mengecil',
                'option_e' => 'Uap air mengembun',
                'correct_answer' => 'b',
                'order' => 25
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Alat yang digunakan untuk mengukur kuat arus listrik adalah...',
                'option_a' => 'Voltmeter',
                'option_b' => 'Amperemeter',
                'option_c' => 'Ohmmeter',
                'option_d' => 'Termometer',
                'option_e' => 'Barometer',
                'correct_answer' => 'b',
                'order' => 26
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Penyakit diabetes melitus disebabkan oleh kekurangan hormon...',
                'option_a' => 'Adrenalin',
                'option_b' => 'Insulin',
                'option_c' => 'Tiroksin',
                'option_d' => 'Estrogen',
                'option_e' => 'Testosteron',
                'correct_answer' => 'b',
                'order' => 27
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Bagian otak yang berfungsi sebagai pusat keseimbangan adalah...',
                'option_a' => 'Otak besar',
                'option_b' => 'Otak kecil (Cerebellum)',
                'option_c' => 'Sumsum tulang belakang',
                'option_d' => 'Batang otak',
                'option_e' => 'Talamus',
                'correct_answer' => 'b',
                'order' => 28
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Jenis asam yang terdapat pada lambung adalah...',
                'option_a' => 'Asam sitrat',
                'option_b' => 'Asam klorida (HCl)',
                'option_c' => 'Asam sulfat',
                'option_d' => 'Asam cuka',
                'option_e' => 'Asam asetat',
                'correct_answer' => 'b',
                'order' => 29
            ],
            [
                'topic' => 'IPA',
                'question_text' => 'Komponen biotik yang berperan sebagai pengurai adalah...',
                'option_a' => 'Padi',
                'option_b' => 'Jamur dan bakteri',
                'option_c' => 'Belalang',
                'option_d' => 'Burung elang',
                'option_e' => 'Ular',
                'correct_answer' => 'b',
                'order' => 30
            ],

            // IPS (31-40)
            [
                'topic' => 'IPS',
                'question_text' => 'Kerajaan Hindu tertua di Indonesia adalah...',
                'option_a' => 'Majapahit',
                'option_b' => 'Kutai',
                'option_c' => 'Tarumanegara',
                'option_d' => 'Sriwijaya',
                'option_e' => 'Mataram',
                'correct_answer' => 'b',
                'order' => 31
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Garis khayal yang membagi bumi menjadi dua bagian Utara dan Selatan disebut...',
                'option_a' => 'Garis bujur',
                'option_b' => 'Garis khatulistiwa (Ekuator)',
                'option_c' => 'Garis meredian',
                'option_d' => 'Garis lintang 0',
                'option_e' => 'Garis lintang 90',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'ASEAN didirikan melalui deklarasi...',
                'option_a' => 'Bogor',
                'option_b' => 'Bangkok',
                'option_c' => 'Bandung',
                'option_d' => 'Jakarta',
                'option_e' => 'Manila',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Benua terkecil di dunia adalah...',
                'option_a' => 'Asia',
                'option_b' => 'Australia',
                'option_c' => 'Eropa',
                'option_d' => 'Afrika',
                'option_e' => 'Antartika',
                'correct_answer' => 'b',
                'order' => 34
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Tujuan utama VOC di Indonesia adalah...',
                'option_a' => 'Membangun sekolah',
                'option_b' => 'Monopoli perdagangan rempah-rempah',
                'option_c' => 'Menyebarkan agama',
                'option_d' => 'Membangun infrastruktur',
                'option_e' => 'Membantu raja-raja lokal',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Mata uang negara Thailand adalah...',
                'option_a' => 'Ringgit',
                'option_b' => 'Baht',
                'option_c' => 'Peso',
                'option_d' => 'Dong',
                'option_e' => 'Kip',
                'correct_answer' => 'b',
                'order' => 36
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Candi Borobudur dibangun pada masa dinasti...',
                'option_a' => 'Sanjaya',
                'option_b' => 'Syailendra',
                'option_c' => 'Kediri',
                'option_d' => 'Singasari',
                'option_e' => 'Ghazni',
                'correct_answer' => 'b',
                'order' => 37
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Gunung tertinggi di Pulau Jawa adalah...',
                'option_a' => 'Merapi',
                'option_b' => 'Semeru',
                'option_c' => 'Slamet',
                'option_d' => 'Bromo',
                'option_e' => 'Gede',
                'correct_answer' => 'b',
                'order' => 38
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Peristiwa Rengasdengklok terjadi sebelum...',
                'option_a' => 'Sumpah Pemuda',
                'option_b' => 'Proklamasi Kemerdekaan RI',
                'option_c' => 'Pertempuran Surabaya',
                'option_d' => 'Agresi Militer Belanda',
                'option_e' => 'Konferensi Meja Bundar',
                'correct_answer' => 'b',
                'order' => 39
            ],
            [
                'topic' => 'IPS',
                'question_text' => 'Organisasi pergerakan nasional pertama di Indonesia adalah...',
                'option_a' => 'Sarekat Islam',
                'option_b' => 'Budi Utomo',
                'option_c' => 'Indische Partij',
                'option_d' => 'Muhammadiyah',
                'option_e' => 'PNI',
                'correct_answer' => 'b',
                'order' => 40
            ],

            // BAHASA INGGRIS (41-50)
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Teacher: "Attention, please!" Students: "..."',
                'option_a' => 'Yes, Sir.',
                'option_b' => 'Thank you.',
                'option_c' => 'Good morning.',
                'option_d' => 'I am sorry.',
                'option_e' => 'You are welcome.',
                'correct_answer' => 'a',
                'order' => 41
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'A: "I think the test was very easy." B: "..." (Agreeing)',
                'option_a' => 'I don\'t think so.',
                'option_b' => 'I agree with you.',
                'option_c' => 'I am not sure.',
                'option_d' => 'I disagree.',
                'option_e' => 'That\'s wrong.',
                'correct_answer' => 'b',
                'order' => 42
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'What is the synonym of "Silent"?',
                'option_a' => 'Noisy',
                'option_b' => 'Quiet',
                'option_c' => 'Loud',
                'option_d' => 'Busy',
                'option_e' => 'Active',
                'correct_answer' => 'b',
                'order' => 43
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Where can you see a "NO LITTERING" sign?',
                'option_a' => 'In a library',
                'option_b' => 'In a park',
                'option_c' => 'In a cinema',
                'option_d' => 'In a hospital',
                'option_e' => 'Everywhere to keep clean',
                'correct_answer' => 'e',
                'order' => 44
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'She ... a beautiful song last night.',
                'option_a' => 'sing',
                'option_b' => 'sang',
                'option_c' => 'sings',
                'option_d' => 'sung',
                'option_e' => 'singing',
                'correct_answer' => 'b',
                'order' => 45
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'A person who cuts hair is a ...',
                'option_a' => 'tailor',
                'option_b' => 'barber',
                'option_c' => 'butcher',
                'option_d' => 'baker',
                'option_e' => 'carpenter',
                'correct_answer' => 'b',
                'order' => 46
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'If you want to go to another floor in a building quickly, you use a ...',
                'option_a' => 'stairs',
                'option_b' => 'lift/elevator',
                'option_c' => 'window',
                'option_d' => 'door',
                'option_e' => 'roof',
                'correct_answer' => 'b',
                'order' => 47
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'We must ... early to school.',
                'option_a' => 'comes',
                'option_b' => 'come',
                'option_c' => 'coming',
                'option_d' => 'came',
                'option_e' => 'is come',
                'correct_answer' => 'b',
                'order' => 48
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'They ... not at home right now.',
                'option_a' => 'is',
                'option_b' => 'are',
                'option_c' => 'am',
                'option_d' => 'was',
                'option_e' => 'were',
                'correct_answer' => 'b',
                'order' => 49
            ],
            [
                'topic' => 'Bahasa Inggris',
                'question_text' => 'Which one is a vegetable?',
                'option_a' => 'Mango',
                'option_b' => 'Carrot',
                'option_c' => 'Grapes',
                'option_d' => 'Orange',
                'option_e' => 'Pineapple',
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
