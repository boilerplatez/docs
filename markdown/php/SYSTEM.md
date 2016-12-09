# BASIC SYSTEM SETUP

##MAC

- Install *homebrew* and fix *git*
````
 $ ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
 $ brew doctor
 $ brew cask install tcl
````
- Install composer with following commands or follow links [download](https://getcomposer.org/download/) and [install](https://getcomposer.org/doc/00-intro.md#globally)
````
$ curl -s https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
````

#### Optional Setups
 
- Install NPM - Required only if you want to use bower.json or its javascript project
````
brew install node.js
````

- Install bower

```
$ sudo npm install -g bower
```

- Install GRUNT

```
$ sudo npm install -g grunt-cli
```

- Install compass,ttfautohint,fontforge

```
$ brew install ttfautohint fontforge --with-python
$ sudo gem install compass
```

