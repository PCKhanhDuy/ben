# Sử dụng PHP 8.2 chính thức
FROM php:8.2-cli

# Cài extension Laravel thường cần
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath

# Cài Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Tạo thư mục làm việc trong container
WORKDIR /var/www

# Copy toàn bộ project vào container
COPY . .

# Cài đặt Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Tạo app key (nếu chưa có)
RUN php artisan key:generate || true

# Mở port cho Laravel serve
EXPOSE 8000

# Khởi động Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
