FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install dependencies
RUN composer install

# Generate app key
RUN php artisan key:generate

# Set permissions
RUN chmod -R 755 /var/www/storage

# Start the app
CMD php artisan serve --host=0.0.0.0 --port=8000
