FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
            git \
            curl \
            libpng-dev \
            libonig-dev \
            libxml2-dev \
            zip \
            unzip\
	    libfreetype6-dev \
	    libjpeg62-turbo-dev \
	    && docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
	    && docker-php-ext-install gd

RUN apt-get update && apt-get install -y default-mysql-client && rm -rf /var/lib/apt

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN curl -sL https://deb.nodesource.com/setup_19.x | bash -
RUN apt-get install -y nodejs

# ADD php.ini /usr/local/etc/php/conf.d/php.ini
WORKDIR /var/www
COPY --chown=www-data:www-data ./ /var/www
RUN chmod -R 777 /var/www/templates_c


CMD ["php-fpm"]
