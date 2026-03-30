# Use an official PHP runtime with Apache
FROM php:8.2-apache

# Install required system packages and PHP extensions
# Source: Dolibarr Official Wiki - Prerequisites (https://wiki.dolibarr.org/index.php/Prerequisites)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install gd intl zip mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy Dolibarr's web directory (htdocs) to the Apache document root
COPY htdocs/ /var/www/html/

# Create the documents directory and set permissions
RUN mkdir -p /var/www/documents \
    && chown -R www-data:www-data /var/www/html/ /var/www/documents