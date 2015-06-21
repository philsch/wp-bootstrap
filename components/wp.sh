#!/bin/bash

# download latest WP version
mkdir ~/tmp/
cd ~/tmp/
wget https://wordpress.org/latest.tar.gz
tar -xf latest.tar.gz
cp ~/tmp/wordpress/* ${VAGRANT_WEB_DIR} -R

cd ${VAGRANT_WEB_DIR}
rm -rf ~/tmp

# create a DB for wp
mysql -uroot -proot -e "CREATE SCHEMA wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;"

# configure WP
cp ${VAGRANT_RESOURCES_DIR}/wp-config.php wp-config.php



