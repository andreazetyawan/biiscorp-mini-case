## Biiscorp Mini Case.

Aplikasi data pegawai dengan menggunakan [Laravel 11](https://laravel.com/) :

Fitur:
1. Melihat dan mencari list data yang diinginkan
2. Mengurutkan dan filter data berdasar kolom yang diinginkan
- pencarian berdasarkan nama dan email.
3. Menambahkan data pada data pegawai

Goals :
1. Pengalaman yang menyenangkan untuk mencari dan melihat data
2. Pengalaman yang menyenangkan untuk menambahkan data
3. Tampilan yang bisa dinikmati dengan nyaman di web atau mobile

Implementasi :
1. UX yang nyaman untuk pencarian dan input data bagi orang awam.
2. Mengimplementasikan jquery, select2 , fileinputjs , dropzone , datatable

Fitur tambahan :
1. Menggunakan validator jquery
2. Menyediakan akses api untuk list pegawai
bisa diaksis di : http://localhost:8000/api/pegawai

3. Menyediakan seeder untuk data dummy
- sesuaikan .env pada database
- akses storage dengan commend :
php artisan storage:link
- migrasi data dengan commend : 
php artisan migrate
- seender data dammy jumlah 50 data dengan commend : 
php artisan db:seed