# Beta Baca Platform 📓
Halo! Selamat datang README ini akan memandu kalian langkah demi langkah untuk menyiapkan proyek ini di komputer lokal kalian (Windows).

## 📋 Beta Baca Platform
Proyek Laravel sederhana untuk **minat membaca secara online**

## ✨ Fitur
- 🔐 Autentikasi & Midlleware
- 👨‍⚕️ Role-based (Admin & User)
- 🗓️ CRUD dengan Eloquent
- 📄 Layout Blade Template
- ⚙️ Routing & Controller
- 🖼️ Upload File/gambar
- 📝 Validasi Form

## 🙍‍♂️ Role
1. **Admin**
   - Login
   - Melihat semua data pembaca
   - Menambahkan, mengedit, menghapus data buku
   - Mengelola user
   - 
2. **User**
   - Login dan Registrasi 
   - mencari dan membaca buku sesuai kategori 

## 🛠️ Teknologi
- PHP
- Composer
- Laravel 10
- Laravel Breeze (untuk autentikasi)
- Layout Blade Template
- Eloquent ORM, Migration, Seeders
- MySQL / MariaDB (database)
- XAMPP / Laragon (server lokal)

## ⚙️ Instalasi

```bash
# 1. Clone repository
git clone https://github.com/username/konsultasi-dokter-laravel.git
cd [NAMA_FOLDER_PROYEK]

## Contributing
# 2. Install dependencies
composer install
npm install
npm run dev

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).
# 3. Copy .env
cp .env.example .env

## Code of Conduct
# 4. Generate application key
php artisan key:generate

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).
# 5. Setting koneksi database di .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

## Security Vulnerabilities
# 6. Jalankan migration dan seeder
php artisan migrate --seed

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
# 7. Jalankan server lokal
php artisan serve
```

## License
## 🔑 Akun Pengguna Awal

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
Setelah menjalankan seeder, kalian akan memiliki akun pengguna berikut yang tersedia untuk login:

| Email | Password | Role |
| :------------------ | :--------- | :---------- |
| `admin@betabaca.com` | `betabaca` | `admin` |
| `deboyy@gmail.com` | `Deboyy12` | `user` |

**Catatan:** Mohon isi email dan password aktual yang digunakan di seeder kalian di sini! Ini sangat membantu agar semua orang tahu kredensial login default.

## 🤝 Berkontribusi
Proyek ini dikerjakan oleh 2 kontributor dengan 4 commit berbeda:

### 👥 Daftar Kontributor:
- [@Deboyy12](https://github.com/Deboyy12) 
- [@haiiideeer](https://github.com/haiiideeer) 
- [@alincindra](https://github.com/alincindra)
- [@melda10](https://github.com/melda10) 

### ✅ Commit:

1. **[Commit Pertama]**: Middleware & Authentication
2. **[Commit Kedua]**: Desain Template Tampilan Dasar
3. **[Commit Kedua]**: Penyelesaian Desain & Fitur
4. **[Commit Keempat]**: README.md

## 📄 Lisensi

Proyek ini adalah "open-source" dan dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
