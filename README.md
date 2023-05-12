<h1 align="center"> Daftar MSJ</h1>
<p>
Website petunjuk pendaftaran MSJ, dan peminjaman ruangan
<small>
(coming soon)
</small>
</p>


## How to run?

1. Clone repository ini

```bash
git clone https://github.com/TheChosenOne29/daftar-msj
```

2. Masuk kedalam folder repo
```bash
cd daftar-msj
```

3. Install dependencies

```bash
composer install
```

4. Copy environment file, dan edit jika perlu

```bash
cp .env.example .env
```

5. Buat application key

```bash
php artisan key:generate
```

6. Migrate database <b>(Pastikan koneksi database di file .env benar sebelum migrate)</b>
```bash
php artisan migrate
```
7. Jalankan Seeder
```bash
php artisan db:seed
```
8. Jalankan server development local
```bash
php artisan serve
```