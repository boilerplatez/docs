# APACHE SERVER SETUP

## MAC
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
