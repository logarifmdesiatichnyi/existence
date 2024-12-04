FROM php:8.1-fpm

# Устанавливаем Nginx
RUN apt-get update && apt-get install -y nginx && apt-get clean

# Копируем проект в директорию веб-сервера
COPY . /var/www/html

# Копируем конфигурационный файл Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Назначаем права
RUN chmod -R 755 /var/www/html

# Указываем рабочую директорию
WORKDIR /var/www/html

# Открываем порт 8080
EXPOSE 8080

# Запускаем PHP-FPM и Nginx
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
