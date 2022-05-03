FROM php:7-apache

RUN apt-get update && apt-get install -y nodejs npm zip unzip
WORKDIR /app
COPY ./package.json /app
RUN npm install

RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD php artisan serve --host=0.0.0.0 --port=8080