# CRUD Siswa - PHP & MySQL

Project ini adalah aplikasi CRUD sederhana untuk mengelola data siswa.
Dibuat menggunakan PHP Native dan MySQL untuk keperluan Uji Kompetensi.

## ✨ Fitur

* Tambah data siswa
* Edit data siswa
* Hapus data siswa
* Tampilkan data siswa

## 🛠️ Teknologi

* PHP
* MySQL
* HTML & CSS

## 📁 Struktur Folder

```
latihanuk/
│
├── koneksi.php
├── index.php
├── siswa.sql
└── README.md
```

## ⚙️ Cara Menjalankan

1. Clone repository ini
2. Pindahkan ke folder `htdocs`
3. Jalankan XAMPP (Apache & MySQL)
4. Import database `siswa.sql` ke phpMyAdmin
5. Buka di browser: `http://localhost/latihanuk`

## 🧾 Database

```sql
CREATE DATABASE sekolah;

USE sekolah;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    kelas VARCHAR(50),
    alamat TEXT
);
```
