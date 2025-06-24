FROM php:8.1.5-cli
#FROM magento/magento-cloud-docker-php:8.1.5-cli-1.1

ARG ssh_prv_key
ARG ssh_pub_key

RUN apt-get update && apt-get -y install cron

RUN apt-get install -y -qq libjpeg62-turbo-dev libpng-dev libxml2-dev libxslt-dev libsodium-dev libzip-dev libfreetype6-dev openssh-server
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN apt-get install -y git unzip \
                           libfreetype6-dev \
                           libjpeg62-turbo-dev \
                           libxml2-dev \
                           libxslt1-dev \
			               build-essential \
			               supervisor

RUN docker-php-ext-install  pdo \
                            pdo_mysql \
                            gd \
                            bcmath \
                            intl \
                            xsl \
                            soap \
                            sockets \
                            simplexml \
                            pcntl \
                            exif \
                            opcache \
                            dom

RUN apt-get install -y \
            libzip-dev \
            zip \
            ssmtp \
            mailutils \
            wget \
      && docker-php-ext-install zip

COPY --from=composer:2.2.7 /usr/bin/composer /usr/local/bin/composer

RUN wget https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64
RUN chmod +x mhsendmail_linux_amd64
RUN mv mhsendmail_linux_amd64 /usr/local/bin/mhsendmail

COPY ./crontab /etc/cron.d/crontab
RUN chmod 0644 /etc/cron.d/crontab
RUN /usr/bin/crontab /etc/cron.d/crontab

WORKDIR /opt/project/
CMD ["php-fpm"]

EXPOSE 9000
