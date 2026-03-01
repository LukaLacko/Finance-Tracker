FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    zip \
    unzip \
    && docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --optimize-autoloader --no-dev --no-interaction --ignore-platform-reqs

COPY start.sh .
RUN chmod +x start.sh

EXPOSE 8000

CMD ["./start.sh"]