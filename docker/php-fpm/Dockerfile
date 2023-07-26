FROM php:8.1.19-fpm

RUN apt-get update

RUN apt-get install -y zip

RUN apt-get -y install libzip-dev
RUN docker-php-ext-install zip

RUN docker-php-ext-install pdo_mysql

RUN apt-get install -y libmemcached-dev zlib1g-dev \
    && pecl install memcached-3.2.0 \
    && docker-php-ext-enable memcached
