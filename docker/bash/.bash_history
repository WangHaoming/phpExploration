tail -f /var/log/apache2/error.log .
find . -name mod_rewrite.c
find / -name mod_rewrite.c
a2enmod rewrite
service apache2 restart
