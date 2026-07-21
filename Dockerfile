FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    nodejs \
    npm \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite pdo_mysql

COPY . .

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

RUN mkdir -p database
RUN touch database/database.sqlite

RUN php artisan optimize

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000