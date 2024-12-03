# Используем официальный образ PHP с FPM
FROM php:8.2-fpm

# Устанавливаем Nginx
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

# Копируем конфигурацию Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Копируем файлы проекта в контейнер
COPY . /var/www/html/

# Открываем порты 82 для доступа
EXPOSE 82

# Настроим PHP для использования с Nginx
CMD service nginx start && php-fpm
