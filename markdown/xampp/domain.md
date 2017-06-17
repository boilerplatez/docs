# LOCAL DOMAIN SETUP

## MAC
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
