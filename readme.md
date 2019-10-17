### 1. Install

```bash
$ git clone git@github.com:brunarocha/safety-cubic.git
$ cd safety-cubic
$ composer install
```

### 2. Config

Make a copy of the .env-example file and rename it to .env and follow the settings

```bash
$ php artisan key:generate
```

### 3. Database

In the .env file, edit the database information.

```bash
DB_CONNECTION=mysql
DB_HOST=XXXXXX
DB_PORT=3306
DB_DATABASE=safetycubic
DB_USERNAME=XXXX
DB_PASSWORD=XXXXX
```

Create the database for project before run artisan command.

```bash
php artisan migrate:fresh --seed
```

### 4. Dependencies

Install dependencies from NPM.

```bash
npm install
```