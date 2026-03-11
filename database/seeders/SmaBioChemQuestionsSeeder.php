<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmaTryout;
use App\Models\Question;

class SmaBioChemQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        $tryout = SmaTryout::where('name', 'Tryout Biologi & Kimia SMA')->first();
        
        if (!$tryout) {
            $tryout = SmaTryout::create([
                'name' => 'Tryout Biologi & Kimia SMA',
                'subject' => 'Biologi & Kimia',
                'question_count' => 50,
                'duration_minutes' => 90,
                'price' => 20000,
                'status' => 'published'
            ]);
        }

        $tryout->questions()->delete();

        $questions = [
            // BIOLOGI (1-25)
            [
                'topic' => 'Biologi - Sel',
                'question_text' => 'Organel sel yang berfungsi sebagai tempat respirasi sel untuk menghasilkan energi (ATP) adalah...',
                'option_a' => 'Ribosom',
                'option_b' => 'Lisosom',
                'option_c' => 'Mitokondria',
                'option_d' => 'Badan Golgi',
                'option_e' => 'Retikulum Endoplasma',
                'correct_answer' => 'c',
                'order' => 1
            ],
            [
                'topic' => 'Biologi - Jaringan Tumbuhan',
                'question_text' => 'Jaringan tumbuhan yang berfungsi untuk mengangkut air dan mineral dari akar ke daun adalah...',
                'option_a' => 'Xilem',
                'option_b' => 'Floem',
                'option_c' => 'Epidermis',
                'option_d' => 'Parenkim',
                'option_e' => 'Kambium',
                'correct_answer' => 'a',
                'order' => 2
            ],
            [
                'topic' => 'Biologi - Metabolisme',
                'question_text' => 'Enzim yang berfungsi untuk memecah amilum menjadi maltosa di dalam mulut adalah...',
                'option_a' => 'Pepsin',
                'option_b' => 'Lipase',
                'option_c' => 'Amilase (Ptialin)',
                'option_d' => 'Tripsin',
                'option_e' => 'Renin',
                'correct_answer' => 'c',
                'order' => 3
            ],
            [
                'topic' => 'Biologi - Fotosintesis',
                'question_text' => 'Reaksi terang dalam fotosintesis terjadi di bagian kloroplas yang disebut...',
                'option_a' => 'Stroma',
                'option_b' => 'Grana (Tila koid)',
                'option_c' => 'Membran luar',
                'option_d' => 'Matriks',
                'option_e' => 'Vakuola',
                'correct_answer' => 'b',
                'order' => 4
            ],
            [
                'topic' => 'Biologi - Genetika',
                'question_text' => 'Unit terkecil pembawa informasi genetik yang tersusun atas DNA dan protein histon disebut...',
                'option_a' => 'Gen',
                'option_b' => 'Kromosom',
                'option_c' => 'Nukleotida',
                'option_d' => 'Kromatid',
                'option_e' => 'Sentromer',
                'correct_answer' => 'b',
                'order' => 5
            ],
            [
                'topic' => 'Biologi - Pembelahan Sel',
                'question_text' => 'Fase pembelahan mitosis di mana kromatid bersaudara ditarik ke kutub yang berlawanan adalah...',
                'option_a' => 'Profase',
                'option_b' => 'Metafase',
                'option_c' => 'Anafase',
                'option_d' => 'Telofase',
                'option_e' => 'Interfase',
                'correct_answer' => 'c',
                'order' => 6
            ],
            [
                'topic' => 'Biologi - Hereditas',
                'question_text' => 'Persilangan monohibrid dominan penuh antara mawar merah (MM) dengan mawar putih (mm) akan menghasilkan keturunan F1 dengan fenotipe...',
                'option_a' => '100% Merah',
                'option_b' => '100% Putih',
                'option_c' => '50% Merah, 50% Putih',
                'option_d' => '100% Merah Muda (Intermediet)',
                'option_e' => '75% Merah, 25% Putih',
                'correct_answer' => 'a',
                'order' => 7
            ],
            [
                'topic' => 'Biologi - Sistem Pencernaan',
                'question_text' => 'Penyerapan sari-sari makanan terjadi di bagian...',
                'option_a' => 'Lambung',
                'option_b' => 'Usus halus (Ileum)',
                'option_c' => 'Usus besar',
                'option_d' => 'Kerongkongan',
                'option_e' => 'Anus',
                'correct_answer' => 'b',
                'order' => 8
            ],
            [
                'topic' => 'Biologi - Sistem Pernapasan',
                'question_text' => 'Volume udara yang masih dapat dikeluarkan secara maksimal setelah ekspirasi biasa disebut...',
                'option_a' => 'Volume tidal',
                'option_b' => 'Volume cadangan inspirasi',
                'option_c' => 'Volume cadangan ekspirasi',
                'option_d' => 'Volume residu',
                'option_e' => 'Kapasitas vital',
                'correct_answer' => 'c',
                'order' => 9
            ],
            [
                'topic' => 'Biologi - Sistem Ekskresi',
                'question_text' => 'Bagian ginjal yang berfungsi untuk filtrasi darah membentuk urine primer adalah...',
                'option_a' => 'Tubulus kontortus proksimal',
                'option_b' => 'Glomerulus',
                'option_c' => 'Lengkung Henle',
                'option_d' => 'Pelvis renalis',
                'option_e' => 'Ureter',
                'correct_answer' => 'b',
                'order' => 10
            ],
            [
                'topic' => 'Biologi - Sistem Koordinasi',
                'question_text' => 'Hormon yang berfungsi untuk memicu kontraksi rahim saat persalinan adalah...',
                'option_a' => 'Prolaktin',
                'option_b' => 'Oksitosin',
                'option_c' => 'Estrogen',
                'option_d' => 'Progesteron',
                'option_e' => 'Adrenalin',
                'correct_answer' => 'b',
                'order' => 11
            ],
            [
                'topic' => 'Biologi - Sistem Imun',
                'question_text' => 'Sel darah putih yang berfungsi untuk memproduksi antibodi adalah...',
                'option_a' => 'Neutrofil',
                'option_b' => 'Monosit',
                'option_c' => 'Limfosit B',
                'option_d' => 'Limfosit T',
                'option_e' => 'Eosinofil',
                'correct_answer' => 'c',
                'order' => 12
            ],
            [
                'topic' => 'Biologi - Evolusi',
                'question_text' => 'Teori seleksi alam yang menyatakan bahwa individu yang paling adaptif yang akan bertahan hidup dikemukakan oleh...',
                'option_a' => 'Jean-Baptiste Lamarck',
                'option_b' => 'Charles Darwin',
                'option_c' => 'August Weismann',
                'option_d' => 'Gregor Mendel',
                'option_e' => 'Louis Pasteur',
                'correct_answer' => 'b',
                'order' => 13
            ],
            [
                'topic' => 'Biologi - Bioteknologi',
                'question_text' => 'Bioteknologi modern yang menggunakan prinsip penggabungan dua sel dari jaringan berbeda menjadi satu sel baru disebut...',
                'option_a' => 'Kloning',
                'option_b' => 'Inseminasi buatan',
                'option_c' => 'Hibridoma (Fusi sel)',
                'option_d' => 'Transplantasi inti',
                'option_e' => 'Kultur jaringan',
                'correct_answer' => 'c',
                'order' => 14
            ],
            [
                'topic' => 'Biologi - Ekosistem',
                'question_text' => 'Interaksi antara tanaman paku yang menempel pada pohon jati tanpa merugikan pohon tersebut disebut...',
                'option_a' => 'Mutualisme',
                'option_b' => 'Parasitisme',
                'option_c' => 'Komensalisme',
                'option_d' => 'Amensalisme',
                'option_e' => 'Predasi',
                'correct_answer' => 'c',
                'order' => 15
            ],
            [
                'topic' => 'Biologi - Sel',
                'question_text' => 'Struktur pada sel tumbuhan yang memberikan kekakuan dan bentuk sel tetap adalah...',
                'option_a' => 'Membran plasma',
                'option_b' => 'Sitosol',
                'option_c' => 'Dinding sel',
                'option_d' => 'Sitoskeleton',
                'option_e' => 'Vakuola',
                'correct_answer' => 'c',
                'order' => 16
            ],
            [
                'topic' => 'Biologi - Metabolisme',
                'question_text' => 'Pada tahap Glikolisis, satu molekul glukosa diubah menjadi...',
                'option_a' => '2 molekul Asam Piruvat',
                'option_b' => '2 molekul Asetil Ko-A',
                'option_c' => '2 molekul Asam Sitrat',
                'option_d' => '1 molekul ATP',
                'option_e' => '6 molekul CO2',
                'correct_answer' => 'a',
                'order' => 17
            ],
            [
                'topic' => 'Biologi - Sistem Reproduksi',
                'question_text' => 'Tempat terjadinya fertilisasi (pembuahan) pada sistem reproduksi wanita adalah...',
                'option_a' => 'Uterus',
                'option_b' => 'Vagina',
                'option_c' => 'Tuba Fallopi (Oviduk)',
                'option_d' => 'Ovarium',
                'option_e' => 'Serviks',
                'correct_answer' => 'c',
                'order' => 18
            ],
            [
                'topic' => 'Biologi - Klasifikasi',
                'question_text' => 'Urutan takson dari yang tertinggi ke terendah pada hewan adalah...',
                'option_a' => 'Kingdom - Filum - Kelas - Ordo - Famili - Genus - Spesies',
                'option_b' => 'Kingdom - Divisi - Kelas - Ordo - Famili - Genus - Spesies',
                'option_c' => 'Kingdom - Kelas - Filum - Ordo - Famili - Genus - Spesies',
                'option_d' => 'Spesies - Genus - Famili - Ordo - Kelas - Filum - Kingdom',
                'option_e' => 'Filum - Kingdom - Kelas - Ordo - Famili - Genus - Spesies',
                'correct_answer' => 'a',
                'order' => 19
            ],
            [
                'topic' => 'Biologi - Virus',
                'question_text' => 'Bagian tubuh virus yang berfungsi untuk melekatkan diri pada sel inang adalah...',
                'option_a' => 'Kapsid',
                'option_b' => 'Asam nukleat',
                'option_c' => 'Serabut ekor',
                'option_d' => 'Selubung protein',
                'option_e' => 'DNA/RNA',
                'correct_answer' => 'c',
                'order' => 20
            ],
            [
                'topic' => 'Biologi - Jaringan Hewan',
                'question_text' => 'Jaringan otot yang bekerja secara tidak sadar, memiliki inti satu di tengah, dan tidak memiliki lurik adalah...',
                'option_a' => 'Otot Lurik',
                'option_b' => 'Otot Jantung',
                'option_c' => 'Otot Polos',
                'option_d' => 'Otot Rangka',
                'option_e' => 'Jaringan Saraf',
                'correct_answer' => 'c',
                'order' => 21
            ],
            [
                'topic' => 'Biologi - Pertumbuhan',
                'question_text' => 'Hormon pada tumbuhan yang memicu pemanjangan batang dan pembentukan buah tanpa biji (partenokarpi) adalah...',
                'option_a' => 'Auksin',
                'option_b' => 'Giberelin',
                'option_c' => 'Sitokinin',
                'option_d' => 'Asam Absisat',
                'option_e' => 'Etilen',
                'correct_answer' => 'b',
                'order' => 22
            ],
            [
                'topic' => 'Biologi - Sistem Gerak',
                'question_text' => 'Hubungan antar tulang yang memungkinkan gerakan terbatas disebut...',
                'option_a' => 'Sendi Mati (Sinartrosis)',
                'option_b' => 'Sendi Kaku (Amfiartrosis)',
                'option_c' => 'Sendi Gerak (Diartrosis)',
                'option_d' => 'Sendi Engsel',
                'option_e' => 'Sendi Pelana',
                'correct_answer' => 'b',
                'order' => 23
            ],
            [
                'topic' => 'Biologi - Arkea & Bakteri',
                'question_text' => 'Bakteri yang berbentuk bola dan tersusun berderet seperti rantai disebut...',
                'option_a' => 'Monokokus',
                'option_b' => 'Diplokokus',
                'option_c' => 'Streptokokus',
                'option_d' => 'Stafilokokus',
                'option_e' => 'Sarkina',
                'correct_answer' => 'c',
                'order' => 24
            ],
            [
                'topic' => 'Biologi - Jamur',
                'question_text' => 'Jamur yang digunakan dalam proses pembuatan tempe adalah...',
                'option_a' => 'Saccharomyces cerevisiae',
                'option_b' => 'Rhizopus oryzae',
                'option_c' => 'Neurospora crassa',
                'option_d' => 'Aspergillus niger',
                'option_e' => 'Penicillium notatum',
                'correct_answer' => 'b',
                'order' => 25
            ],

            // KIMIA (26-50)
            [
                'topic' => 'Kimia - Struktur Atom',
                'question_text' => 'Partikel dasar penyusun inti atom adalah...',
                'option_a' => 'Proton dan Elektron',
                'option_b' => 'Proton dan Neutron',
                'option_c' => 'Neutron dan Elektron',
                'option_d' => 'Hanya Proton',
                'option_e' => 'Proton, Neutron, dan Elektron',
                'correct_answer' => 'b',
                'order' => 26
            ],
            [
                'topic' => 'Kimia - Tabel Periodik',
                'question_text' => 'Unsur dengan nomor atom 11 terletak pada golongan...',
                'option_a' => 'IA',
                'option_b' => 'IIA',
                'option_c' => 'IIIA',
                'option_d' => 'IVA',
                'option_e' => 'VA',
                'correct_answer' => 'a',
                'order' => 27
            ],
            [
                'topic' => 'Kimia - Ikatan Kimia',
                'question_text' => 'Ikatan yang terbentuk karena adanya serah terima elektron antara unsur logam dan non-logam adalah...',
                'option_a' => 'Ikatan Kovalen',
                'option_b' => 'Ikatan Logam',
                'option_c' => 'Ikatan Ion',
                'option_d' => 'Ikatan Hidrogen',
                'option_e' => 'Ikatan Van der Waals',
                'correct_answer' => 'c',
                'order' => 28
            ],
            [
                'topic' => 'Kimia - Stoikiometri',
                'question_text' => 'Massa molar (Mr) dari senyawa air (H2O) adalah... (Ar H=1, O=16)',
                'option_a' => '17',
                'option_b' => '18',
                'option_c' => '19',
                'option_d' => '20',
                'option_e' => '32',
                'correct_answer' => 'b',
                'order' => 29
            ],
            [
                'topic' => 'Kimia - Reaksi Redoks',
                'question_text' => 'Reaksi oksidasi ditandai dengan adanya...',
                'option_a' => 'Penurunan bilangan oksidasi',
                'option_b' => 'Penangkapan elektron',
                'option_c' => 'Kenaikan bilangan oksidasi',
                'option_d' => 'Pelepasan proton',
                'option_e' => 'Penangkapan hidrogen',
                'correct_answer' => 'c',
                'order' => 30
            ],
            [
                'topic' => 'Kimia - Larutan Asam Basa',
                'question_text' => 'Larutan yang memiliki pH < 7 bersifat...',
                'option_a' => 'Basa',
                'option_b' => 'Netral',
                'option_c' => 'Asam',
                'option_d' => 'Buffer',
                'option_e' => 'Garam',
                'correct_answer' => 'c',
                'order' => 31
            ],
            [
                'topic' => 'Kimia - Laju Reaksi',
                'question_text' => 'Zat yang ditambahkan ke dalam reaksi untuk mempercepat laju reaksi tanpa ikut bereaksi permanen disebut...',
                'option_a' => 'Inhibitor',
                'option_b' => 'Katalis',
                'option_c' => 'Reaktan',
                'option_d' => 'Produk',
                'option_e' => 'Intermediet',
                'correct_answer' => 'b',
                'order' => 32
            ],
            [
                'topic' => 'Kimia - Kesetimbangan',
                'question_text' => 'Pada reaksi kesetimbangan, jika volume diperbesar, maka kesetimbangan akan bergeser ke arah...',
                'option_a' => 'Jumlah koefisien terkecil',
                'option_b' => 'Jumlah koefisien terbesar',
                'option_c' => 'Kanan saja',
                'option_d' => 'Kiri saja',
                'option_e' => 'Tetap',
                'correct_answer' => 'b',
                'order' => 33
            ],
            [
                'topic' => 'Kimia - Hidrokarbon',
                'question_text' => 'Rumus umum dari deret homolog Alkana adalah...',
                'option_a' => 'CnH2n',
                'option_b' => 'CnH2n-2',
                'option_c' => 'CnH2n+2',
                'option_d' => 'CnHn',
                'option_e' => 'CnH2n+1',
                'correct_answer' => 'c',
                'order' => 34
            ],
            [
                'topic' => 'Kimia - Termokimia',
                'question_text' => 'Reaksi kimia yang menyerap kalor dari lingkungan ke sistem disebut reaksi...',
                'option_a' => 'Eksoterm',
                'option_b' => 'Endoterm',
                'option_c' => 'Pembakaran',
                'option_d' => 'Netralisasi',
                'option_e' => 'Sublimasi',
                'correct_answer' => 'b',
                'order' => 35
            ],
            [
                'topic' => 'Kimia - Larutan Elektrolit',
                'question_text' => 'Larutan yang dapat menghantarkan arus listrik dengan kuat karena terionisasi sempurna disebut...',
                'option_a' => 'Elektrolit lemah',
                'option_b' => 'Non-elektrolit',
                'option_c' => 'Elektrolit kuat',
                'option_d' => 'Larutan jenuh',
                'option_e' => 'Koloid',
                'correct_answer' => 'c',
                'order' => 36
            ],
            [
                'topic' => 'Kimia - Sifat Koligatif',
                'question_text' => 'Penambahan zat terlarut ke dalam pelarut murni akan mengakibatkan...',
                'option_a' => 'Penurunan titik didih',
                'option_b' => 'Kenaikan tekanan uap',
                'option_c' => 'Penurunan titik beku',
                'option_d' => 'Penurunan tekanan osmotik',
                'option_e' => 'Tidak ada perubahan',
                'correct_answer' => 'c',
                'order' => 37
            ],
            [
                'topic' => 'Kimia - Kimia Karbon',
                'question_text' => 'Gugus fungsi dari golongan alkohol adalah...',
                'option_a' => '-CHO',
                'option_b' => '-COOH',
                'option_c' => '-OH',
                'option_d' => '-CO-',
                'option_e' => '-O-',
                'correct_answer' => 'c',
                'order' => 38
            ],
            [
                'topic' => 'Kimia - Koloid',
                'question_text' => 'Sistem koloid yang fase terdispersinya cair dan medium pendispersinya gas disebut...',
                'option_a' => 'Sol',
                'option_b' => 'Emulsi',
                'option_c' => 'Aerosol cair',
                'option_d' => 'Buih',
                'option_e' => 'Gel',
                'correct_answer' => 'c',
                'order' => 39
            ],
            [
                'topic' => 'Kimia - Radiokimia',
                'question_text' => 'Sinar radioaktif yang memiliki daya tembus paling besar adalah...',
                'option_a' => 'Sinar Alpha',
                'option_b' => 'Sinar Beta',
                'option_c' => 'Sinar Gamma',
                'option_d' => 'Sinar-X',
                'option_e' => 'Sinar Ultraviolet',
                'correct_answer' => 'c',
                'order' => 40
            ],
            [
                'topic' => 'Kimia - Hidrokarbon',
                'question_text' => 'Nama IUPAC dari CH3-CH2-CH2-CH3 adalah...',
                'option_a' => 'Metana',
                'option_b' => 'Etana',
                'option_c' => 'Propana',
                'option_d' => 'Butana',
                'option_e' => 'Pentana',
                'correct_answer' => 'd',
                'order' => 41
            ],
            [
                'topic' => 'Kimia - Struktur Atom',
                'question_text' => 'Nomor massa suatu unsur menunjukkan jumlah...',
                'option_a' => 'Elektron saja',
                'option_b' => 'Proton saja',
                'option_c' => 'Proton + Elektron',
                'option_d' => 'Proton + Neutron',
                'option_e' => 'Neutron saja',
                'correct_answer' => 'd',
                'order' => 42
            ],
            [
                'topic' => 'Kimia - Ikatan Kimia',
                'question_text' => 'Molekul air (H2O) memiliki bentuk molekul...',
                'option_a' => 'Linear',
                'option_b' => 'Tetrahedral',
                'option_c' => 'Bentuk V (Bent)',
                'option_d' => 'Segitiga Datar',
                'option_e' => 'Oktahedral',
                'correct_answer' => 'c',
                'order' => 43
            ],
            [
                'topic' => 'Kimia - Stoikiometri',
                'question_text' => 'Satu mol gas ideal pada keadaan standar (STP) menempati volume sebesar...',
                'option_a' => '11,2 Liter',
                'option_b' => '22,4 Liter',
                'option_c' => '24,0 Liter',
                'option_d' => '2,24 Liter',
                'option_e' => '44,8 Liter',
                'correct_answer' => 'b',
                'order' => 44
            ],
            [
                'topic' => 'Kimia - Laju Reaksi',
                'question_text' => 'Faktor-faktor berikut dapat mempercepat laju reaksi, kecuali...',
                'option_a' => 'Menaikkan suhu',
                'option_b' => 'Memperbesar konsentrasi',
                'option_c' => 'Memperkecil luas permukaan bidang sentuh',
                'option_d' => 'Menambahkan katalis',
                'option_e' => 'Menaikkan tekanan (untuk gas)',
                'correct_answer' => 'c',
                'order' => 45
            ],
            [
                'topic' => 'Kimia - Asam Basa',
                'question_text' => 'Menurut teori Bronsted-Lowry, asam adalah zat yang...',
                'option_a' => 'Melepaskan ion H+ dalam air',
                'option_b' => 'Melepaskan ion OH- dalam air',
                'option_c' => 'Memberi (donor) proton (H+)',
                'option_d' => 'Menerima (akseptor) proton (H+)',
                'option_e' => 'Menerima pasangan elektron',
                'correct_answer' => 'c',
                'order' => 46
            ],
            [
                'topic' => 'Kimia - Polimer',
                'question_text' => 'Polimer alam yang menyusun struktur rambut dan kuku manusia adalah...',
                'option_a' => 'Selulosa',
                'option_b' => 'Amilum',
                'option_c' => 'Keratin (Protein)',
                'option_d' => 'Karet alam',
                'option_e' => 'PVC',
                'correct_answer' => 'c',
                'order' => 47
            ],
            [
                'topic' => 'Kimia - Elektrokimia',
                'question_text' => 'Pada sel volta, kutub negatif tempat terjadinya reaksi oksidasi disebut...',
                'option_a' => 'Katode',
                'option_b' => 'Anode',
                'option_c' => 'Elektrolit',
                'option_d' => 'Jembatan garam',
                'option_e' => 'Voltase',
                'correct_answer' => 'b',
                'order' => 48
            ],
            [
                'topic' => 'Kimia - Benzena',
                'question_text' => 'Nama senyawa benzena dengan satu gugus metil (-CH3) adalah...',
                'option_a' => 'Fenol',
                'option_b' => 'Anilin',
                'option_c' => 'Toluena',
                'option_d' => 'Nitrobenzena',
                'option_e' => 'Asam benzoat',
                'correct_answer' => 'c',
                'order' => 49
            ],
            [
                'topic' => 'Kimia - Minyak Bumi',
                'question_text' => 'Komponen utama penyusun gas alam adalah...',
                'option_a' => 'Metana',
                'option_b' => 'Etana',
                'option_c' => 'Propana',
                'option_d' => 'Butana',
                'option_e' => 'LPG',
                'correct_answer' => 'a',
                'order' => 50
            ],
        ];

        foreach ($questions as $q) {
            $tryout->questions()->create($q);
        }

        $tryout->update(['question_count' => count($questions)]);
    }
}
