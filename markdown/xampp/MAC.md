# APACHE SERVER SETUP

##MAC
-  Download and install XAMPP from [apachefriends](https://www.apachefriends.org/download.html#849)

-  Run following command to open apache config file
    ````
    $ sudo nano /Applications/XAMPP/etc/httpd.conf
    ````
    1. **Set projects directory** - find these lines and change path to directory where you want to keep all your apache projects
        ````conf
        DocumentRoot "/Users/lucas/Projects"
        <Directory "/Users/lucas/Projects">
        ````
    
    2. Enable **virtual hosting** - so that you can have different domains for different projects
        ````
        # Virtual hosts
        Include etc/extra/httpd-vhosts.conf
        ````
  
- As we are going to work on multiple projects, we will need different local domains for different projects
    1. Now run following command to open apache virtual hosts config

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
    
    Your system should know, these are local domains we are working on. So we neeed to specify it in hosts file.
    
    1. Use following command to open hosts file
    
        ````
          $ sudo nano /etc/hosts
        ````
        
    2. Add domain poinitng to local
        ````
         127.0.0.1       local.piggy.com
        ````
