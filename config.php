<?php

//
// config.php
//
// To finish the installation, please follow these steps:
//
// 1. log in to phpmyadmin (or the command line mysql client)
// 2. create a database user
//    - set the host field to "localhost"
//    - pick a password or generate a random password
//    - give global SELECT permission
//    - give global INSERT permission
//    - give global UPDATE permission
//    - give global DELETE permission
//    - give global FILE permission
//    - give global CREATE permission
//    - give global ALTER permission
//    - give global INDEX permission
//    - give global DROP permission
//    - give global SHOW DATABASES permission
//    - e.g. mysql command line:
//      CREATE USER 'xxx'@'localhost' IDENTIFIED BY 'password';
//      GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, FILE, INDEX, ALTER, SHOW DATABASES ON *.* TO 'xxx'@'localhost' IDENTIFIED BY 'password';
// 4. put the database user in $db_user and the password in $db_pass
// 5. put a database name in $db_db - the database will automatically be created by the $db_user
// 6. open the app in a browser. You should see "Creating database 'xxx'" and "hit the refresh button on your browser"
//    - if you see an error message, check all steps 1-6
// 7. refresh the page to start the app
// 8. review the setting for $max_upload below. Typical usage needs will quickly exhaust the default 2 MiB limit.
//


//
// GetFoundFirst.com Reporting Engine
// Copyright 2013 ndisp.com and getfoundfirst.com
//
// This application is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public
// License as published by the Free Software Foundation; either
// version 3 of the License, or (at your option) any later version.
//
// This library is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// General Public License for more details.
//
// You should have received a copy of the GNU General Public
// License along with this code; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//


$db_db   = 'gffreports';	// choose a database name. This is the suggested name.
$db_user = 'gffreports';	// put the username here
$db_pass = 'Rexburg5.....';	// put the password here

// login for the web app
$webapp_user = "getfoundfirst";
$webapp_pass = "Rexburg5.....";


// the rest of these probably do not need changing
$db_host = 'localhost';
$db_port = '3306';
// only define $db_unix_socket after commenting out $db_port
// $db_unix_socket = '/var/run/mysqld/mysqld.sock';

// change the branding displayed on the pages
$title_brand = "GetFoundFirst.com Reporting Engine";

// for the code that warns you if your server is not set to accept large uploads
$max_upload = 1*1024*1024*1024;
