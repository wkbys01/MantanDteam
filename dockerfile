FROM php:8.4
WORKDIR /workdir
COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_HOME="/opt/composer"
ENV PATH="$PATH:/opt/composer/vendor/bin"
RUN apt-get update && apt-get install -y zip unzip git \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY . .
WORKDIR /workdir/order_app
RUN composer install
CMD [ "php", "artisan", "serve", "--host", "0.0.0.0" ]
EXPOSE 8000