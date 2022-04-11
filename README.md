# Setup Project
1. Setelah di download atau clone, buka terminal atau cmd lalu masukkan perintah
```
composer install
```
jika tidak bisa, coba masukkan perintah <br>
```
composer update
```

2. Buat file `.env` lalu untuk isinya dapat di copy dari file `.env.example`

3. Jika pada bagian `APP_KEY=` di file `.env` masih kosong, jalankan perintah
```
php artisan key:generate
``` 

4. Sesuaikan konfigurasi database di `.env` bagian `DB`, lalu jalankan MySQL
5. Hubungkan storage dengan perintah
```
php artisan storage:link
```
6. Jika belum ada databasenya, buat database dengan nama sesuai di `.env` bagian `DB_DATABASE=`, lalu lakukan migrate dengan perintah
```
php artisan migrate --seed
```
atau jalankan perintah ini, jika sebelumnya pada database sudah ada isinya
```
php artisan migrate:fresh --seed
```
7. Jalankan perintah untuk menjalankan web
```
php artisan serve
```
jika web dapat berjalan, maka setup sudah berhasil
