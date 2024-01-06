# Use an official PHP runtime as a parent image
FROM php:8.1-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip

RUN docker-php-ext-install pdo pdo_mysql zip

COPY . /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-interaction --optimize-autoloader

EXPOSE 9000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9000"]
