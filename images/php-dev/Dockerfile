FROM vergissberlin/boxshot-service-php

# Install composer
RUN apt-get update &&\
    apt-get install -y libmcrypt-dev &&\
    pecl install mcrypt-1.0.2 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# PHP extensions
RUN docker-php-ext-enable mcrypt
