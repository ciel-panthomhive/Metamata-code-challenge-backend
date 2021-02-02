# Metamata-code-challenge-backend

Membuat media untuk berbagi cerita; website sederhana untuk membaca dan memposting cerita;

---

## Prerequisite

1. XAMPP php >= 7.3 [Download](https://www.apachefriends.org/index.html)
2. Postgre SQL >= 12 [Download](https://www.postgresql.org)
3. Node JS [Download](https://nodejs.org/en)
4. Composer [Download](https://getcomposer.org/download)
5. Git [Download](https://git-scm.com/downloads)

## Installation

```
git clone https://github.com/arifblogger77/emergency-room.git
```

## Configuration

### Laravel
1. Open Project Emergency Room
- Setup Installation
    1. Open Metamata-code-challenge-backend
    2. Open meta-challenge
    3. Run `composer install`
    4. Run `npm install`
    5. Run `npm run dev`

- Setup Environtment
    1. Duplicate `.env.example`
    2. Rename to `.env`
    3. Run `php artisan key:generate`
    4. Setup `.env`
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=5432
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
