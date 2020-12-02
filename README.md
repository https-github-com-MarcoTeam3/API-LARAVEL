


# SGMLUXURY **CODING ACADEMY**

<div><p><strong>Sharif - Gargani - Marco</strong></div>

<p align="center">
  <img width="460" height="300" src="https://i.postimg.cc/yYQ7pTTz/Sanzzs-titre.png">
</p>


## Laravel setup

### Install composer dependencies

```
cd laravel-app
composer install
```

### Database Migrations

After installing composer dependencies, add your database credentials in `.env` file and then run migrations.

```
php artisan migrate
```
### Database Seeding

After migratating your database tables, its time to seed some default data!! For now we want to seed the basic tables by force.

```
php artisan db:seed --force
```

Now, in the terminal run `artisan serve` command. It will run the application at `http://127.0.0.1:8000` URL, and that URL path used in the Vue.js app.

```
php artisan serve
```
