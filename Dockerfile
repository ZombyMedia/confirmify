FROM nimmis/apache-php5:latest
RUN apt-get update -y && \
    apt-get install -y \
        cron \
        curl graphicsmagick-imagemagick-compat mysql-client php5-gd php5-curl php5-mcrypt php5-mysql php5-ldap \
        supervisor && \
    rm -rf /var/lib/apt/lists/*


RUN usermod -u 1000 www-data

RUN bash -c 'mkdir -p /var/www/site'
RUN bash -c 'mkdir -p /etc/ssl/site'
RUN rm -f /etc/apache2/sites-enabled/default-ssl.conf
ADD conf/ssl/server.crt /etc/ssl/site/server.crt
ADD conf/ssl/server.key /etc/ssl/site/server.key
ADD conf/php.ini /etc/php5/apache2/conf.d/
ADD conf/vhost.conf /etc/apache2/sites-available/vhost.conf
RUN a2enmod ssl
RUN a2enmod rewrite
RUN a2enmod expires
RUN a2ensite vhost

EXPOSE 80
