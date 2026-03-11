# OneLearning Platform

![OneLearning Hero](public/images/hero.png)

OneLearning adalah platform digital inovatif yang dirancang khusus untuk membantu siswa di Indonesia mempersiapkan berbagai jenjang ujian nasional, mulai dari SD, SMP, SMA, hingga persiapan masuk Perguruan Tinggi Negeri (UTBK/SNBT). Platform ini menggunakan metodologi penilaian berstandar nasional (IRT) untuk memberikan analisis kemampuan yang akurat bagi para penggunanya.

## Fitur Utama

### Sistem Penilaian IRT (Item Response Theory)
Algoritma penilaian canggih yang memberikan bobot berbeda pada setiap soal berdasarkan tingkat kesulitan dan pola jawaban peserta, serupa dengan standar penilaian seleksi masuk perguruan tinggi nasional.

### Analisis Peluang SNBP
Fitur cerdas untuk membantu siswa menganalisis peluang kelulusan pada jurusan dan universitas tertentu berdasarkan data nilai dan statistik kompetisi terbaru.

### Tryout Berjenjang
Tersedia berbagai paket simulasi ujian yang dikategorikan berdasarkan jenjang pendidikan (SD, SMP, SMA) dan persiapan alumni.

### OneBot AI Assistant
Asisten akademik berbasis kecerdasan buatan (Gemini AI) yang terintegrasi untuk membantu menjawab pertanyaan materi pelajaran dan memberikan panduan penggunaan fitur platform secara real-time.

### Sertifikat Pencapaian Otomatis
Siswa yang menyelesaikan tryout akan menerima sertifikat digital resmi dengan Verification ID unik sebagai bukti pencapaian dan laporan hasil belajar.

## Spesifikasi Teknis

### Teknologi Inti
- Framework: Laravel 12
- Database: MySQL dengan optimasi indexing untuk query polimorfik
- Frontend: Blade Templating, Tailwind CSS, Alpine.js
- AI Integration: Google Gemini 1.5 Flash / 2.0 API
- Payment Gateway: Midtrans Integration

### Arsitektur Sistem
- Polimorfik Database: Digunakan pada sistem Bank Soal dan Submission untuk mendukung fleksibilitas berbagai tipe ujian dalam satu struktur tabel.
- Keamanan: Dilengkapi dengan Rate Limiting pada rute kritis (registrasi dan pengerjaan soal) untuk mencegah penyalahgunaan sistem.
- Performa: Implementasi caching pada data statistik di halaman utama untuk efisiensi beban server.

## Panduan Instalasi

1. Clone repositori ke lingkungan lokal Anda.
2. Jalankan perintah `composer install` untuk menginstal dependensi backend.
3. Jalankan perintah `npm install && npm run build` untuk aset frontend.
4. Salin file `.env.example` menjadi `.env` dan konfigurasikan basis data serta API Key (Midtrans dan Gemini).
5. Jalankan `php artisan key:generate`.
6. Jalankan `php artisan migrate --seed` untuk menyiapkan struktur database dan data awal.
7. Jalankan `php artisan storage:link` untuk akses file media.

## Lisensi
Hak Cipta (c) 2026 OneLearning Indonesia. Seluruh hak cipta dilindungi undang-undang.
