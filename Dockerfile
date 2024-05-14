FROM php:8.1

WORKDIR /var/www/html

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Copy files into the container
COPY ./ ./

# Expose port 8000
EXPOSE 8000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:8000"]

