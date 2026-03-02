FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git curl unzip zip libpng-dev libonig-dev \
    libxml2-dev libzip-dev libsodium-dev \
    default-libmysqlclient-dev libfreetype6-dev libjpeg62-turbo-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip sodium

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --optimize-autoloader --no-dev --no-interaction --ignore-platform-reqs

RUN cp .env.example .env

EXPOSE 8000

CMD php artisan key:generate --force && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000