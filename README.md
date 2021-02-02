# Metamata-code-challenge-backend

Membuat media untuk berbagi cerita; website sederhana untuk membaca dan memposting cerita;

---

## Installation

```
git clone https://github.com/ciel-panthomhive/Metamata-code-challenge-backend.git
```

## Configuration

1. Open Project Metamata-code-challenge-backend
- Setup Installation
    1. Open meta-challenge
    2. Run `composer install`
    3. Run `npm install`
    4. Run `npm run dev`

- Setup Environtment
    1. Duplicate `.env.example`
    2. Rename to `.env`
    3. Run `php artisan key:generate`
    4. Setup `.env`
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=yourdatabase
        DB_USERNAME=yourusername
        DB_PASSWORD=yourpassword
        ```
        > Don't forget to create database in MySQL

- Setup Project
    1. Open terminal with path the project
    2. Run `php artisan migrate`
    3. Run `php artisan serve`
    4. Open the url
