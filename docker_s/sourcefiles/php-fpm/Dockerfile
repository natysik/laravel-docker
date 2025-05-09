FROM php:8.2-fpm

WORKDIR "/application"

RUN chown -R www-data:www-data /application

RUN apt-get update

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get install libzip-dev zip libicu-dev libpq-dev -y

RUN docker-php-ext-install zip && docker-php-ext-configure intl && docker-php-ext-install intl

RUN docker-php-ext-install mysqli pdo pdo_mysql