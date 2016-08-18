FROM php:5.5-apache
WORKDIR /var/www
RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev g++ 
RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql intl
RUN pecl install apcu-4.0.11 && echo extension=apcu.so > /usr/local/etc/php/conf.d/apcu.ini
RUN a2enmod rewrite