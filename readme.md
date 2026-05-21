# Pemesanan Produk - Technical Test

Proyek ini adalah implementasi sistem pemesanan produk berbasis *headless*, memisahkan *backend* (Laravel) sebagai penyedia API dan pengelola data, dengan *frontend* (WordPress) sebagai *landing page*.

## Fitur Utama & Poin Ekstra
- *Order Form* menggunakan Custom Page Template.
- Pengiriman form menggunakan AJAX (Fetch API) tanpa *reload* halaman, lengkap dengan *error handling* dari respons API.
- Admin panel otomatis menggunakan Filament v5.

## Persyaratan Sistem
- PHP >= 8.2 (Herd / XAMPP / Laragon)
- Composer
- MySQL

## Instalasi Backend (Laravel)

Jalankan perintah berikut di terminal:

` ` `bash
cd order-api
cp .env.example .env
composer install
php artisan key:generate
` ` `

Sesuaikan konfigurasi database di file `.env` pada parameter-parameter berikut ini:

` ` `bash
APP_NAME=beyond-the-sound.
APP_URL=http://localhost:8000/
APP_LOCALE=id
APP_FALLBACK_LOCALE=id
APP_FAKER_LOCALE=id_ID
` ` `

Lalu jalankan migrasi:

` ` `bash
php artisan migrate
` ` `

Untuk menjalankan *development server* di port 8000:
` ` `bash
php artisan serve
` ` `

### Akses Admin Panel
Dashboard admin menggunakan Filament dan mengambil alih *root* URL.
- **URL:** `http://localhost:8000`
- **Username / Email:** `atmin@admin.com`
- **Password:** `123456`

*(Catatan: Buat user tersebut menggunakan perintah `php artisan make:filament-user` jika database masih kosong).*

### Dokumentasi API
Sistem ini menyediakan *endpoint* untuk menerima data pesanan dari *frontend*.

- **URL Route:** `http://localhost:8000/api/orders`
- **Method:** `POST`
- **Headers:** - `Content-Type: application/json`
  - `Accept: application/json`

**Contoh Payload JSON:**
` ` `json
{
    "nama_pemesan": "John Doe",
    "nomor_wa": "08123456789",
    "email": "johndoe@example.com",
    "nama_produk": "Produk Audio",
    "jumlah": 2
}
` ` `

## Instalasi Frontend (WordPress)

1. Pastikan WordPress berjalan di `http://localhost/wordpress`.
2. Masuk ke direktori tema yang aktif (misal: `wp-content/themes/twentytwentyfive/templates`).
3. Tambahkan file `order.php` dari *repository* ini ke dalam folder tema tersebut.
4. Login ke WP Admin (`http://localhost/wordpress/wp-admin`).
5. Buat halaman baru (*Pages -> Add New*).
6. Pada *Templates*, pilih **Order**.
7. Publikasikan halaman dan buka halamannya untuk menguji koneksi form ke API.
