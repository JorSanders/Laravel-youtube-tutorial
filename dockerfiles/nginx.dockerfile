ARG PHPVERSION=7.1
FROM php:${PHPVERSION}-fpm-alpine

RUN groupadd -g 1002 phpuser
RUN useradd -ms /bin/bash phpuser -u 1002 -g 1002
USER phpuser
WORKDIR /home/phpuser