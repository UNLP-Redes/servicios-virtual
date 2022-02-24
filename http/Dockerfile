FROM httpd:2.4-alpine

RUN apk --no-cache add php7-apache2

COPY --chown=www-data:www-data src/ /usr/local/apache2/htdocs/

COPY conf/restringido.conf /usr/local/apache2/conf/

COPY conf/htpasswd /usr/local/apache2/conf/

RUN echo "Include conf/restringido.conf" >> /usr/local/apache2/conf/httpd.conf
