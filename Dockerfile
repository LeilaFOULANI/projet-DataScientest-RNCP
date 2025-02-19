FROM php:8.0-apache


RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd && \
    docker-php-ext-install pdo pdo_mysql mysqli


RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


COPY ./html /var/www/html

WORKDIR /var/www/html
