FROM php:8.2-apache

WORKDIR /var/www/html/unifi-voucher-service

RUN apt update && apt upgrade -y

RUN apt-get install -y git \
    curl \
    openssl \
    libcurl4-openssl-dev \
    libzip-dev \
    unzip \
    gcc \
    libjpeg-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    imagemagick \
    libmcrypt-dev \
    usbutils \
    # Dependencies for printer and labels
    python3-setuptools \
    python3-pip \
    libopenjp2-7-dev \
    fontconfig && \
    rm -rf /usr/lib/python3.11/EXTERNALLY-MANAGED && \
    rm -rf /var/lib/apt/lists/\* /tmp/\* /var/tmp/*

RUN pip3 install --upgrade https://github.com/pklaus/brother_ql/archive/master.zip

# Enable all php extensions
RUN docker-php-ext-install curl && \
    docker-php-ext-enable curl && \
    docker-php-ext-configure gd --with-freetype && \
    docker-php-ext-install gd && \
    docker-php-ext-enable gd

# Clone unifi api client for php
RUN git clone https://github.com/Art-of-WiFi/UniFi-API-client.git /usr/src/UniFi-API-client

#Setup user
COPY --chown=www-data . .

RUN usermod -aG lp www-data
RUN chown -R www-data:www-data /var/www
RUN chown -R www-data:www-data /dev/
RUN chmod -R 755 /var/www

USER www-data
HEALTHCHECK --interval=10s --timeout=10s --retries=3 CMD curl -f http://localhost/unifi-voucher-service/ || exit 1
EXPOSE 80