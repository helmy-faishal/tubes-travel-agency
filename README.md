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
4. Jalankan perintah
```
php artisan serve
```
jika web dapat berjalan, maka setup sudah berhasil