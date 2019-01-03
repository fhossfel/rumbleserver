
FROM php:apache

MAINTAINER Thought Gang GmbH, Hamburg <support@thoughtgang.de>

WORKDIR /var/www/html/

COPY . .

RUN a2enmod rewrite expires && mv config/docker-config.php config/config.php

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]