# 🍴 Food Planner

## Deskripsi Proyek

Food Planner adalah aplikasi berbasis web yang dibuat menggunakan framework Laravel dengan menerapkan konsep MVC (Model-View-Controller). Aplikasi ini membantu pengguna dalam mengatur menu makanan mingguan secara lebih terstruktur dan praktis.

Pengguna dapat menambahkan daftar menu makanan, membuat planner mingguan, menghitung total budget makanan, serta menandai menu favorit. Aplikasi dirancang dengan tampilan modern dan sederhana agar nyaman digunakan sebagai planner pribadi sehari-hari.


# Konsep MVC yang Diterapkan

Project ini menerapkan konsep MVC (Model-View-Controller) pada framework Laravel.

## 1. Model
Model digunakan untuk menghubungkan aplikasi dengan database serta mengelola data aplikasi.

### Model yang digunakan:
- `Menu.php`
- `Planner.php`

### Fungsi:
- Mengambil data dari database
- Menyimpan data menu
- Menyimpan data planner
- Mengelola relasi antar tabel


## 2. View
View digunakan untuk menampilkan antarmuka aplikasi kepada pengguna.

### View yang digunakan:
- `menu/index.blade.php`
- `menu/create.blade.php`
- `menu/edit.blade.php`
- `planner/index.blade.php`
- `layouts/app.blade.php`

### Fungsi:
- Menampilkan dashboard
- Menampilkan daftar menu
- Menampilkan planner mingguan
- Menampilkan halaman favorit


## 3. Controller
Controller digunakan untuk mengatur logika aplikasi dan penghubung antara Model dan View.

### Controller yang digunakan:
- `MenuController.php`
- `PlannerController.php`

### Fungsi:
- CRUD menu makanan
- CRUD planner mingguan
- Mengatur fitur favorit
- Mengatur total budget makanan


# Struktur Direktori

```bash
app/
 ├── Http/
 │    └── Controllers/
 │         ├── MenuController.php
 │         └── PlannerController.php
 │
 └── Models/
      ├── Menu.php
      └── Planner.php

resources/
 └── views/
      ├── layouts/
      │     └── app.blade.php
      │
      ├── menu/
      │     ├── index.blade.php
      │     ├── create.blade.php
      │     ├── edit.blade.php
      │     └── favorit.blade.php
      │
      └── planner/
            ├── index.blade.php
            ├── create.blade.php
            └── edit.blade.php

routes/
 └── web.php

database/
 └── migrations/
```


# Skema Database

## Tabel `menus`

| Field | Type |
|---|---|
| id | bigint |
| nama_menu | varchar |
| kategori | varchar |
| harga | integer (nullable) |
| is_favorite | boolean |
| created_at | timestamp |
| updated_at | timestamp |


## Tabel `planners`

| Field | Type |
|---|---|
| id | bigint |
| hari | varchar |
| sarapan_id | foreign key |
| siang_id | foreign key |
| malam_id | foreign key |
| created_at | timestamp |
| updated_at | timestamp |

---

# Fitur Aplikasi

## CRUD Menu Makanan
Pengguna dapat:
- Menambah menu makanan
- Mengedit menu makanan
- Menghapus menu makanan
- Melihat daftar menu makanan


## Planner Mingguan
Pengguna dapat:
- Membuat jadwal makanan mingguan
- Memilih menu menggunakan dropdown
- Mengedit planner
- Menghapus planner


## Budget Makanan
Aplikasi dapat:
- Menghitung total budget makanan
- Mengabaikan menu tanpa harga


## Favorit Menu
Pengguna dapat:
- Menandai menu favorit ❤️
- Melihat daftar menu favorit
- Menghapus favorit


## Dashboard
Dashboard menampilkan:
- Total menu
- Total budget
- Total menu favorit


# Cara Menjalankan Proyek

## 1. Clone Repository

```bash
git clone https://github.com/username/foodplanner.git
```

## 2. Masuk ke Folder Project

```bash
cd foodplanner
```

## 3. Install Dependency

```bash
composer install
```

## 4. Copy File Environment

```bash
cp .env.example .env
```

## 5. Generate Application Key

```bash
php artisan key:generate
```

## 6. Atur Database di File `.env`

```env
DB_DATABASE=foodplanner
DB_USERNAME=root
DB_PASSWORD=
```

## 7. Jalankan Migration

```bash
php artisan migrate
```

## 8. Jalankan Server

```bash
php artisan serve
```

## 9. Buka Browser

```bash
http://127.0.0.1:8000/menu
```


# Alur Kerja Aplikasi

## 1. User Menambahkan Menu
Data menu makanan disimpan ke tabel `menus`.

↓

## 2. User Membuat Planner Mingguan
Planner mengambil data menu dari tabel `menus`.

↓

## 3. User Mengatur Jadwal Makanan
Menu dipilih menggunakan dropdown.

↓

## 4. Dashboard Menghitung Budget
Total budget dihitung berdasarkan harga menu.

↓

## 5. User Menandai Favorit
Menu favorit ditampilkan pada halaman favorit.


# Routes

| Method | Route | Fungsi |
|---|---|---|
| GET | /menu | Menampilkan dashboard menu |
| GET | /menu/create | Form tambah menu |
| POST | /menu | Menyimpan menu |
| GET | /menu/{id}/edit | Form edit menu |
| PUT | /menu/{id} | Update menu |
| DELETE | /menu/{id} | Hapus menu |
| GET | /planner | Menampilkan planner |
| GET | /planner/create | Form tambah planner |
| POST | /planner | Simpan planner |
| GET | /planner/{id}/edit | Form edit planner |
| PUT | /planner/{id} | Update planner |
| DELETE | /planner/{id} | Hapus planner |
| GET | /favorite/{id} | Toggle favorit |
| GET | /favorit | Menampilkan menu favorit |


# Data Sample

## Menu

| Nama Menu | Kategori | Harga |
|---|---|---|
| Ayam Geprek | Makanan | 10000 |
| Nasi Goreng | Makanan | 15000 |
| Mie Ayam | Makanan | 12000 |


## Planner

| Hari | Sarapan | Siang | Malam |
|---|---|---|---|
| Senin | Nasi Goreng | Ayam Geprek | Mie Ayam |


# Teknologi yang Digunakan

- Laravel 12
- PHP
- MySQL
- Laragon
- Composer
- Bootstrap 5
- Blade Template Engine
- MVC Architecture


# Author

Dibuat untuk memenuhi tugas Mata Kuliah Pemrograman Berbasis Web dengan implementasi konsep MVC menggunakan framework Laravel.