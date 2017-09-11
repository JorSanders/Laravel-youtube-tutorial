FROM phpdockerio/php71-fpm:latest

# Install xdebug and imagick
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php-imagick php-xdebug \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


WORKDIR "/application"