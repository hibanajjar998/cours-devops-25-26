FROM php:8.5-apache  
# le serveur Apache écoute déjà sur le port 80

LABEL version="1.0" maintainer="Hiba"

# Activation des modules php
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR  /var/www/html

COPY app/ .