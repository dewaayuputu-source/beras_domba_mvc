# Website Beras Domba — PHP MVC

Project ini memisahkan kode website ke beberapa folder seperti contoh struktur di VS Code. Tampilan utama tetap mengikuti desain website Beras Domba yang sebelumnya dibuat.

## Struktur folder

```text
beras_domba_mvc/
├── assets/
│   ├── css/style.css
│   ├── js/script.js
│   └── images/
├── config/
│   ├── app.php
│   └── database.php
├── controllers/
│   └── HomeController.php
├── core/
│   ├── Controller.php
│   ├── Database.php
│   └── Model.php
├── database/
│   └── beras_domba.sql
├── models/
│   └── Product.php
├── views/
│   ├── home/index.php
│   └── layouts/
│       ├── header.php
│       └── footer.php
└── index.php
```

## Cara menjalankan di XAMPP dan VS Code

1. Ekstrak folder `beras_domba_mvc` ke `C:\xampp\htdocs\`.
2. Buka folder tersebut melalui VS Code.
3. Jalankan Apache dari XAMPP.
4. Buka `http://localhost/beras_domba_mvc/` di browser.
5. Website bisa menampilkan produk contoh meskipun database belum diimpor.
6. Untuk memakai MySQL, buka phpMyAdmin, pilih menu **Import**, lalu impor `database/beras_domba.sql`.
7. Sesuaikan username/password di `config/database.php` jika pengaturan MySQL berbeda.
8. Ganti nomor WhatsApp pada `config/app.php` dengan nomor resmi, format kode negara tanpa tanda plus, misalnya `6281234567890`.

## Catatan

- Data harga dan profil yang ditampilkan berasal dari rancangan awal dan perlu diperiksa kembali dengan data resmi UMKM.
- Foto dan font menggunakan layanan online, jadi perlu koneksi internet.
- Model produk akan mencoba membaca tabel MySQL. Jika database belum tersedia, model otomatis memakai enam produk contoh agar halaman utama tetap dapat dibuka.
