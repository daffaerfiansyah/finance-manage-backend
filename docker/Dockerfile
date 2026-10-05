FROM serversideup/php:8.3-fpm-nginx-alpine

USER root

# Pasang driver PostgreSQL PDO
RUN install-php-extensions pdo_pgsql pgsql

# Batasi worker PHP-FPM ke mode ondemand untuk menghemat RAM STB
RUN echo "pm = ondemand" >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo "pm.max_children = 4" >> /usr/local/etc/php-fpm.d/zz-docker.conf && \
    echo "pm.process_idle_timeout = 10s" >> /usr/local/etc/php-fpm.d/zz-docker.conf

WORKDIR /var/www/html

# Salin source code
COPY --chown=www-data:www-data . .

USER www-data

EXPOSE 8080
