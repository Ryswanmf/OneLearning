# OneLearning - Smart EdTech Platform

![OneLearning Hero](public/images/hero.png)

OneLearning adalah platform pendidikan digital (EdTech) terdepan di Indonesia yang berfokus pada penyediaan simulasi ujian dan tryout berbasis Item Response Theory (IRT). Platform ini dirancang untuk membantu siswa dari berbagai jenjang (SD, SMP, SMA, hingga Alumni) dalam mempersiapkan ujian seleksi masuk perguruan tinggi dan ujian sekolah dengan cara yang cerdas, efisien, dan berkualitas.

## Fitur Unggulan

### Tryout Engine Pro
- **Sistem Penilaian IRT:** Simulasi skor yang akurat mendekati sistem penilaian asli SNBT.
- **Timer dan Auto-Save:** Pengerjaan soal yang aman dengan sistem penyimpanan jawaban otomatis ke database dan cadangan lokal.
- **Keep-Alive Session:** Teknologi untuk mencegah logout otomatis saat mengerjakan soal dalam durasi lama.

### Evaluation Report dan Analisis Materi
- **Radar Chart Analysis:** Visualisasi penguasaan materi siswa menggunakan grafik radar per topik soal.
- **Rekomendasi Belajar:** Sistem cerdas yang memberikan saran topik mana yang harus ditingkatkan berdasarkan skor terendah.
- **Sertifikat Kelulusan:** Unduh sertifikat pencapaian dalam format PDF setelah menyelesaikan ujian.

### Integrasi Pembayaran
- **Midtrans Gateway:** Mendukung berbagai metode pembayaran seperti Transfer Bank, E-Wallet, dan gerai retail.
- **Aktivasi Otomatis:** Paket belajar langsung aktif segera setelah pembayaran dikonfirmasi oleh sistem.

### Dashboard Admin
- **Import Soal via Excel:** Masukkan ratusan soal sekaligus dalam hitungan detik menggunakan template Excel.
- **Manajemen Bank Soal Universal:** Satu pusat kendali untuk mengelola soal di seluruh kategori (UTBK, SD, SMP, SMA, Alumni).
- **Pengaturan Web Dinamis:** Ubah judul, deskripsi, nomor WhatsApp, dan email kontak langsung dari panel admin.

## Teknologi yang Digunakan
- **Framework:** Laravel 12
- **Database:** MySQL
- **Frontend:** Tailwind CSS dan Alpine.js
- **Payment Gateway:** Midtrans API
- **Charts:** Chart.js
- **Excel Processing:** Maatwebsite Excel

## Instalasi

1. Clone repositori ini ke komputer lokal.
2. Jalankan perintah `composer install` dan `npm install`.
3. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database serta Midtrans Key.
4. Jalankan migrasi database dan seeder:
   ```bash
   php artisan migrate --seed
   ```
5. Buat tautan simbolis untuk penyimpanan:
   ```bash
   php artisan storage:link
   ```
6. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

## Lisensi
Proyek ini dikembangkan eksklusif untuk OneLearning Indonesia.

---
*Dibuat untuk kemajuan pendidikan Indonesia.*
