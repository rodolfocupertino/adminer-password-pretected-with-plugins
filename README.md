# adminer-password-pretected-with-plugins
Adminer Customized: 
- Plugins: 
- Password Protected:  
- Theme Dark 

## How to use

1. [Download](http://www.adminer.org/#download) and install Adminer tool.
1. Clone this repo (Normaly to /var/www/html/adminer) 
3. Change index.php like the following:

````
git clone ...
````

File structure has to be like the following one:
````
- plugins
    - plugin.php
    - ...
../../adminer-<version>.php #This file must be in a folder with no web access
- index.php
````
