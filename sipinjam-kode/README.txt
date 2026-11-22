KODE PRAKTIKUM LARAVEL CRUD - SIPINJAM
=====================================

PERSYARATAN SESUAI LAPORAN
- PHP 8.3
- Composer
- Laravel 13
- VS Code
- SQLite

CARA MEMULAI
1. Buka terminal di folder tempat proyek akan dibuat.
2. Jalankan:
   composer create-project laravel/laravel sipinjam
3. Masuk ke folder proyek:
   cd sipinjam
4. Salin folder/file dari paket kode ini ke folder proyek sipinjam dengan struktur yang sama (timpa routes/web.php bila diminta).
5. Buat file database SQLite kosong:
   New-Item database/database.sqlite
   (PowerShell Windows. Jika file sudah ada, jangan buat lagi.)
6. Pada file .env, atur:
   DB_CONNECTION=sqlite
   Hapus/beri tanda # pada DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD jika masih ada.
7. Jalankan migration:
   php artisan migrate
8. Jalankan server:
   php artisan serve
9. Buka browser: http://127.0.0.1:8000/alat

PERINTAH TAMBAHAN
- php artisan route:list
- php artisan route:list --name=alat
- php artisan make:model Alat -m (hanya jika belum membuat model dan migration)
- php artisan make:controller AlatController --resource --model=Alat (hanya jika belum ada)
- php artisan make:request StoreAlatRequest (hanya jika belum ada)

CATATAN MIGRATION
Paket ini menyertakan dua migration: create_alats_table dan add_lokasi_to_alats_table.
Jika proyek baru dan belum pernah migrate, jalankan php artisan migrate satu kali.
Jangan menjalankan php artisan migrate:fresh jika ada data yang ingin dipertahankan,
karena perintah itu menghapus lalu membuat ulang tabel.

DATA AWAL (OPSIONAL)
Jalankan: php artisan tinker
Lalu masukkan satu per satu:
App\Models\Alat::create(['kode'=>'ALT-001','nama'=>'Kamera DSLR','stok'=>5,'kondisi'=>'baik','lokasi'=>'Lab Multimedia']);
App\Models\Alat::create(['kode'=>'ALT-002','nama'=>'Tripod','stok'=>10,'kondisi'=>'baik','lokasi'=>'Gudang Alat']);
exit

URL YANG BISA DICOBA
/halo
/halo/Budi
/coba
/alat
/alat/create

File .env tidak disertakan karena dibuat otomatis oleh Laravel. Jangan membagikan isi .env
ke GitHub karena dapat berisi kredensial.
