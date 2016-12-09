# APACHE SERVER SETUP

##MAC
-  Download and install XAMPP from [apachefriends](https://www.apachefriends.org/download.html#849)

-  Open apache config file
    ````
    $ sudo nano /Applications/XAMPP/etc/httpd.conf
    ````
    1. **Set projects directory** - find these lines and change path to directory where you wan to keep all your apache projects
        ````conf
        DocumentRoot "/Users/lucas/Projects"
        <Directory "/Users/lucas/Projects">
        ````
    
    2. Enable **virtual hosting** - so that you can have different domains for different projetcs
        ````
        # Virtual hosts
        Include etc/extra/httpd-vhosts.conf
        ````
  
- Open apache virtual hosts config

    1. Open config file
        ````
        $ sudo nano /Applications/XAMPP/etc/extra/httpd-vhosts.conf
        ````
    
    2. Add one sample **local domain**  http://local.piggy.com

        ````
            <VirtualHost *:80>
                ServerAdmin webmaster@local.piggy.com
                DocumentRoot "/Users/lucas/Projects/piggy"
                ServerName local.piggy.com
                ServerAlias www.local.piggy.com
                ErrorLog "logs/local.piggy.com-error_log"
                CustomLog "logs/local.piggy.com-access_log" common
            </VirtualHost>
        ````

- **Local DNS mapping**
    1. Open hosts file
        ````
          $ sudo nano /etc/hosts
        ````
    2. Add domain poinitng to local
        ````
         127.0.0.1       local.piggy.com
        ````