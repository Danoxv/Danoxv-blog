FROM php:8.2-fpm

# Install dependencies
RUN apt-get update  &&  apt-get install --no-install-recommends -y \
	build-essential ca-certificates \
	cron exim4 \
    exim4 \
	postgresql-client \
	libvips42 \
	libffi-dev \
	# Git
	git

# Clear cache
RUN apt-get clean  &&  rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli pdo pdo_mysql ffi

RUN sed -i "s/dc_eximconfig_configtype='local'/dc_eximconfig_configtype='internet'/g" \
	/etc/exim4/update-exim4.conf.conf  &&  update-exim4.conf
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for the application
# Replace 1000 with actual User ID in your environment OS (command: id -u)
RUN groupadd -g 1000 www  &&  useradd -u 1000 -ms /bin/bash -g www www

# Copy application files
COPY --chown=www:www . /var/www
RUN chown www:www -R /var/www/storage

# Change current user to www
USER www

# Set working directory
WORKDIR /var/www

CMD ["php-fpm"]
