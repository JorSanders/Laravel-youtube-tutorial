ARG PHPVERSION=0
FROM php:${PHPVERSION}-fpm-alpine

# I think this is needed in the start
RUN docker-php-source extract

RUN apk update

#RUN apk add --no-cache openssl
#RUN apk add --no-cache	zip
#RUN apk add --no-cache	unzip
#RUN apk add --no-cache	git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Xdebug
RUN apk add --no-cache	g++ make
RUN apk add --no-cache	autoconf
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# PWT requirements
#RUN apk add --no-cache	freetype
#RUN apk add --no-cache	freetype-dev
#RUN apk add --no-cache	libpng
#RUN apk add --no-cache	libpng-dev
#RUN apk add --no-cache	libjpeg-turbo
#RUN apk add --no-cache	libjpeg-turbo-dev
#RUN docker-php-ext-install mysqli
#RUN docker-php-ext-install gd

# Laravel requirements
#RUN docker-php-ext-install pdo
#RUN docker-php-ext-install mbstring
RUN apk add --no-cache libmcrypt-dev
RUN apk add --no-cache mysql-client
RUN docker-php-ext-install pdo_mysql

# Clean up
RUN docker-php-source delete
RUN rm -rf /var/cache/apk/*


