FROM php:7.4-apache

RUN a2enmod rewrite

COPY ./ /var/www/html

RUN service apache2 restart