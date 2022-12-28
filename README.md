# adminer-password-pretected-with-plugins

Adminer with custmization: 
- Plugins: [https://www.adminer.org/plugins/]
- Password Protected: Forked Plugin  [https://github.com/rsilvabr/adminer-plugin-PasswordProtection]
- Dark Theme by Pepa Linha [http://webdream.cz] version 2.0.1

## How to use

1. Clone this repo, most to /var/www/html/adminer (create if not exist)

````
git clone https://github.com/rsilvabr/adminer-password-pretected-with-plugins.git 

````
2. Change index.php like the following:

````
nano index.php 
on line 44 change or not the path to adminer php file
include "../adminer-4.8.1.php";
````

File structure has to be like the following one:
````
- plugins
    - plugin.php
    - ...
../../adminer-<version>.php #This file must be in a folder with no web access
- index.php
````
