QR Code Generator

Tentang Proyek

QR Code Generator adalah aplikasi berbasis web yang memungkinkan pengguna untuk membuat dan mengelola kode QR dengan mudah. Proyek ini dibangun menggunakan Laravel, framework PHP yang powerful dan elegan.

Fitur Utama

Generate QR Code dari teks atau URL.

Simpan dan Kelola QR Code di dalam sistem.

Mendukung berbagai format input seperti teks, email, URL, nomor telepon, dan lainnya.

Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini secara lokal:

1. Clone Repository

git clone https://github.com/username/repository.git
cd repository

2. Instal Dependensi

Pastikan Anda sudah menginstal Composer, kemudian jalankan:

composer install

3. Konfigurasi Environment

Duplikat file .env.example menjadi .env dan sesuaikan konfigurasi database:

cp .env.example .env

Kemudian, ubah pengaturan berikut di dalam file .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=password

4. Generate Key & Migrasi Database

php artisan key:generate
php artisan migrate

5. Jalankan Server

php artisan serve

Aplikasi akan berjalan di http://127.0.0.1:8000

Cara Menggunakan

Buka aplikasi di browser.

Masukkan teks atau URL yang ingin diubah menjadi QR Code.

Klik tombol Generate QR Code.

Download QR Code dalam format yang diinginkan.
