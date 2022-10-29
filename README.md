# WG App

Simple web based application that allows us to enter expenses and calculates the amount owned by the other party.

## Setup Local Development
* You need to download the newest version of the MariaDB 10.3 release:
  * https://mariadb.org/download
* Easiest way is to download the ZIP version since this version does not require any installation. The next steps also assume you have downloaded the ZIP version.
* Unzip the downloaded file to your desired location and open a new command window in admin mode inside the unzipped folder in the /bin folder
* Run following command to initialize the database (only needs to be done once after download):
```
mysqld --initialize-insecure --user=mysql
```
* This initialized the database with the user mysql with no password
* Start the server (this does not require admin permissions anymore):
```
mysqld --console
```
* Create another console window in the same location to create the database (again this only needs to be done once after a fresh download):
```
$ mysql -h localhost -u root
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 8
Server version: 10.3.36-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> CREATE DATABASE wg CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> exit
Bye
```
* Following config entries have to be created in the .env file for the connection to work:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wg
DB_USERNAME=root
DB_PASSWORD=
```

@vite('resources/css/app.css')
