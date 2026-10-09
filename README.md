# Mini-Perpus (UTS Framework Programming)

Folder ini berisi file inti yang ditambahkan/ditimpa ke project Laravel baru.

## Setup
1. composer create-project laravel/laravel mini-perpus
2. Salin isi folder ini (routes, app, database, resources) ke project, timpa jika diminta.
3. Buat database MySQL mini_perpus, lalu atur .env (DB_CONNECTION=mysql, DB_DATABASE=mini_perpus, DB_USERNAME=root, DB_PASSWORD=)
4. php artisan migrate
5. Uji relasi: php artisan tinker -> App\Models\Category::create(["name"=>"Fiksi"]);
6. php artisan serve -> http://127.0.0.1:8000
7. Ekspor DB: mysqldump -u root mini_perpus > mini_perpus.sql (taruh di root project)
