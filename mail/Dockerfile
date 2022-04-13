FROM alpine:3.11

RUN apk --no-cache add postfix dovecot dovecot-pop3d && \
    rm /etc/dovecot/conf.d/* && \
    mkdir /etc/dovecot/private && \
    chmod 500 /etc/dovecot/private && \
    echo "postmaster: root" > /etc/aliases && \
    postalias /etc/aliases && \
    mkdir /home/alumnopop && \
    mkdir /home/alumnoimap && \
    echo "alumnopop:x:1000:1000:Alumno POP,,,:/home/alumnopop:/bin/bash" >> /etc/passwd && \
    echo "alumnoimap:x:1001:1001:Alumno IMAP,,,:/home/alumnoimap:/bin/bash" >> /etc/passwd && \
    echo "alumnopop:x:1000:" >> /etc/group && \
    echo "alumnoimap:x:1001:" >> /etc/group && \
    echo "alumnopop:$6$n9UJq0CB$wOTXwOxle4a6CUuzxTKouP8txIBq4pAhKSSfUBAwYBrU18w5qpMDo5nXtnd5u4X.w1wXwpATFOmClxome41s61:16876:0:99999:7:::" >> /etc/shadow && \
    echo "alumnoimap:$6$Pzp2EJM1$9BEqrHYeCiZXvuVolZwLYNwaR1ArI5RPapulXYkUGNsIImjoh0vAqjKIzc62d1tpnF9wn8lGDhcNShH3N9IhS0:16876:0:99999:7:::" >> /etc/shadow
   
COPY alumnopop /home/alumnopop/
COPY alumnoimap /home/alumnoimap/
COPY dovecot/dovecot.conf /etc/dovecot/
COPY dovecot/conf.d/* /etc/dovecot/conf.d/
COPY dovecot/dovecot-pub.pem /etc/dovecot/dovecot.pem
COPY dovecot/dovecot.pem /etc/dovecot/private/
COPY dovecot/passwd /etc/dovecot/passwd
COPY postfix/main.cf /etc/postfix/
COPY postfix/master.cf /etc/postfix/
COPY postfix/ssl-cert-snakeoil.pem /etc/ssl/certs/ssl-cert-snakeoil.pem
COPY postfix/ssl-cert-snakeoil.key /etc/ssl/private/ssl-cert-snakeoil.key
COPY start_services /opt/

RUN chmod 600 /etc/dovecot/private/dovecot.pem && \
    chown -R alumnopop:alumnopop /home/alumnopop && \
    chown -R alumnoimap:alumnoimap /home/alumnoimap && \
    chmod 755 /opt/start_services

CMD ["/opt/start_services"]
