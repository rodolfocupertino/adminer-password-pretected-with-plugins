# adminer-password-pretected-with-plugins

[Adminer](http://www.adminer.org/) (formerly phpMinAdmin) is a full-featured database management tool written in PHP. Conversely to phpMyAdmin, it consist of a single file ready to deploy to the target server. Adminer is available for MySQL, PostgreSQL, SQLite, MS SQL, Oracle, SimpleDB, Elasticsearch and MongoDB. 

**This customizations** is an easy alternative to install Adminer.

For more plugins visit the [Adminer Plugin Page](http://www.adminer.org/plugins/).

Customizations: 
- Plugins
- Password Protected: Forked Plugin  https://github.com/rsilvabr/adminer-plugin-PasswordProtection
- Dark Theme by Pepa Linha http://webdream.cz version 2.0.1

## How to use

1. Clone this repo, normaly to /var/www/html/

````
git clone https://github.com/rsilvabr/adminer-password-pretected-with-plugins.git .
````

move adminer-<version>.php to a dir with no web access
Ex: 
````
mv admminer-4-8.1php /var/www/
````
2. Change the index.php file like the following:
````
nano index.php 
````
On line 44 change the path to adminer-<version>.php file
````
include "../adminer-4.8.1.php";
````
Update sha1 password hash
````
nano plugins/PasswordProtection.php
````
In **line 7** of the plugin code, **replace** the predefined hash with **your** sha1 password **hash**.
To generate your own sha1 password hash, you can use online tools like [sha1-online](http://www.sha1-online.com/).

File structure has to be like the following one:
````
- plugins
    - plugin.php
    - ...
../../adminer-<version>.php #This file must be in a folder with no web access
- index.php
- adminer.css
````

[Online Demo](https://demo.rodolfosilva.me/adminer/)
