FROM php:8.3-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    procps \
    git \
    unzip \
    curl \
    libzip-dev \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite zip \
    && rm -rf /var/lib/apt/lists/*

# install envconsul (amd64)
RUN curl -fsSL -o /tmp/envconsul.zip \
    https://releases.hashicorp.com/envconsul/0.13.4/envconsul_0.13.4_linux_amd64.zip \
 && unzip /tmp/envconsul.zip -d /usr/local/bin \
 && chmod +x /usr/local/bin/envconsul \
 && rm -f /tmp/envconsul.zip

# composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# copy app
COPY . .

# run script
COPY run.sh /app/run.sh
RUN chmod +x /app/run.sh

# install dependency
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN mkdir -p /app/database && touch /app/database/database.sqlite

RUN php artisan key:generate || true
RUN php artisan migrate || true

EXPOSE 8000

CMD ["/app/run.sh"]