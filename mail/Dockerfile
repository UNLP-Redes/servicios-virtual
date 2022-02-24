FROM alpine:3.15

RUN apk --no-cache add \
    postfix \
    dovecot \
    dovecot-pop3d

RUN echo "postmaster: root" > /etc/aliases \
    && postalias /etc/aliases

RUN adduser -u 1000 -S alumnopop \
    && echo "alumnopop:alumnoppoppass" | chpasswd \
    && adduser -u 1001 -S alumnoimap \
    && echo "alumnoimap:alumnopimappass" | chpasswd

RUN sed -i 's/#protocols =.*/protocols = imap pop3/g' /etc/dovecot/dovecot.conf \
    && sed -i 's/#mail_location =.*/mail_location = maildir:~\/Maildir/g' /etc/dovecot/conf.d/10-mail.conf

COPY docker-entrypoint.sh /

RUN chmod +x /docker-entrypoint.sh

ENTRYPOINT [ "/docker-entrypoint.sh" ]

