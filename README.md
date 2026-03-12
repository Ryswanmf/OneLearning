# OneLearning Platform

<div align="center">
    <img src="public/images/hero.png" alt="OneLearning Hero" width="100%">
</div>

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.0-38B2AC?style=for-the-badge&logo=tailwind-css)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql)
![Gemini AI](https://img.shields.io/badge/Gemini_AI-Flash_2.5-4285F4?style=for-the-badge&logo=google-gemini)
![Midtrans](https://img.shields.io/badge/Midtrans-Payment-002B45?style=for-the-badge)

</div>

## Deskripsi Platform

OneLearning adalah platform simulasi tryout mutakhir yang mengimplementasikan sistem penilaian IRT (Item Response Theory) dan Ranking Real-time. Platform ini dirancang secara khusus untuk memfasilitasi siswa di Indonesia dalam menghadapi berbagai tingkatan ujian nasional, mulai dari jenjang SD, SMP, SMA, hingga persiapan seleksi masuk Perguruan Tinggi Negeri (UTBK/SNBT).

Sistem penilaian kami telah terkalibrasi untuk menghasilkan analisis kompetensi yang akurat, membantu ribuan siswa dalam memetakan kemampuan akademik mereka secara saintifik.

## Fitur Unggulan

- **Penilaian IRT Terkalibrasi:** Algoritma pembobotan soal dinamis berdasarkan tingkat kesulitan peserta (Standard UTBK).
- **Dashboard Statistik Real-time:** Visualisasi data pendaftaran, paket aktif, dan omzet secara dinamis bagi Admin.
- **Sistem Invoice Profesional:** Fitur cetak invoice otomatis yang elegan dan siap cetak (PDF-ready) untuk setiap transaksi sukses.
- **OneBot AI Assistant:** Integrasi Google Gemini 2.5 Flash sebagai asisten akademik cerdas untuk konsultasi 24/7.
- **Manajemen Konten Fleksibel:** Fitur upload gambar mandiri pada modul Bisnis, Testimoni, dan Profil Perusahaan.
- **Prediksi Kelulusan SNBP:** Analisis prediktif peluang masuk PTN berdasarkan basis data historis.
- **Sertifikat Digital:** Penerbitan sertifikat otomatis dengan ID Verifikasi unik setelah menyelesaikan tryout.

## Daftar Paket Simulasi

Platform menyediakan berbagai paket simulasi yang telah diperbarui dengan bank soal berkualitas:

### Jenjang Sekolah (SD - SMA)
- **SD (4-6):** Matematika Dasar, IPA Terpadu, Paket Asesmen Nasional.
- **SMP (7-9):** Bahasa Inggris, Matematika & IPA, Paket Ujian Sekolah.
- **SMA (10-12):** Fisika, Biologi, Kimia, dan Paket Sukses Kenaikan Kelas.

### Persiapan PTN & Alumni
- **UTBK/SNBT:** Simulasi TPS, Soshum, Saintek, dan Mastery Pack.
- **Alumni:** Re-start UTBK, Spesialis Ujian Mandiri, dan Ultimate Strategy Pack.

## Spesifikasi Teknis

### Stack Teknologi
- **Core:** Laravel 12 (Stable)
- **Database:** MySQL (Optimized with Indexing)
- **Frontend:** Tailwind CSS, Alpine.js, Blade Components
- **API AI:** Google Generative AI (Gemini API)
- **Gateway:** Midtrans Snap (Seamless Payment)

### Arsitektur Sistem
- **Polymorphic Relationships:** Digunakan pada sistem Bank Soal dan Transaksi untuk skalabilitas tinggi.
- **Cache Optimization:** Implementasi caching pada statistik landing page untuk performa maksimal.
- **Print-Friendly CSS:** Desain khusus untuk dokumen resmi (Invoice & Sertifikat).

## Panduan Instalasi

1. Clone repositori ini ke direktori lokal Anda.
2. Instal dependensi PHP:
   ```bash
   composer install
   ```
3. Instal dan kompilasi aset frontend:
   ```bash
   npm install && npm run build
   ```
4. Konfigurasi Environment:
   - Salin `.env.example` menjadi `.env`
   - Sesuaikan `DB_DATABASE`, `MIDTRANS_SERVER_KEY`, dan `GEMINI_API_KEY`.
5. Generate App Key:
   ```bash
   php artisan key:generate
   ```
6. Migrasi & Seeding Database:
   ```bash
   php artisan migrate --seed
   ```
7. Hubungkan Storage:
   ```bash
   php artisan storage:link
   ```

## Lisensi
Hak Cipta (c) 2026 **OneLearning Indonesia**. Seluruh hak cipta dilindungi.
