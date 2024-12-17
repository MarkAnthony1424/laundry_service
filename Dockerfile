# Use PHP with Apache as the base image
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y\
	libzip-dev \
	zip \
	curl && \
	apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Configure Apache DocumentRoot
ENV APACHE_DOCUMENT_ROOT=/var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
	sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy the application code
COPY . /var/www/html

# Set permissions for the application
RUN chown -R www-data:www-data /var/www/html && \
	chmod -R 755 /var/www/html

# Expose the port Apache is listening on
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
