# Pengaduan Masyarakat Online 📢

**Pengaduan Masyarakat Online** adalah platform berbasis web yang memungkinkan warga untuk mengajukan keluhan secara langsung kepada pemerintah atau pihak yang berwenang. Aplikasi ini dibangun dengan menggunakan **CodeIgniter** untuk backend, serta **CSS**, **SCSS**, dan **JavaScript** untuk tampilan dan interaktivitas.

## 🌟 Fitur Utama
- **Pengajuan Pengaduan**: Warga dapat mengajukan keluhan secara online melalui formulir yang tersedia di platform.
- **Manajemen Pengaduan**: Admin dapat melihat, memverifikasi, dan menanggapi setiap pengaduan yang diajukan oleh warga.
- **Sistem Kategorisasi**: Pengaduan dapat dikategorikan berdasarkan jenis masalah (misalnya: infrastruktur, kebersihan, keamanan).
- **Pelacakan Status**: Warga dapat melacak status pengaduan mereka, dari pengajuan hingga penyelesaian.
- **Tampilan Responsif**: Desain antarmuka yang responsif dan ramah pengguna untuk desktop dan perangkat mobile.

## 🛠️ Teknologi yang Digunakan
- **Backend**: CodeIgniter (PHP Framework)
- **Frontend**: HTML5, CSS3, SCSS, JavaScript
- **Database**: MySQL atau MariaDB (untuk menyimpan data pengaduan)
- **Form Validation**: Menggunakan fitur validasi dari CodeIgniter untuk memastikan data yang dimasukkan sesuai.
  
## 📦 Instalasi dan Penggunaan

### 1. Clone Repository

```bash
git clone https://github.com/username/pengaduan-masyarakat-online.git
cd pengaduan-masyarakat-online
```

2. Instalasi Dependensi
Pastikan Anda memiliki server web (misalnya Apache) dan PHP yang terpasang. Untuk menjalankan aplikasi ini, Anda perlu menginstal dependensi yang diperlukan melalui Composer jika menggunakan CodeIgniter dengan dependensi eksternal.

```bash
composer install
```

3. Konfigurasi Database
Buat database baru di MySQL/MariaDB dan sesuaikan konfigurasi di file application/config/database.php:

```
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'pengaduan_db',
    'dbdriver' => 'mysqli',
    ...
);
```
4. Menjalankan Aplikasi
Pastikan Apache dan PHP sudah berjalan. Akses aplikasi melalui browser di http://localhost/pengaduan-masyarakat-online.

🖼️ Screenshot
![wm](https://github.com/user-attachments/assets/c91070bf-5c1c-47cf-bd03-68ed6b806663)

