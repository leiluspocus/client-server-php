FROM php:7.4-apache

COPY . /src
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /src \
    && a2enmod rewrite