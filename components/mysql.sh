#!/bin/bash

debconf-set-selections <<< 'mysql-server \
 mysql-server/root_password password root'
debconf-set-selections <<< 'mysql-server \
 mysql-server/root_password_again password root'
apt-get install -y php5-mysql mysql-server

cat << EOF | tee -a /etc/mysql/conf.d/default_engine.cnf
[mysqld]
default-storage-engine = MyISAM
EOF

service mysql restart