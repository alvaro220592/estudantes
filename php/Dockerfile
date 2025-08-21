FROM php:8.3-fpm-alpine

# Argumentos para UID/GID do host
ARG UID=1000
ARG GID=1000

# Instalar dependências do sistema
RUN apk add --no-cache \
    bash git unzip curl nodejs npm \
    libzip-dev sqlite sqlite-dev oniguruma-dev sudo

# Instalar extensões do PHP
RUN docker-php-ext-install pdo pdo_sqlite pdo_mysql zip mbstring

# Criar usuário para rodar PHP/NPM
RUN addgroup -g $GID appuser \
    && adduser -D -u $UID -G appuser appuser \
    && mkdir -p /var/www/html \
    && chown -R appuser:appuser /var/www/html

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Criar pasta de cache do npm com permissão correta
RUN mkdir -p /var/www/.npm && chown -R appuser:appuser /var/www/.npm

# Configurar PATH e cache do npm
ENV PATH="/usr/local/bin:$PATH"
ENV NPM_CONFIG_CACHE=/var/www/.npm

# Definir diretório de trabalho
WORKDIR /var/www/html

# Mudar para o usuário criado
USER appuser
