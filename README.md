# adminer-password-pretected-with-plugins

Adminer with custmization: 
- Plugins: https://www.adminer.org/plugins/
- Password Protected: Forked Plugin  https://github.com/rsilvabr/adminer-plugin-PasswordProtection
- Dark Theme by Pepa Linha http://webdream.cz version 2.0.1

## How to use

1. Clone this repo, most to /var/www/html/adminer (create if not exist)

````
git clone https://github.com/rsilvabr/adminer-password-pretected-with-plugins.git .
move adminer-<version>.php to a dir without web access
Ex: 
mv admminer-4-8.1php /var/www/
````
2. Change index.php like the following:
````
nano index.php 
# on line 44 change (or not) the path to adminer-<version>.php file
include "../adminer-4.8.1.php";
````


## Update sha1 password hash
````
nano plugins/PasswordProtection.php

In **line 7** of the plugin code, **replace** the predefined hash with **your** sha1 password **hash**.

To generate your own sha1 password hash, you can use online tools like [sha1-online](http://www.sha1-online.com/).

````

File structure has to be like the following one:
````
- plugins
    - plugin.php
    - ...
../../adminer-<version>.php #This file must be in a folder with no web access
- index.php
- adminer.css
````

## Online Demo

https://demo.rodolfosilva.me/adminer/
