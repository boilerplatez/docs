# BASIC SYSTEM SETUP for NPM/Grunt/bower

- Setup NPM Project
````
$ npm init
````

- Install Bootloader Peer Dependencies

```
$ npm install grunt --save
$ npm install grunt-contrib-jshint --save
$ npm install grunt-contrib-clean  --save
$ npm install grunt-contrib-compass --save
$ npm install grunt-contrib-connect --save
$ npm install grunt-contrib-cssmin --save
$ npm install grunt-contrib-nodeunit --save
$ npm install grunt-contrib-uglify --save
$ npm install grunt-contrib-watch --save
$ npm install gitinfo --save
$ npm install grunt-bootloader --save

```

- Initialize bootloader project

```
$ bootloader create --name=myapp
```

- Load bower dependencies

```
$ bower install 
```