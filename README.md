# MEdical courSES

## How To Install

### 1. Clone This Repo

```sh
git clone https://github.com/kaori02/MESES
```

### 2. Install Composer

```sh
cd MESES; composer install
```

### 3. Install Node Module

```sh
npm install && npm run dev
```

### 4. Create .env file

- Create `.env` file
- Copy everything from `.env.example` to `.env`
- Change `DB_DATABASE=laravel` to `DB_DATABASE=meses`
- Change `APP_NAME=Laravel` to `APP_NAME=MESES`

### 5. Create db named 'meses' on your local

### 6. create key

```sh
php artisan key:generate
```

### 7. Migrate

```sh
php artisan migrate
```

### 8. Run Web On Your Local

```sh
php artisan serve
```
