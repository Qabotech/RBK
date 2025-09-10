        # Basis-Image: PHP mit Apache
FROM php:8.3-apache

# Installiere benötigte Pakete
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev git unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Apache mod_rewrite aktivieren
RUN a2enmod rewrite

# Setze DocumentRoot auf das Laravel-Verzeichnis
RUN sed -ri -e 's!/var/www/html!/var/www/html/RBK/public!g' /etc/apache2/sites-available/000-default.conf

# Arbeitsverzeichnis setzen
WORKDIR /var/www/html

# Projekt in den Container kopieren
COPY . .

# Composer installieren
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Laravel-Abhängigkeiten installieren
WORKDIR /var/www/html/RBK
RUN composer install --ignore-platform-reqs

# Berechtigungen für Laravel setzen
RUN chmod -R 777 storage bootstrap/cache

# Port 80 für Apache freigeben
EXPOSE 80

# Apache starten
CMD ["apache2-foreground"]
