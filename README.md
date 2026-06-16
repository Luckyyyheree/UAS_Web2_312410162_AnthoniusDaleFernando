# API Inventaris Barang (CodeIgniter 4)

### Cara Menjalankan:
1. Pastikan database `db_inventory` sudah di-import.
2. Ubah konfigurasi database di file `.env`.
3. Jalankan `composer install` untuk mengunduh library.
4. Jalankan aplikasi di XAMPP.

### Endpoint API:
- `GET /api/barang` : Mengambil semua data barang.
- `GET /api/barang/{id}` : Mengambil detail barang berdasarkan ID.
- `POST /api/barang` : Menambah barang baru.
- `PUT /api/barang/{id}` : Mengubah data barang.
- `DELETE /api/barang/{id}` : Menghapus data barang.
