# Use the official PHP + Apache base image
FROM php:8.2-apache

# Enable Apache mod_rewrite (optional, but useful for many PHP apps)
RUN a2enmod rewrite

# Copy project files into Apache's web directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80
