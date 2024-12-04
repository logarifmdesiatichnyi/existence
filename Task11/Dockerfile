FROM nginx:latest

# Копируем файлы в директорию /usr/share/nginx/html
COPY . /usr/share/nginx/html

# Копируем конфигурационный файл Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Открываем порт 8080
EXPOSE 8080

# Запускаем Nginx
CMD ["nginx", "-g", "daemon off;"]
