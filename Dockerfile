FROM alpine:3.23.4

WORKDIR /app

EXPOSE 80 443 3000 3001

RUN apk update

RUN apk add \
    nginx \
    php84-fpm \
    php84-curl \
    php84-iconv \
    php84-mbstring \
    php84-openssl \
    php84-zip \
    php84-tokenizer \
    php84-dom \
    php84-phar \
    php84-xml \
    php84-xmlwriter \
    procps \
    npm \
    composer

#RUN ln -s /usr/bin/php8 /usr/bin/php

#COPY docker/prod/php.ini /usr/local/etc/php/php.ini
#COPY docker/prod/nginx.conf /etc/nginx/nginx.conf
#COPY docker/prod/nginx.http.conf /etc/nginx/conf.d/nginx.http.conf

COPY docker/prod/crontab-root /etc/crontabs/root
RUN chmod 0644 /etc/crontabs/root
RUN crontab /etc/crontabs/root

COPY ./docker/docker-entrypoint.sh /usr/local/sbin/
RUN chmod +x /usr/local/sbin/docker-entrypoint.sh
    
ENTRYPOINT ["sh", "/usr/local/sbin/docker-entrypoint.sh"]
