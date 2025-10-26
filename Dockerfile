# Gunakan image PHP resmi dengan Apache
FROM php:8.2-apache

# Install ekstensi yang diperlukan Laravel
RUN apt-get update && apt-get install -y \
    git zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy semua file project ke dalam container
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Buat APP_KEY
RUN php artisan key:generate

# Beri izin tulis pada folder penting
RUN chmod -R 777 storage bootstrap/cache

# Copy konfigurasi Apache (agar public jadi root)
COPY ./public /var/www/html

# Jalankan Laravel menggunakan built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]

# Expose port ke Render
EXPOSE 10000
