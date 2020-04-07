FROM php:7.3-apache

WORKDIR  /root

# Dependencies
RUN apt-get update &&\
    apt-get install -y nodejs \
    libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev libfreetype6-dev libzip-dev \
    gconf-service libasound2 libatk1.0-0 libc6 libcairo2 libcups2 libdbus-1-3 libexpat1 \
    libfontconfig1 libgcc1 libgconf-2-4 libgdk-pixbuf2.0-0 libglib2.0-0 libgtk-3-0 libnspr4 \
    libpango-1.0-0 libpangocairo-1.0-0 libstdc++6 libx11-6 libx11-xcb1 libxcb1 libxcomposite1 \
    libxcursor1 libxdamage1 libxext6 libxfixes3 libxi6 libxrandr2 libxrender1 libxss1 libxtst6 \
    ca-certificates fonts-liberation libappindicator1 libnss3 lsb-release xdg-utils wget \
    zip unzip --no-install-recommends

RUN curl -O -L https://npmjs.org/install.sh &&\
    bash ./install.sh &&\
    npm i -g n &&\
    n stable &&\
    node -v &&\
    npm -v

# PHP extensions
RUN docker-php-ext-install exif gd mbstring zip &&\
    docker-php-ext-configure gd --with-gd --with-webp-dir --with-jpeg-dir \
    --with-png-dir --with-zlib-dir --with-xpm-dir --with-freetype-dir &&\
    docker-php-ext-install gd &&\
    php -v

WORKDIR  /app
RUN groupadd -r "boxshot" -g 1000 > /dev/null 2>&1 || true
RUN useradd --no-log-init  --create-home -u 1000 -g "boxshot" -s /bin/bash -d "/home/boxshot" "boxshot" > /dev/null 2>&1 || true
RUN chown 1000:1000 .
RUN echo 'kernel.unprivileged_userns_clone=1' > /etc/sysctl.d/userns.conf

USER 1000

# Puppeteer
RUN npm i puppeteer

