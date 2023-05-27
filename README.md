## Tutorial Lengkap Metode WP

- [Contoh Metode WP](contoh-metode-weighted-product-wp)

## Cara Install

- Clone repository ini
- Pastikan php yang digunakan adalah php 7.2
- Jalankan perintah `composer install`
- Copy file `.env.example` ke `.env`
- Sesuaikan konfigurasi database pada file `.env`

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=nama_user_database_biasanya_root
DB_PASSWORD=password_db_nya_biasanya_kosong
```

- Jalankan perintah `php artisan migrate` untuk mengimport database
- Jalankan perintah `php artisan db:seed --class=DatabaseSeeder` untuk membuat user seed di database
- Jalankan perintah `php artisan key:generate` untuk membuat `APP:KEY`

## Default User
- Email : gunawan@dede.web.id
- Password : dedegunawan

## Donasi
Bantu saya untuk terus berkarya membuat aplikasi yang bermanfaat.

![Saweria](https://saweria.co/widgets/qr?streamKey=c25865c08d0d7354551431e01826dac4)