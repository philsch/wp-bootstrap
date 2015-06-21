wp-bootstrap
============
Vagrant configuration to bring up a LAMP-Environment with a latest Wordpress installation.
This repo was forked from git://github.com/Lukx/vagrant-lamp.git and adjusted for my personal needs.
Feel free to contribute and use it in your own projects.

! Attention: this setup is only meant to be used for development, do NOT use in production ! 

## Installed Components
* apache2
* vim
* pwgen
* git
* php5
* MySQL
* composer
* Wordpress latest version

## Installation instruction
* Fork this repository
* Make sure Vagrant and VirtualBox is installed on your machine
* Run ```vagrant up``` on command line inside of this directory
* A latest Wordpress copy will be installed in /home/vagrant/synced/web/, Apache docroot also points there
* Complete your installation visiting http://10.10.47.11/ 
