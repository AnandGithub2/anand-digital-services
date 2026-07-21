FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_sqlite pdo_mysql

COPY . .

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm composer-setup.php

RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

# IMPORTANT: Create SQLite database file
RUN mkdir -p database
RUN touch database/database.sqlite

# Laravel cache clear
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan route:clear
RUN php artisan view:clear

RUN php artisan optimize

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000