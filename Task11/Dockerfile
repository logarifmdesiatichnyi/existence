FROM nginx:latest

# Устанавливаем необходимые пакеты (включая PHP-FPM)
RUN apt-get update && apt-get install -y php-fpm

# Копируем файлы проекта в директорию Nginx
COPY . /usr/share/nginx/html

# Копируем конфигурацию Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Устанавливаем права доступа
RUN chmod -R 755 /usr/share/nginx/html

# Открываем порт 8080
EXPOSE 8080

# Запускаем PHP-FPM и Nginx
CMD service php7.4-fpm start && nginx -g "daemon off;"
