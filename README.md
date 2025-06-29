# Product Management System

Aplikasi ini adalah sistem manajemen produk berbasis Laravel dengan tampilan modern dan fitur CRUD lengkap. Cocok untuk kebutuhan inventaris, katalog, atau toko sederhana.

## ✨ Fitur Utama

-   CRUD Produk (Create, Read, Update, Delete)
-   Upload & preview gambar produk
-   Pagination modern
-   Statistik produk (total, stok, out of stock)
-   Pencatatan harga, stok, dan deskripsi produk
-   Notifikasi SweetAlert
-   Desain UI modern (Bootstrap 5 + custom CSS)

## 📁 Struktur Folder Penting

```
app/Http/Controllers/ProductController.php   # Logika utama produk
app/Models/Product.php                       # Model produk
resources/views/products/                    # Semua tampilan produk (index, create, edit, show)
routes/web.php                               # Routing aplikasi
public/storage/products/                     # Lokasi upload gambar produk
```

## 🚀 Instalasi & Menjalankan

1. **Clone repository & install dependency**
    ```bash
    git clone <repo-anda>
    cd <nama-folder>
    composer install
    npm install && npm run build
    cp .env.example .env
    php artisan key:generate
    ```
2. **Atur koneksi database**
    - Edit file `.env` dan sesuaikan DB_DATABASE, DB_USERNAME, DB_PASSWORD.
3. **Migrasi & seed database**
    ```bash
    php artisan migrate
    php artisan db:seed
    ```
4. **Link storage (untuk upload gambar)**
    ```bash
    php artisan storage:link
    ```
5. **Jalankan aplikasi**
    ```bash
    php artisan serve
    ```
    Buka browser ke `http://localhost:8000`

## 🖼️ Fitur CRUD Produk

-   **Tambah Produk**: Isi form, upload gambar, simpan.
-   **Edit Produk**: Ubah data/gambar produk, simpan.
-   **Hapus Produk**: Klik tombol hapus, konfirmasi.
-   **Lihat Detail**: Klik tombol show pada produk.

## 📝 Catatan

-   Gambar produk disimpan di `storage/app/public/products` dan diakses via `public/storage/products`.
-   Pastikan folder storage writable (`chmod -R 775 storage` di Linux).
-   Desain UI dapat dimodifikasi di folder `resources/views/products/`.

## 📚 Teknologi

-   Laravel 10+
-   Bootstrap 5
-   SweetAlert2
-   CKEditor (untuk deskripsi produk)

---

> Dibuat dengan ❤️ menggunakan Laravel. Untuk pengembangan lebih lanjut, silakan modifikasi sesuai kebutuhan Anda.
