#!/bin/ash

postfix start
dovecot -F
exec "$@"