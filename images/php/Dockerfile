FROM php:7.3-apache

WORKDIR  /app

# Dependencies
RUN apt-get update &&\
    apt-get install -y \
    libmagickwand-dev --no-install-recommends &&\
    pecl install imagick

# PHP extensions
RUN docker-php-ext-install exif &&\
    docker-php-ext-enable imagick
