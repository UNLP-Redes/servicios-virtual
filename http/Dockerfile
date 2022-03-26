FROM alpine:3.15

RUN apk --no-cache add php7-apache2 && rm -Rf /var/www/localhost/htdocs/*

COPY src /var/www/localhost/htdocs/
COPY conf/restringido.conf /etc/apache2/conf.d/
COPY conf/htpasswd /etc/apache2/

ENV APACHE_RUN_USER apache
ENV APACHE_RUN_GROUP apache
ENV APACHE_LOG_DIR /var/log/apache2

RUN chown -R apache:apache /var/www/localhost/htdocs/

CMD ["httpd", "-D", "FOREGROUND"]
