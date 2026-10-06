# ---------------------------------------------------------
# Stage 1: Install PHP dependencies
# ---------------------------------------------------------
FROM composer:2 AS composer

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    --no-scripts


# ---------------------------------------------------------
# Stage 2: Build Vite assets
# ---------------------------------------------------------
FROM node:22-bookworm AS frontend

WORKDIR /app

COPY package.json package-lock.json ./

RUN npm ci

COPY resources ./resources
COPY vite.config.js ./

RUN npm run build


# ---------------------------------------------------------
# Stage 3: Production PHP + Nginx
# ---------------------------------------------------------
FROM php:8.3-fpm-bookworm

WORKDIR /var/www/html

# Install system packages
RUN apt-get update && apt-get install -y \
    nginx \
    supervisor \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libcurl4-openssl-dev \
    && rm -rf /var/lib/apt/lists/*

# Configure GD
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

# Install PHP extensions required by Laravel
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    bcmath \
    exif \
    pcntl \
    gd \
    intl \
    zip

# PHP production configuration
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy Composer dependencies
COPY --from=composer /app/vendor ./vendor

# Copy complete Laravel application
COPY . .

# Copy Vite production build
COPY --from=frontend /app/public/build ./public/build

# Laravel writable directories
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

# Permissions
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache \
    public

RUN chmod -R 775 \
    storage \
    bootstrap/cache

# Nginx configuration
COPY docker/nginx/default.conf /etc/nginx/sites-available/default

# Supervisor configuration
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Startup script
COPY docker/start.sh /usr/local/bin/start.sh

RUN chmod +x /usr/local/bin/start.sh

# Render's default web-service port
EXPOSE 10000

# Start PHP-FPM + Nginx
CMD ["/usr/local/bin/start.sh"]