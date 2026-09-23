# Mini Aplikasi Manajemen Data Akademik
Mata Kuliah Pemrograman Web - Proyek Akhir

### Deskripsi Proyek
Aplikasi ini merupakan mini manajemen data akademik yang menghubungkan data Dosen (tabel `users`) dengan data Mata Kuliah (tabel `matakuliahs`). Proyek ini dibangun menggunakan arsitektur MVC, Eloquent ORM relasional, migration, seeder, serta factory otomatis.

### Daftar Perintah Artisan yang Digunakan
1. `php artisan make:model Matakuliah -mc`
2. `php artisan make:migration add_dosen_id_to_matakuliahs_table --table=matakuliahs`
3. `php artisan make:factory MatakuliahFactory --model=Matakuliah`
4. `php artisan make:seeder MatakuliahSeeder`
5. `php artisan migrate:fresh --seed`

### Cara Menjalankan Proyek
1. Clone repositori atau ekstrak arsip ZIP.
2. Buka terminal di direktori proyek dan jalankan `composer install`.
3. Salin file environment: `cp .env.example .env` (atau rename manual) dan sesuaikan konfigurasi koneksi MySQL di `.env`.
4. Generate application key: `php artisan key:generate`.
5. Eksekusi migrasi dan pengisian data dummy: `php artisan migrate:fresh --seed`.
6. Jalankan server lokal: `php artisan serve`.
7. Buka browser pada alamat `http://127.0.0.1:8000/matakuliah`.
