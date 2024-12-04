# Используем образ с PHP и Nginx
FROM php:7.4-fpm

# Устанавливаем Nginx
RUN apt-get update && apt-get install -y nginx

# Копируем файлы проекта в контейнер
COPY . /var/www/html

# Копируем конфигурацию Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Открываем порты для Nginx и PHP
EXPOSE 8080

# Запускаем Nginx и PHP-FPM
CMD service nginx start && php-fpm
