# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy your PHP script to the web server's document root
COPY ./app.php /var/www/html/index.php

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
