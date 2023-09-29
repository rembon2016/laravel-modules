# Laravel Modules
> Laravel Modules adalah paket Laravel yang dibuat untuk mengelola aplikasi Laravel besar Anda menggunakan modul. Modul seperti paket Laravel, ia memiliki beberapa tampilan, pengontrol, atau model. Paket ini didukung dan diuji di Laravel 9.

## Installation and Setup
> Untuk menginstal melalui Composer, dengan menjalankan perintah berikut:
```bash
composer require nwidart/laravel-modules
```

> Paket secara otomatis akan mendaftarkan penyedia layanan dan aliasnya. Secara opsional, publikasikan konfigurasi paket dan publikasikan stub dengan menjalankan:
```bash
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
```

> Secara default, kelas modul tidak dimuat secara otomatis. Anda dapat memuat modul Anda secara otomatis menggunakan psr-4. Misalnya :
```php
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Database\\Factories\\": "database/factories/",
      "Database\\Seeders\\": "database/seeders/"
      "Modules\\": "Modules/",
    }
  }
}
```

## Basic Usages

### Buat Modul
```bash
php artisan module:make Blog
```
- `Blog` adalah Nama Modul

### Buat Banyak Modul Dalam Waktu Bersamaan
```bash
php artisan module:make Blog User Auth
```
- `Blog` adalah Nama Modul
- `User` adalah Nama Modul
- `Auth` adalah Nama Modul

### Buat Model dalam Modul Tertentu
```bash
php artisan module:make-model Post {?--flag} Blog
```
- `Post` adalah Nama Model / Entitas
- `Blog` adalah Nama Modul Yang Sudah Dibuat Sebelumnya
- `--migration` / `-m` adalah Flag Untuk Membuat Sekaligus dengan Migration (Optional)

### Buat Migration dalam Modul Tertentu
```bash
php artisan module:make-migration create_posts_table Blog
```
- `create_post_table` adalah Nama Migration yang akan Menghasilkan Nama Table "posts"
- `Blog` adalah Nama Modul Yang Sudah Dibuat Sebelumnya

### Buat Seeder dalam Modul Tertentu
```bash
php artisan module:make-seed seed_fake_blog_posts Blog
```
- `seed_fake_blog_posts` adalah Nama Seeder Yang Merupakan Rekomendasi Dari Creator untuk Membedakan antara Seeder Main dan Module Project
- `Blog` adalah Nama Modul Yang Sudah Dibuat Sebelumnya

### Buat Controller dalam Modul Tertentu
```bash
php artisan module:make-controller PostsController {?--flag} Blog
```
- `PostsController` adalah Nama Controller dalam Modul dengan Path Tertentu
- `Blog` adalah Nama Modul Yang Sudah Dibuat Sebelumnya
- `--plain` adalah Flag Untuk Membuat Controller Yang Polos (Optional)
- `--api` adalah Flag Untuk Membuat Resource Controller (Optional)

### Seed Dummy Data Pada Modul Tertentu
```bash
php artisan module:seed Blog
```
- `Blog` adalah Nama Modul Yang Sudah Dibuat

## Try Application
> Untuk Mencoba Aplikasinya, Silahkan Ketikan Perintah Berikut:
```bash
https://github.com/rembon2016/laravel-modules.git
```

> Jalankan Migration dan Seeder Pada Modul Usr, Untuk Membuat Akun Dummy:
```bash
php artisan migrate && php artisan module:seed Usr
```
> Akan Menghasilkan Kredensial Berikut:
- Email : {cek_kolom_email_pada_table}
- Password : password

> Silahkan Menuju Kedalam Tautan Berikut:
```bash
127.0.0.1/usr
```

> Database Environment
- Database Connection: PostgreSQL
- Host: 12.0.0.1 (Local)
- Port: 5432

## Laravel Modules Directive Links
- [Requirements Docs](https://docs.laravelmodules.com/v10/requirements)
- [Installation and Setup Docs](https://docs.laravelmodules.com/v10/installation-and-setup)
- [Laravel Modules Artisan Command Docs](https://docs.laravelmodules.com/v10/artisan-commands)
- [Laravel Modules Facade Method Docs](https://docs.laravelmodules.com/v10/facade-methods)
- [Module Methods Docs](https://docs.laravelmodules.com/v10/module-methods)
- [Languages Docs](https://docs.laravelmodules.com/v10/languages)
- [Livewire Usage On Laravel Modules Docs](https://docs.laravelmodules.com/v10/livewire)
- [Spatie Permission Usage On Laravel Modules Docs](https://docs.laravelmodules.com/v10/spatie-laravel-permission)

## Credits
- [Laravel Modules](https://docs.laravelmodules.com/v10/introduction)
- [Rembon Karya Digital](https://rembon.co.id/)
