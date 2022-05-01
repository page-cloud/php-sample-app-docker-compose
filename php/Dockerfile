FROM php:7.3.3-apache
RUN docker-php-ext-install mysqli
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
EXPOSE 80
