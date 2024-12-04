FROM nginx:latest

# Устанавливаем PHP и необходимые зависимости
RUN apt-get update && apt-get install -y php7.4-fpm

# Копируем файлы проекта в контейнер
COPY . /usr/share/nginx/html

# Копируем конфигурационный файл Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Открываем порт 8080
EXPOSE 8080

# Запускаем Nginx
CMD ["nginx", "-g", "daemon off;"]
