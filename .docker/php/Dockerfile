FROM php:8.3.6-fpm

ARG ssh_prv_key
ARG ssh_pub_key

# Garante que pkg-config ache os .pc do ICU em Debian
ENV PKG_CONFIG_PATH="/usr/lib/x86_64-linux-gnu/pkgconfig:/usr/lib/pkgconfig:/usr/share/pkgconfig"

RUN set -eux; \
  apt-get update && apt-get install -y --no-install-recommends \
    libjpeg62-turbo-dev \
    libpng-dev \
    libfreetype6-dev \
    libxml2-dev \
    libxslt1-dev \
    libicu-dev \
    icu-devtools \
    libzip-dev \
    libsodium-dev \
    pkg-config \
    git unzip cron build-essential supervisor openssh-client zip wget curl ca-certificates \
  && rm -rf /var/lib/apt/lists/*

# Compila extensões PHP
RUN set -eux; \
  pkg-config --modversion icu-uc; \
  pkg-config --libs icu-uc icu-io icu-i18n; \
  docker-php-ext-configure gd --with-freetype --with-jpeg; \
  docker-php-ext-install -j"$(nproc)" \
    pdo pdo_mysql gd bcmath intl xsl soap sockets simplexml pcntl exif opcache dom zip; \
  pecl install -n xdebug; \
  docker-php-ext-enable xdebug

    # Magento Cloud CLI
RUN curl -fsSL -o /usr/local/bin/magento-cloud https://accounts.magento.cloud/cli/installer \
  && chmod +x /usr/local/bin/magento-cloud

# Mailhog sendmail
RUN wget -q https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 \
  && chmod +x mhsendmail_linux_amd64 \
  && mv mhsendmail_linux_amd64 /usr/local/bin/mhsendmail

# Configs PHP-FPM / Xdebug
COPY xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY www.conf /usr/local/etc/php-fpm.d/www.conf

# Composer
COPY --from=composer:2.8.6 /usr/bin/composer /usr/local/bin/composer

WORKDIR /opt/project/
CMD ["php-fpm"]
EXPOSE 9000