# 🛒 Cuan Manis – Laravel 9 Web Application

**Cuan Manis** adalah aplikasi web berbasis Laravel 9 yang dirancang sebagai platform marketplace untuk mahasiswa. Aplikasi ini memungkinkan pengguna untuk membeli dan menjual barang *preloved*, serta membagikan informasi kos, dengan tampilan antarmuka yang responsif dan ramah pengguna.

## 📌 Fitur Utama

### 🔐 Autentikasi Pengguna
- Registrasi, login, logout
- Pengelolaan akun & profil

### 🛍️ Marketplace Barang Preloved
- Upload produk
- Edit dan hapus produk
- Lihat daftar barang mahasiswa lain
- Pencarian & filter barang

### 🏠 Informasi Kos Mahasiswa
- Tambah data kos
- Lihat daftar kos
- Filter lokasi kos

### ⚙️ Lainnya
- Dashboard pengguna
- Validasi input form
- Layout responsif dengan Blade & Tailwind CSS

## 🛠️ Teknologi yang Digunakan
- **Laravel 9**
- **PHP 8**
- **MySQL / XAMPP**
- **Blade Templating**
- **Tailwind CSS**
- **JavaScript (Vanilla)**
- **Git & GitHub**

## 🚀 Cara Menjalankan Proyek

### 1. Clone Repository
bash
git clone https://github.com/deakusuma05/CuanManis-web.git

** 2. Install Dependency**
bash
Copy
Edit
composer install
npm install && npm run dev
3. Setup Environment
Duplikat file .env.example menjadi .env
Atur koneksi database (MySQL) di .env

4. Generate Key & Migrasi DB
bash
Copy
Edit
php artisan key:generate
php artisan migrate

5. Jalankan Server
bash
Copy
Edit
php artisan serve
Akses aplikasi di: http://localhost:8000

<img width="491" height="598" alt="image" src="https://github.com/user-attachments/assets/31452d24-8b11-4991-89a6-a803e4f2197b" />


👩🏻‍💻 Kontributor
Dea Kusuma Ningrum – Front-End Developer
