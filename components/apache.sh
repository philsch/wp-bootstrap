#!/bin/bash

apt-get install -y apache2

# add a fqdn to ommit implicit localhost setting
echo "ServerName localhost" >> /etc/apache2/httpd.conf
# webroot
sed -i "s#DocumentRoot /var/www#DocumentRoot ${VAGRANT_SYNCED_DIR}/web#" /etc/apache2/sites-enabled/000-default
sed -i "s#<Directory /var/www/>#<Directory ${VAGRANT_SYNCED_DIR}/web/>#" /etc/apache2/sites-enabled/000-default
