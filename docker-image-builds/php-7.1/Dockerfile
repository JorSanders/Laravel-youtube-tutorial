FROM php:7.1-fpm-alpine
RUN apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev g++ make autoconf \
	&& docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && rm -rf /var/cache/apk/*
