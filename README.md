# Laravel Vuejs Inertia
A basic Laravel vuejs inertia 

## Requirements
- PHP >= 8.1
- Laravel <= 10.0
- MySQL
- Composer

## Setup instructions
### Clone repository
```bash
git clone git@github.com:Mastering-Vue-js/laravel-vuejs-inertia.git
cd laravel-vuejs-inertia
```
### Install dependency
```bash
composer install
```
```bash
npm install
```
### Copy `.env.example` to `.env` file
```bash
cp .env.example .env
```
### Connect Database
- Create a database in your mysql. e.g. laravel-vuejs-inertia
- Place database credentials in you `.env` file
```env
DB_DATABASE=laravel-vuejs-inertia
DB_USERNAME=<DATABASE-USER> # This is database user name
DB_PASSWORD=<DATABASE-PASSWORD> # This is database password
```
### Run database migration
```bash
php artisan migrate
```
or
```bash
php artisan migrate --seed
```
to automatically create some users in database
### Generate App key
```bash
php artisan key:generate
```
### Run Application
Two terminal need to run at a time
```bash
php artisan serve
```
```bash
npm run dev
```