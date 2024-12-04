FROM webdevops/php-nginx:8.3

# Настройка переменных окружения
ENV WEB_DOCUMENT_ROOT=/app \
    WEB_DOCUMENT_INDEX=index.html \
    WEB_ALIAS_DOMAIN=*.vm \
    WEB_PHP_TIMEOUT=600 \
    WEB_PHP_SOCKET=127.0.0.1:9000 \
    WEB_NO_CACHE_PATTERN="\.(css|js|gif|png|jpg|svg|json|xml)$"

# Копируем конфигурационные файлы
COPY conf/ /opt/docker/

# Устанавливаем необходимые инструменты и расширения
RUN set -x \
    && BLACKFIRE_INSTALL_METHOD=raw bash -c "$(curl -L https://installer.blackfire.io/installer.sh)" \
    && blackfire php:install \
    && echo 'deb https://packages.tideways.com/apt-packages-main any-version main' | tee /etc/apt/sources.list.d/tideways.list \
    && wget -qO - https://packages.tideways.com/key.gpg | apt-key add - \
    && apt-get update \
    && apt-get install -y tideways-php tideways-daemon \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-service enable syslog \
    && docker-service enable postfix \
    && docker-service enable ssh \
    && docker-run-bootstrap \
    && docker-image-cleanup

# Копируем проект в контейнер
COPY . /app

# Открываем порт 80 для Nginx
EXPOSE 80
