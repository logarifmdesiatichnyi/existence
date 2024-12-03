FROM php:8.2-fpm

# Устанавливаем Nginx
RUN apt-get update && apt-get install -y nginx

# Настраиваем директорию для веб-файлов
WORKDIR /var/www/html

# Копируем проект в контейнер
COPY . /var/www/html

# Копируем конфиг для Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Открываем порты
EXPOSE 82

# Запускаем PHP-FPM и Nginx
CMD service php8.2-fpm start && nginx -g "daemon off;"
