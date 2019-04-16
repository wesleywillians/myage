FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx
RUN rm -rf /usr/share/nginx/html
COPY . /usr/share/nginx

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    composer install && \
    ln -s public html && \
    vendor/bin/phpunit