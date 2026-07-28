FROM alpine:3.19

WORKDIR /app

EXPOSE 80 443 3000 3001

RUN apk update

RUN apk add \
    nginx \
    php81-fpm \
    php81-curl \
    php81-iconv \
    php81-mbstring \
    php81-openssl \
    php81-zip \
    php81-tokenizer \
    php81-dom \
    php81-phar \
    php81-xml \
    php81-xmlwriter \
    procps \
    npm

RUN ln -s /usr/bin/php81 /usr/bin/php

#COPY docker/prod/php.ini /usr/local/etc/php/php.ini
#COPY docker/prod/nginx.conf /etc/nginx/nginx.conf
#COPY docker/prod/nginx.http.conf /etc/nginx/conf.d/nginx.http.conf

COPY docker/prod/crontab-root /etc/crontabs/root
RUN chmod 0644 /etc/crontabs/root
RUN crontab /etc/crontabs/root

# Install composer manually, pointing at php81
RUN wget -qO /tmp/composer-setup.php https://getcomposer.org/installer \
    && php81 /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm /tmp/composer-setup.php

COPY ./docker/docker-entrypoint.sh /usr/local/sbin/
RUN chmod +x /usr/local/sbin/docker-entrypoint.sh
    
ENTRYPOINT ["sh", "/usr/local/sbin/docker-entrypoint.sh"]
