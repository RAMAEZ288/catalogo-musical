FROM php:8.2-fpm

# Instalar dependencias del sistema y extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    libicu-dev libpq-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar Node (opcional para build de assets)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . /var/www/html

# Instalar dependencias PHP y construir assets
RUN composer install --no-dev --optimize-autoloader --no-interaction || true
RUN php artisan key:generate || true
RUN npm install --legacy-peer-deps || true
RUN npm run build || true

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true

EXPOSE 9000

# Comando que arranca el servidor (para Railway)
CMD ["sh","-c","php artisan config:cache || true && php artisan storage:link || true && php -S 0.0.0.0:$PORT -t public"]
