<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Prerequisites

    sudo apt-get install php7.0 php7.0-cli php7.0-dev
    libbson-1.0-0 libbson-dev libbson-doc libmongoc-1.0-0 
    libmongoc-dev libmongoc-doc php7.0-mysql 
    php7.0-mbstring php7.0-zip

- Ofcourse, Laravel and MongoDB are also prerequisites

       composer global require "laravel/installer"
More info on installing  [MongoDB](https://docs.mongodb.com/manual/tutorial/install-mongodb-on-ubuntu/) 

    echo 'export PATH="$PATH:$HOME/.config/composer/vendor/bin"' >> ~/.bashrc
    source ~/.bashrc


## Database Management System
Mongo DB
You will need to install the PHP MongoDB Driver with [Pecl](http://php.net/manual/en/mongodb.installation.pecl.php)

If you don't have PHP Pecl:
    
    sudo apt-get install php-pear
    
Please note the path that is mongodb.so that is referenced at this install.
After installing the Mongodb php driver, configure this extension in the php.ini file

    sudo vi /etc/php/7.0/apache2/php.ini
by adding the following: 

    extension=/usr/lib/php/20151012/mongodb.so
    
This is the same path that is printed after you install the mongo db driver with Pecl.

##Configure your Virtual Host File "/etc/apache2/sites-available/"
Make sure that this points to the correct project root directory.

    <VirtualHost *:80>

        ServerAdmin webmaster@localhost
        #DocumentRoot /var/www/html
        DocumentRoot "/home/deezbeans/Documents/gpr/gpr-project/public"
        <Directory "/home/deezbeans/Documents/gpr/gpr-project">
          # Require all granted
         #  DirectoryIndex index.php
           Require local
           Allowoverride All
        </Directory>

## Install


After you have cloned or downloaded this repository, simply put it in your webserver root directory.
You may have to run 

    sudo a2enmod rewrite
Now install the dependency manager [Composer](https://getcomposer.org/download/) and run 

    composer install



## Common issuses with file permission
After the site is up and running, if you run into any file permission errors,
you may have to run the following. 

    sudo chmod 775 -R storage/
    sudo chmod 775 -R bootstrap/cache/
<!---## Learning Laravel 
Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
--->
