vagrant-lamp
============

Readable, Transparent Shell-Provisioning for a LAMP-Environment with MariaDB

# What is it?

vavgrant-lamp provides a Shell Provisioner [for Vagrant](http://www.vagrantup.com/) which will leave you
with a working Ubuntu-LAMP-Environment with MariaDB 5.5.

## Installed Components
* apache2
* joe
* pwgen
* git
* php5
* mariadb
* composer

# How to use it
Right now, vagrant-lamp **only supports projects with `web` as the web-root directory.** This will change to a sleek
auto-detect variant within the next couple of commits.

Install vagrant-lamp as a git-submodule in your project, like so:
    git submodule add git://github.com/lukx/vagrant-lamp.git vagrant

Your Folder Structure should now look something like this
    |-Project Rooot
    |   |-.gitmodules
    |   |-.git/
    |   |-web/
    |   |   |-index.php
    |   |
    |   |-vagrant/  -> *(files from this project)*

Then, within the newly created vagrant folder, use `vagrant up` to get your machine started.

When everything went right, you'll have
* a running Apache2 Server on http://10.10.47.11/ with PHP Support
* a MariaDB database `vagrant` with User: `vagrant` and password `vagrant`

You can now ssh into that box using `vagrant ssh` to install your composer dependencies, maybe.

# Credit
I started off with edlingeer's excellent [answer on StackOverflow](http://stackoverflow.com/a/18032942/841636) and
adapted it to my needs, a more modular setup and using MariaDB; plus some minor setup.
