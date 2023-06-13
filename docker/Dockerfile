FROM php:8.1.19-fpm-alpine

COPY php.ini /usr/local/etc/php
COPY php-fpm.conf /usr/local/etc

# Setup GD extension
RUN apk add --no-cache \
    unzip \
    freetype \
    libjpeg-turbo \
    libpng \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd \
    && apk del --no-cache \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    && rm -rf /tmp/*

RUN apk add libzip-dev
RUN docker-php-ext-install pdo pdo_mysql zip bcmath

# Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY --chown=www-data . /var/www/html

WORKDIR /var/www/html
