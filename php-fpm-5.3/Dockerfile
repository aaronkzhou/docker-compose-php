# BASE
FROM helder/php-5.3

# Packages
RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng12-dev \
    libbz2-dev \
    php-pear \
    curl \
    git \
    wget \
    && rm -r /var/lib/apt/lists/*

# Freetype 5.3 bug
RUN mkdir /usr/include/freetype2/freetype \
   && ln -s /usr/include/freetype2/freetype.h /usr/include/freetype2/freetype/freetype.h

# PHP Extensions
RUN docker-php-ext-install mcrypt zip bz2 mbstring \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-install gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && wget https://phar.phpunit.de/phpunit-6.0.phar \
    && chmod +x phpunit-6.0.phar \
    && mv phpunit-6.0.phar /usr/local/bin/phpunit

RUN php --version